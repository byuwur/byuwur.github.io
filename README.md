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

### Property and reporting

- Deploy `usage.php` to the portfolio origin with PHP cURL enabled. In the existing GA4 web stream, create a Measurement Protocol API secret and set it on the PHP server as `BYUWUR_GA4_API_SECRET`. Keep it out of browser code, source control and logs. The collector returns 503 until configured. Review the host's access logging separately: the collector writes no visitor log, but the web server still handles network addresses.
- For basic totals in Explore, filter Event name to `usage_count`, use Event count, and break it down by the existing Project and Action dimensions. Each request sends one server event. The one reporting-service client represents the server; exclude this event from visitor, location, session and cohort reports. Consented interactions also appear in the detailed events, so do not add those event counts together. Rejected actions, blocked requests and undelivered events are absent. GA receipt needs a live report check after deployment.
- To break down basic counts by country, register **Usage country** as an event-scoped dimension with parameter `usage_country`. Use this dimension for the counter so Google’s location for the reporting server is never mistaken for a visitor’s. The PHP host can supply a trusted per-request `GEOIP_COUNTRY_CODE` from its GeoIP module. Missing or unspecified country is reported as `unknown`. The collector ignores browser-supplied country headers, regions and coordinates.

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md) for the workflow and [CODING_STANDARDS.md](CODING_STANDARDS.md) for engineering standards.

## License

MIT (c) Andrés Trujillo [Mateus] byUwUr · [License](LICENSE.md)
