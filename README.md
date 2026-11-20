# byUwUr’s portfolio

Portfolio, projects and résumé, built on SPA.php.

## Index

1. [Quick start](#quick-start)
2. [Try it](#try-it)
3. [Projects](#projects)
4. [Releases](#releases)
5. [Contributing](#contributing)
6. [License](#license)

## Quick start

From the repository root, initialize the framework and serve the site with PHP. Open [the home page](http://127.0.0.1:8000/home.php).

```sh
git submodule update --init --recursive
php -S 127.0.0.1:8000
```

## Try it

[Live site](https://byuwur.co) · [GitHub Pages](https://byuwur.github.io)

## Projects

- [spa.php](https://github.com/byuwur/spa.php): PHP SPA framework.
- [stream.HTML](https://github.com/byuwur/stream.html): configurable stream overlays and resources.
- [MD.view](https://github.com/byuwur/md.view): Markdown renderer for HTML pages.
- [JSON.view](https://github.com/byuwur/json.view): JSON renderer for HTML pages.
- [easy-http-error](https://github.com/byuwur/easy-http-error): server error pages.
- [easy-sidebar-bootstrap](https://github.com/byuwur/easy-sidebar-bootstrap): Bootstrap/jQuery sidebar.
- [nginx-configurations](https://github.com/byuwur/nginx-configurations): server configuration examples.

## Releases

Releases link each change to its commit and compare the release tag with the previous tag. The portfolio deploys separately. The [release workflow](.github/workflows/release.yml) renders the PHP shell and home content with the pinned SPA.php submodule before publishing history-only notes.

Preview locally with Node.js 22+ from the repository root:

```sh
node .github/scripts/release.mjs --tag v0.0.0-local
node --test .github/tests/release.mjs
```

Read `dist/RELEASE_NOTES.md`. Only a pushed version tag publishes the notes.

## Website analytics

The eligible byUwUr sites share the existing GA4 stream **byUwUr.co** (`G-YBLWBPK758`). Each participating site links to its own complete privacy and cookie policies. The viewer and editor playgrounds share one pair. stream.HTML, stream.FGC, files.host and the portfolio each have a separate pair. The SPA demos and files.host are outside website measurement. Edit the English, Spanish and Japanese Markdown sources in this repository’s legal directory. Policy pages use the portfolio SPA shell and render localized Markdown with the minified CSS and JavaScript from jsDelivr (`byuwur/md.view@latest`). Sources follow `legal/{privacy|cookies}.{resource}.{lang}.md`, including `.en.md` for English. The source text remains readable with JavaScript disabled. They send no usage events. The portfolio loads the privacy controls directly from its installed SPA.php dependency at `spa.php/_privacy.js`. The production hostname, route and a valid affirmative `byuwur_analytics` preference gate initialization. The setting lasts 180 days. The accepted page starts the Google tag in its own same-origin frame. Withdrawal disables the property, blocks that frame’s pending network traffic and removes it without discarding unsaved work. A different tab checks before events and on focus. Browsers that deliver Cookie Store notifications can also apply withdrawal in the background.

| Event              | Meaning                                                                                                               | Dimensions                                                 |
| ------------------ | --------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------- |
| `usage_count`      | Basic page views on every eligible visit. Predefined actions count until analytics is rejected                        | project, action, surface, resource, usage_country          |
| `page_view`        | Current eligible document after consent or a completed SPA navigation                                                 | project, surface, resource                                 |
| `tool_used`        | A committed configuration change, predefined selection, successful load or process, export handoff or successful copy | project, surface, resource, action, field_id when relevant |
| `resource_clicked` | An intentional predefined link to GitHub, a project, CV, contact or community                                         | project, surface, resource, action                         |

Tool actions are `configuration_changed`, `resource_selected`, `resource_loaded`, `content_processed`, `resource_exported` and `resource_copied`. Link actions are `open_github`, `open_project`, `download_cv`, `open_contact` and `open_community` where the project has a matching link. The code allowlists fields and destinations. Link destinations, setting values and document contents stay out of event parameters. Download and copy measure only the browser handoff. The nine viewer/editor projects keep these hooks in their websites. stream.HTML measures its catalog and configurators. stream.FGC measures its web directory.

### Property and reporting

- Deploy `usage.php` to the portfolio origin with PHP cURL enabled. Store the existing GA4 web stream’s Measurement Protocol API secret in the GitHub Actions secret `GOOGLE_ANALYTICS_4_API_KEY`. The FTP workflow installs Composer dependencies and writes the secret to the portfolio’s `.env`, which the collector reads with `vlucas/phpdotenv`. The collector returns 503 when the secret or cURL is unavailable. Review the host's access logging separately: the collector writes no visitor log, but the web server still handles network addresses.
- For basic totals in Explore, filter Event name to `usage_count`, use Event count, and break it down by the existing Project and Action dimensions. Each request sends one server event. The one reporting-service client represents the server; exclude this event from visitor, location, session and cohort reports. Consented interactions also appear in the detailed events, so do not add those event counts together. Rejected actions, blocked requests and undelivered events are absent. GA receipt needs a live report check after deployment.
- To break down basic counts by country, register **Usage country** as an event-scoped dimension with parameter `usage_country`. Use this dimension for the counter so Google’s location for the reporting server is never mistaken for a visitor’s. The PHP host can supply a trusted per-request `GEOIP_COUNTRY_CODE` from its GeoIP module. Missing or unspecified country is reported as `unknown`. The collector ignores browser-supplied country headers, regions and coordinates.

- The owner confirmed one stream (numeric ID 16367202113), five event-scoped dimensions, and 14-month user and event retention with reset on activity off. That switch does not extend old events. The requested reporting timezone is America/Bogota. Verify the property timezone and advertising personalization in Admin.
- Keep Enhanced Measurement off, including history page views, outbound clicks, downloads, forms, search, scrolling and video. The adapters set `send_page_view: false`. Google signals, user-provided data and granular device/location collection are off.
- After deployment of approved notices, use Network and Realtime, then an explicit Tag Assistant/DebugView test session. Reject, accept, change, copy and withdraw. Inspect page location, referrer, event parameters and request headers. Follow portfolio → Stream → a viewer in one browser and compare client and session identifiers. Check blocked browsers and already-open tabs separately. Keep debug mode off for ordinary traffic.
- In a usage exploration, filter separately to `tool_used` and `resource_clicked`. Break down Event count and Total users by project, surface, resource and action. Measured users can appear in several rows and their counts cannot be summed.
- For weekly or monthly cohorts, require useful activity for **both** inclusion and return. Use tool actions for tools and relevant link clicks for portfolio repeat interest. For same-project retention, require the same project on both events. Verify with a visitor who uses project A and returns only to B. If the exploration cannot enforce both predicates, label it ecosystem retention.
- Use acquisition source/medium, canonical page paths and hostnames for journeys. Consent, browser restrictions, blockers and cookie loss limit attribution. For a durable annual record, manually export the year's summary with dates, filters and metric definitions. Aggregates and cookie lifetimes are independent of the 14-month detail window.

[Manual page views](https://developers.google.com/analytics/devguides/collection/ga4/views) · [Event retention](https://support.google.com/analytics/answer/7667196) · [Cohort exploration](https://support.google.com/analytics/answer/9670133)

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md) for the workflow and [CODING_STANDARDS.md](CODING_STANDARDS.md) for engineering standards.

## License

MIT (c) Andrés Trujillo [Mateus] byUwUr · [License](LICENSE.md)
