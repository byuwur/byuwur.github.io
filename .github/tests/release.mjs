import "./cleanup.mjs";
/** @file Exercise actual Git history formatting and the history-only GitHub publication contract. */
import assert from "node:assert/strict";
import * as fs from "node:fs/promises";
import path from "node:path";
import test from "node:test";
import { config, dist, git, publishRelease, releaseNotes, validateTag } from "../scripts/release.mjs";

const directory = path.join(dist, "assets");
const manifest = JSON.parse(await fs.readFile(path.join(directory, "manifest.json"), "utf8"));
const environment = {
  GITHUB_REPOSITORY: config.repository,
  GITHUB_REF_TYPE: "tag",
  GITHUB_REF_NAME: manifest.tag,
  GITHUB_SHA: manifest.changelog.commit,
  GH_TOKEN: "mock-token"
};

// ===== RELEASE ARTIFACTS TESTS =====
test("history previews use the checked-out commit and link only each short hash", () => {
  assert.equal(manifest.changelog.commit, git("rev-parse", "HEAD"));
  const notes = releaseNotes({
    ...manifest,
    changelog: {
      previousTag: "v1.0",
      ref: "v1.1",
      commits: [{ sha: "a".repeat(40), subject: "[Fix] Keep <markup> and *literal* text" }]
    }
  });
  assert.ok(notes.includes(`- ([aaaaaaa](https://github.com/${config.repository}/commit/${"a".repeat(40)})) \\[Fix\\] Keep \\<markup\\> and \\*literal\\* text`));
  assert.ok(notes.includes("/compare/v1.0...v1.1"));
  for (const tag of ["v1.0", "v1.0.1", "v1.0.1-rc.1"]) assert.equal(validateTag(tag), tag);
  for (const tag of ["main", "../v1.0", "v01.0", "v1.0-01"]) assert.throws(() => validateTag(tag));
});

test("publication creates an asset-free release and refuses published or mismatched provenance", async () => {
  let release;
  const calls = [];
  const request = async (url, options = {}) => {
    const method = options.method || "GET";
    calls.push({ url, method });
    const json = (value, status = 200) => new Response(JSON.stringify(value), { status });
    if (url.includes("/releases/tags/")) return release ? json(release) : json({}, 404);
    if (method === "POST" && url.endsWith("/releases")) {
      release = { id: 1, ...JSON.parse(options.body) };
      return json(release, 201);
    }
    if (method === "GET" && url.includes("/assets?")) return json([]);
    if (method === "PATCH") {
      Object.assign(release, JSON.parse(options.body));
      return json(release);
    }
    assert.fail(`Unexpected request ${method} ${url}`);
  };
  await publishRelease({ request, environment, directory });
  assert.equal(release.draft, false);
  assert.equal(calls.filter((call) => call.method === "POST").length, 1);
  assert.ok(!calls.some((call) => call.url.includes("uploads.github.com")));
  await assert.rejects(publishRelease({ request, environment, directory }), /already published/);
  await assert.rejects(
    publishRelease({
      request,
      environment: { ...environment, GITHUB_SHA: "0".repeat(40) },
      directory
    }),
    /exact tagged commit/
  );
});
