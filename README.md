# byUwUr's portfolio

Where the magic happens.

Visit [byuwur.github.io](https://byuwur.github.io) or [byuwur.co](https://byuwur.co).

## Projects used here

- [spa.php](https://github.com/byuwur/spa.php): PHP SPA framework.
- [stream.html](https://github.com/byuwur/stream.html): configurable stream overlays and resources.
- [MD.view](https://github.com/byuwur/md.view): MarkDown renderer for HTML pages.
- [JSON.view](https://github.com/byuwur/json.view): JSON renderer for HTML pages.
- [easy-http-error](https://github.com/byuwur/easy-http-error): server error pages.
- [easy-sidebar-bootstrap](https://github.com/byuwur/easy-sidebar-bootstrap): Bootstrap/jQuery sidebar.
- [nginx-configurations](https://github.com/byuwur/nginx-configurations): server configuration examples.

## Releases

[Release workflow](.github/workflows/release.yml) builds a reviewable preview on pushes to `main`, pull requests, and manual runs. Only a pushed version tag publishes a GitHub release. Source/browser checks and the complete distribution build must succeed on both main and tag runs before publication. Failed builds remove their own temporary stage and retain the last completed output. Two-part tags such as `v1.8` and three-part tags such as `v1.8.1` are supported. Keep release tags consistent with the project's source version.

Releases contain commit history only, with each short hash linked to its commit and the message shown as plain text. The full changelog compares the previous reachable version tag with the actual release tag; local previews use their commit SHA. No downloadable assets are attached. The existing portfolio deployment is independent.

### Local preview

Requires Node.js 22 or newer; no npm installation is needed. Run from the repository root. In PowerShell, use `npm.cmd` if execution policy blocks `npm`.

```sh
node .github/scripts/release.mjs --tag v0.0.0-local
node --test .github/tests/release.mjs
```

Open `dist/RELEASE_NOTES.md` for the generated notes and `dist/assets/` for the complete tested output. Download `tested-release` from the workflow run to review CI results. Local commands and manual runs do not publish.

### Script responsibilities

- [release.json](.github/release.json) owns the repository identity and history-only release mode.
- [release.mjs](.github/scripts/release.mjs) reads the real Git history. `--check` validates the exact pushed tag on `main`; `--publish` verifies the tested output and creates or resumes its matching draft before publishing.
- [release tests](.github/tests/release.mjs) verify commit formatting and the asset-free publication contract with a mock GitHub API.

The workflow uses read-only access while building/testing, passes the exact tested output to a separate publication job, and grants write access only there. Published releases are never overwritten. A failed publication leaves its draft available for a matching rerun. Tag pushes and live release publication are separate from local validation.

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md) for the workflow and [CODING_STANDARDS.md](CODING_STANDARDS.md) for engineering standards.

## License

MIT (c) Andrés Trujillo [Mateus] byUwUr

[![Ask DeepWiki](https://deepwiki.com/badge.svg)](https://deepwiki.com/byuwur/byuwur.github.io)
