---
name: project-native-workflow
description: Adopt or recover a simple, project-native engineering and contribution workflow from the companion guidance files. Use when asked to work according to these standards or resume an interrupted task under them.
---

# Project-native workflow

Adopt the working approach **Simple is complicated enough**: complete the authorized task with clear, direct code, justified complexity, and evidence for the result.

## Load the working agreements

Read these companion files in full before claiming the workflow has been restored:

- [AGENTS.md](AGENTS.md) for execution, scope, and communication.
- [CODING_STANDARDS.md](CODING_STANDARDS.md) for canonical engineering policy and applicable language conventions.
- [CONTRIBUTING.md](CONTRIBUTING.md) for contribution, commit, and review expectations.

Resolve these links from this file's directory, or from its URL when reading remotely. Keep all four files together when copying this recovery set. If a companion is unavailable, obtain its location or contents rather than inventing its requirements.

For each actual task, also read the target project's README, applicable local instructions, relevant implementation, callers, and tests. Current user instructions and explicit project requirements govern; this skill and remembered preferences remain derived guidance. Apply language-specific rules only where they fit. Do not impose a browser architecture, namespace, framework, or previous project's exceptions on unrelated work.

Apply the adopted workflow to subsequent tasks in the current session until the user changes it. A fresh session needs to read this recovery set again or load an installed copy; reading it does not itself install configuration or recreate previous conversation state. If the user only asks to adopt the workflow, acknowledge briefly and wait for an actual task.

## Carry out the task

1. Establish the intended outcome and authorized repository or file scope. Use available context and inspect existing contracts before asking questions; ask when missing information is necessary for correctness. Do not expand a request to update one copy into a synchronization pass across every project.
2. Inspect the working tree and relevant history before editing or staging. Identify the owner, invariant, state authority, and lifecycle of the behavior. Preserve unrelated work and use an external snapshot when a broad pass or partial staging needs one.
3. Prefer deleting, simplifying, or reusing existing code before introducing a helper, abstraction, dependency, or layer. Use descriptive names and the project's native tools. Keep public APIs small and compatible, with internal helpers private unless callers need them.
4. Match the existing organization, formatting, encoding, line endings, and tool annotations. Work on authored source and keep generated/minified, vendor, installed-module, and submodule contents out of bulk edits. Keep scratch tools and temporary validation artifacts outside repositories.
5. Complete the necessary implementation and affected integrations. For an authorized consistency pass, inspect relevant shared owners and consumers while preserving intentional differences. Keep public options, examples, documentation, and tests coherent wherever those paths exist.
6. Run existing, focused checks that establish actual behavior. Add meaningful regression coverage when needed. Separate product defects, stale assertions, environment failures, fixture substitutions, and unpublished dependencies. State what ran and what remains unverified; do not weaken checks or repeat setup work merely to obtain a green result.
7. Review the complete diff and affected entry paths. Remove unnecessary complexity, unrelated formatting, speculative interfaces, and dependencies without a concrete benefit. Preserve immediate useful output and verify any relevant performance or accessibility effects.
8. Finish the authorized work and report the result concisely: what changed, validation performed, and critical caveats or remaining action. Use progress updates for meaningful decisions or blockers rather than routine narration. A plan or capability statement does not complete an implementation request.

## Commits and releases

Create commits only when the current task authorizes them. Stage the relevant files and hunks into focused, reviewable changes that show a sensible progression; keep directly required tests and documentation with their behavior change.

Follow the maintained commit standard: `[Type] [Area] Concrete change`, with no colon. Use **Upgrade** for version changes and keep the version upgrade last in the requested progression. Update all applicable version references from the owning source or metadata, preserving deliberate pins and the requested scope. Local checks do not establish that a tag or CDN asset has been published.

Pushing, publishing, deploying, merging, and changing agent configuration require the authorization appropriate to the current task. Adopting this workflow supplies working conventions, not permission for those actions.

## Resume interrupted work

When asked to continue, recover the original objective, accepted corrections, scope, and remaining work from the available conversation or supplied checkpoint. Check that record against the current branch/revision, working tree, files, and validation evidence. Preserve later changes and distinguish completed work from plans or unverified claims.

Resume the first unfinished authorized step instead of restarting completed work or silently dropping a remaining slice. Re-run checks when changes or unresolved concerns justify it. If the available record cannot establish a required decision or state, inspect the surviving artifacts and ask only for what is still necessary.

A useful checkpoint records the objective and scope, repository and revision, key decisions, completed and remaining work, exact validation results and limitations, and the location of preserved uncommitted changes. Keep recovery notes outside project repositories unless a different location is explicitly requested. Recover the actual source from Git or saved patches/snapshots; working instructions cannot reconstruct missing code or undocumented history.

## Hand this workflow to another agent

Ask the next agent:

> Read SKILL.md and the three guidance files it links to. Apply this workflow to my current task and subsequent work in this session. Preserve the target project's explicit requirements, verify the current state, and continue any unfinished authorized work from the supplied checkpoint.

This repository copy is a portable backup. To install it as a personal skill, copy this file and its three companions into a `project-native-workflow` folder in the receiving agent's supported user-level skill location, outside project repositories. Use that agent's installation instructions rather than assuming a particular machine path. Tools and task checkpoints are separate from this working-style recovery set.
