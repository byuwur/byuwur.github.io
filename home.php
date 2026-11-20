<?php
/*
 * File: home.php
 * Desc: Entry point for the Single Page Application (SPA). This file initializes configurations, handles routing, and loads the main structure of the SPA, including the header, content container, and footer. The page also includes necessary CSS and JS resources.
 * Deps: _init.php, _common.php, _functions.php, _plugin.php, _routes.php, _router.php
 * Copyright (c) 2026 Andrés Trujillo [Mateus] byUwUr
 */

?>
<!DOCTYPE html>
<?php
// Sets a flag to enable the inclusion of local storage variables in the HTML output
$setLocalStorage = true;
// Include the main variable configuration file
require_once "./_init.php";
// Include utility functions
require_once "{$TO_HOME}/spa.php/_functions.php";
//require_once "{$TO_HOME}/_functions.php";
// Include composer libraries
//require_once "{$TO_HOME}/spa.php/_plugins.php";
//require_once "{$TO_HOME}/_plugins.php";
// Include database connections
//require_once "{$TO_HOME}/_config.php";
// Route the request based on the URI
require_once "{$TO_HOME}/spa.php/_common.php";
// Give the router the language already validated by the SPA.
if (isset($_GET["lang"])) $_GET["lang"] = $APP_LANG;
require_once "{$TO_HOME}/_routes.php";
require_once "{$TO_HOME}/spa.php/_router.php";
// Include auth management
//require_once "{$TO_HOME}/spa.php/_auth.php";
//require_once "{$TO_HOME}/_auth.php";
// Include common functions and initializations that may require "/_routes.php"
require_once "{$TO_HOME}/_common.php";
// === PHP ===
?>

<head>
  <meta charset="UTF-8" />
  <meta name="referrer" content="origin" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://byuwur.co/img/logo.png" />
  <meta property="og:image:alt" content="[Mateus] byUwUr" />
  <meta property="og:url" content="https://byuwur.co<?= escape_html($uri) ?>" />
  <meta property="og:site_name" content="[Mateus] byUwUr" />
  <meta property="og:description" content="<?= escape_html($LANG["meta.description"]) ?>" />
  <meta property="og:locale" content="<?= escape_html($LANG["meta.locale"]) ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
  <meta name="description" content="<?= escape_html($LANG["meta.description"]) ?>" />
  <meta name="author" content="Andrés Trujillo Mateus" />
  <meta name="keywords" content="<?= escape_html($LANG["meta.keywords"]) ?>" />
  <meta name="copyright" content="[Mateus] byUwUr" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:creator" content="@byUwUr" />
  <meta name="twitter:description" content="<?= escape_html($LANG["meta.description"]) ?>" />
  <meta name="twitter:image" content="https://byuwur.co/img/logo.png" />
  <meta name="twitter:image:alt" content="[Mateus] byUwUr" />
  <link rel="canonical" href="https://byuwur.co<?= escape_html($uri) ?>" />
  <script>
    document.addEventListener("bySPA:load", ({
      detail
    }) => {
      const url = "https://byuwur.co" + detail.path;
      document.querySelector('link[rel="canonical"]').href = url;
      document.querySelector('meta[property="og:url"]').content = url;
    });
  </script>
  <?php if (in_array($uri, ["/", "/en", "/es", "/ja"], true)): ?>
    <link rel="alternate" hreflang="es" href="https://byuwur.co/es" />
    <link rel="alternate" hreflang="en" href="https://byuwur.co/en" />
    <link rel="alternate" hreflang="ja" href="https://byuwur.co/ja" />
    <link rel="alternate" hreflang="x-default" href="https://byuwur.co/" />
  <?php endif; ?>
  <meta name="theme-color" content="#300" />
  <link rel="icon" id="page-icon" type="image/png" href="<?= "{$HOME_PATH}/img/favicon.png" ?>" />
  <link rel="apple-touch-icon" href="<?= "{$HOME_PATH}/img/favicon.png" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/animate.min.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/fontawesome.min.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/jquery-ui.min.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/shards.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/bootstrap.min.css" ?>" />
  <!--link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/swiper.min.css" ?>" /-->
  <!--link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/select2.min.css" ?>" /-->
  <!--link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/dropzone.min.css" ?>" /-->
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/_common.css" ?>" />
  <script src="<?= "{$HOME_PATH}/spa.php/js/jquery.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/jquery-ui.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/popper.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/shards.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/bootstrap.min.js" ?>" defer></script>
  <!--script src="<?= "{$HOME_PATH}/spa.php/js/swiper.min.js" ?>" defer></script-->
  <!--script src="<?= "{$HOME_PATH}/spa.php/js/select2.full.min.js" ?>" defer></script-->
  <!--script src="<?= "{$HOME_PATH}/spa.php/js/dropzone.min.js" ?>" defer></script-->
  <script src="<?= "{$HOME_PATH}/spa.php/js/typed.min.js" ?>" defer></script>
  <!--script src="<?= "{$HOME_PATH}/spa.php/js/particles-ui.min.js" ?>" defer></script-->
  <script src="<?= "{$HOME_PATH}/spa.php/_functions.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/_common.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/_privacy.js" ?>" referrerpolicy="no-referrer" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/_spa.js" ?>" defer></script>
  <!--script src="https://www.google.com/recaptcha/api.js" defer></script-->
  <!-- Add your overrides below -->
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/_common.css" ?>" />
</head>

<body>
  <template id="site-analytics-frame">
    <meta name="referrer" content="no-referrer">
    <script>
      window.dataLayer = [];

      function gtag() {
        window.dataLayer.push(arguments);
      }
    </script>
  </template>
  <!-- byuwur/spa.php | Copyright (c) 2026 Andrés Trujillo [Mateus] byUwUr -->
  <noscript>
    <?php if ($uri === "/{$ROUTE_SITEMAP}" || isset($policyNotices[$uri])) { ?>
      <style>
        #spa-loader {
          display: none;
        }
      </style>
    <?php
      require $TO_HOME . $routes[$uri]["URI"];
    } else { ?>
      <section id="noscript-intro" aria-labelledby="noscript-title">
        <h1 id="noscript-title"><?= escape_html($LANG["profile.full_name"]) ?> | @byUwUr</h1>
        <h2><?= escape_html($LANG["seo.roles"]) ?></h2>
        <p><?= escape_html($LANG["seo.summary"]) ?></p>
        <p><?= escape_html($LANG["seo.location"]) ?></p>
        <p>
          <?= escape_html($LANG["seo.work"]) ?>
          <a href="https://github.com/byuwur/stream.fgc">stream.FGC</a>,
          <a href="https://github.com/byuwur/spa.php">SPA.php</a>,
          <a href="https://github.com/byuwur/md.view">MD.view</a>,
          <a href="https://github.com/byuwur/json.view">JSON.view</a> and
          <a href="https://github.com/byuwur/stream.html">stream.HTML</a>.
        </p>
        <p>
          <?= escape_html($LANG["seo.contact"]) ?>
          <a href="mailto:<?= escape_html($LANG["contact.mail"]) ?>">Email</a> ·
          <a href="<?= escape_html($LANG["social.linkedin.url"]) ?>">LinkedIn</a> ·
          <a href="<?= escape_html($LANG["social.github.url"]) ?>">GitHub</a>
        </p>
        <p><?= escape_html($LANG["seo.javascript"]) ?></p>
      </section>
    <?php } ?>
  </noscript>
  <section id="intro" class="d-none">
    <!-- Add a short description to help SEO -->
    <?= escape_html($LANG["meta.description"]) ?>
  </section>
  <nav id="spa-nav"></nav>
  <main id="spa-content"></main>
  <footer id="spa-foot"></footer>
  <p class="site-policy-links small text-center my-2"><a href="<?= escape_html($HOME_PATH) ?>/privacy"><?= escape_html(["es" => "Privacidad", "ja" => "プライバシー"][$APP_LANG] ?? "Privacy") ?></a> · <a href="<?= escape_html($HOME_PATH) ?>/cookies"><?= $APP_LANG === "ja" ? "Cookie" : "Cookies" ?></a> | <a href="<?= escape_html($HOME_PATH) ?>/sitemap"><?= escape_html($LANG["sitemap.title"]) ?></a></p>
  <div class="side-video"></div>
  <!--div id="particles"></div-->
  <div id="spa-loader">
    <div class="load-circle-back"></div>
    <div class="load-circle-fore"></div>
    <div class="load-text"><?= $LANG["loader.loading"] // Trusted layout HTML from the bundled language files. 
                            ?></div>
  </div>
  <div id="bywr-accessibility" class="uncolor-links">
    <a href="javascript:byCommon.accessibilityToggle();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.open_panel"]) ?>"
      title="<?= escape_html($LANG["accessibility.open_panel"]) ?>" aria-label="<?= escape_html($LANG["accessibility.open_panel"]) ?>">
      <i class="fas fa-universal-access"></i>
    </a>
    <div id="bywr-accessibility-buttons" class="hide">
      <a href="javascript:byCommon.accessibilityText('plus');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.increase_text"]) ?>"
        title="<?= escape_html($LANG["accessibility.increase_text"]) ?>" aria-label="<?= escape_html($LANG["accessibility.increase_text"]) ?>">
        <i class="fas fa-magnifying-glass-plus"></i>
      </a>
      <a href="javascript:byCommon.accessibilityText();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.reset_text"]) ?>"
        title="<?= escape_html($LANG["accessibility.reset_text"]) ?>" aria-label="<?= escape_html($LANG["accessibility.reset_text"]) ?>">
        <i class="fas fa-magnifying-glass"></i>
      </a>
      <a href="javascript:byCommon.accessibilityText('minus');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.decrease_text"]) ?>"
        title="<?= escape_html($LANG["accessibility.decrease_text"]) ?>" aria-label="<?= escape_html($LANG["accessibility.decrease_text"]) ?>">
        <i class="fas fa-magnifying-glass-minus"></i>
      </a>
      <a href="javascript:byCommon.accessibilityMotion();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.toggle_motion"]) ?>"
        title="<?= escape_html($LANG["accessibility.toggle_motion"]) ?>" aria-label="<?= escape_html($LANG["accessibility.toggle_motion"]) ?>">
        <i class="fas fa-wind"></i>
      </a>
      <a href="javascript:byCommon.accessibilityDyslexia();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.dyslexia"]) ?>"
        title="<?= escape_html($LANG["accessibility.dyslexia"]) ?>" aria-label="<?= escape_html($LANG["accessibility.dyslexia"]) ?>">
        <i class="fas fa-font"></i>
      </a>
      <a href="javascript:byCommon.accessibilityWordSpacing();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.word_spacing"]) ?>"
        title="<?= escape_html($LANG["accessibility.word_spacing"]) ?>" aria-label="<?= escape_html($LANG["accessibility.word_spacing"]) ?>">
        <i class="fas fa-text-width"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighlightLinks();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.highlight_links"]) ?>"
        title="<?= escape_html($LANG["accessibility.highlight_links"]) ?>" aria-label="<?= escape_html($LANG["accessibility.highlight_links"]) ?>">
        <i class="fas fa-link"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.high_contrast"]) ?>"
        title="<?= escape_html($LANG["accessibility.high_contrast"]) ?>" aria-label="<?= escape_html($LANG["accessibility.high_contrast"]) ?>">
        <i class="fas fa-circle-half-stroke"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast('invertchropia');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.invert_colors"]) ?>"
        title="<?= escape_html($LANG["accessibility.invert_colors"]) ?>" aria-label="<?= escape_html($LANG["accessibility.invert_colors"]) ?>">
        <i class="fas fa-droplet"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast('monochropia');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.grayscale"]) ?>"
        title="<?= escape_html($LANG["accessibility.grayscale"]) ?>" aria-label="<?= escape_html($LANG["accessibility.grayscale"]) ?>">
        <i class="fas fa-droplet-slash"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast('protanopia');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.protanopia"]) ?>"
        title="<?= escape_html($LANG["accessibility.protanopia"]) ?>" aria-label="<?= escape_html($LANG["accessibility.protanopia"]) ?>">
        <i class="fas fa-eye"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast('deuteranopia');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.deuteranopia"]) ?>"
        title="<?= escape_html($LANG["accessibility.deuteranopia"]) ?>" aria-label="<?= escape_html($LANG["accessibility.deuteranopia"]) ?>">
        <i class="fas fa-eye-slash"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast('tritanopia');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["accessibility.tritanopia"]) ?>"
        title="<?= escape_html($LANG["accessibility.tritanopia"]) ?>" aria-label="<?= escape_html($LANG["accessibility.tritanopia"]) ?>">
        <i class="fas fa-eye-low-vision"></i>
      </a>
    </div>
  </div>
  <script data-root="<?= "{$HOME_PATH}/" ?>">
    /* Optional analytics for this project's public website. */
    (() => {
      "use strict";
      // ===== WEBSITE AND ELIGIBLE ROUTES =====
      const project = "portfolio";
      const site = "byUwUr";
      const hosts = ["byuwur.co", "www.byuwur.co"];
      const measurement = "G-YBLWBPK758";
      const preference = "byuwur_analytics";
      const lifetime = 180 * 86400;
      const disable = "ga-disable-" + measurement;
      const production = location.protocol === "https:" && hosts.includes(location.host);
      const local = ["localhost", "127.0.0.1", "[::1]"].includes(location.hostname) ||
        location.protocol === "file:";
      if (window.top !== window || window.bySiteAnalytics) return;
      const siteRoot = new URL(document.currentScript.dataset.root, location.href);
      const requestedSettings = ["#privacy-controls", "#cookie-controls"].includes(location.hash);

      const actions = [
        "configuration_changed",
        "resource_selected",
        "resource_loaded",
        "content_processed",
        "resource_exported",
        "resource_copied"
      ];
      const routes = [
        "/",
        "/es",
        "/en",
        "/ja",
        "/v1",
        "/v1/es",
        "/v1/en",
        "/v1/ja",
        "/nestux",
        "/nestux/es",
        "/nestux/en",
        "/marco",
        "/marco/es",
        "/marco/en",
        "/mnm.team",
        "/mnm.team/es",
        "/mnm.team/en",
        "/mnm.team/proyectos",
        "/mnm.team/servicios",
        "/mnm.team/contacto",
        "/mnm.team/projects",
        "/mnm.team/services",
        "/mnm.team/contact",
        "/mnm.team/reservelapp",
        "/mnm.team/limontech",
        "/mnm.team/renn",
        "/mnm.team/redi"
      ];

      function route(url) {
        const path = url.pathname.replace(/\/index\.html$/, "/").replace(/\/$/, "") || "/";
        if (routes.includes(path)) return {
          path,
          surface: "landing",
          resource: "portfolio"
        };
      }

      // ===== CONSENT AND REFERRERS =====
      function choice() {
        const values = document.cookie.split("; ").filter(part => part.startsWith(preference + "="));
        if (values.length !== 1) return "";
        const match = /^byuwur_analytics=v1\.(yes|no)\.(\d{10})$/.exec(values[0]);
        const age = Date.now() / 1000 - Number(match?.[2]);
        return match && age >= 0 && age < lifetime && !(blockedChoice && match[1] === "yes") ? match[1] : "";
      }

      function safeReferrer(value) {
        try {
          const url = new URL(value);
          if (!["https:", "http:"].includes(url.protocol)) return "";
          if (hosts.includes(url.host)) {
            const page = route(url, true);
            if (page) return url.origin + page.path;
          }
          // A browser may supply a same-operator route. Retain only published path names.
          const path = url.pathname.replace(/\/$/, "") || "/";
          if (
            ["byuwur.co", "www.byuwur.co"].includes(url.host) &&
            /^\/(?:en|es|ja|(?:privacy|cookies)(?:\/(?:dotview|stream\.html|stream\.fgc|files\.host))?|v1(?:\/(?:en|es|ja))?)$/.test(
              path
            )
          )
            return url.origin + path;
          if (url.host === "spa.byuwur.co") return "";
          if (
            url.host === "stream.byuwur.co" &&
            /^\/(?:main|controller|keyboard|popup|clock|timer|webcam|ticker|watermark|lower-thirds|qr|reminder|badge|credits|schedule|sponsors|info|effects|hud|timeline|randomizer|quotes|shortcuts|chat|counter|now-playing)$/.test(
              path
            )
          )
            return url.origin + path + "/";
          return url.origin + "/";
        } catch {
          return "";
        }
      }

      // ===== GOOGLE TAG LIFECYCLE =====
      const denied = {
        ad_storage: "denied",
        ad_user_data: "denied",
        ad_personalization: "denied"
      };
      // Own the tag's browsing context so withdrawal can cancel Google's pending batch
      // without navigating away from unsaved work or changing the application's network policy.
      const frameTemplate = document.getElementById("site-analytics-frame");
      const pending = [];
      let frame, frameReady = false,
        page, controls, inlineSettings, configured = false;

      function tag(...args) {
        if (frameReady) frame.contentWindow.gtag(...frame.contentWindow.structuredClone(args));
        else pending.push(args);
      }
      let blockedChoice = false,
        expiryTimer;
      let previous = "",
        referrer = safeReferrer(document.referrer),
        generation = 0;
      if (production) window[disable] = true;

      function stop(clear) {
        if (!window[disable]) generation++;
        window[disable] = true;
        clearTimeout(expiryTimer);
        if (frameReady) {
          frame.contentWindow[disable] = true;
          const block = frame.contentDocument.createElement("meta");
          block.httpEquiv = "Content-Security-Policy";
          block.content = "default-src 'none'";
          frame.contentDocument.head.append(block);
          tag("consent", "update", {
            ...denied,
            analytics_storage: "denied"
          });
        }
        frame?.remove();
        frame = null;
        frameReady = false;
        pending.length = 0;
        configured = false;
        previous = "";
        if (clear && /(?:^|; )_ga(?:_YBLWBPK758)?=/.test(document.cookie)) {
          for (const name of ["_ga", "_ga_YBLWBPK758"]) {
            for (const domain of ["", "; Domain=" + location.hostname, "; Domain=byuwur.co"])
              document.cookie = name + "=; Max-Age=0; Path=/; Secure; SameSite=Lax" + domain;
          }
        }
      }

      // ===== USAGE COUNTS AND SYNCHRONIZATION =====
      let countedPath = "";

      function countUsage(action, resource = page?.resource) {
        if (!production || !page || !controls) return;
        if (action !== "page_view" && (blockedChoice || choice() === "no")) return;
        fetch("https://byuwur.co/usage.php", {
          method: "POST",
          body: [action, page.surface, resource].join("|"),
          credentials: "omit",
          referrerPolicy: "no-referrer",
          keepalive: true,
          redirect: "error",
          cache: "no-store"
        }).catch(() => {}); // Measurement must never interrupt the tool.
      }

      function sync() {
        if (!controls) return;
        if (!production) {
          controls.update(Boolean(page || inlineSettings));
          return;
        }
        const saved = choice();
        controls.update(Boolean(page || inlineSettings), saved);
        if (!page) countedPath = "";
        else if (page.path !== countedPath) {
          countedPath = page.path;
          countUsage("page_view");
        }
        if (!page || saved !== "yes") {
          stop(saved !== "yes");
          return;
        }
        window[disable] = false;
        if (!frame) {
          if (!frameTemplate) return;
          frame = document.createElement("iframe");
          frame.hidden = true;
          frame.title = "Google Analytics";
          frame.referrerPolicy = "no-referrer";
          const owner = frame;
          owner.onload = () => {
            if (owner !== frame) return;
            if (choice() !== "yes" || !page) {
              stop(false);
              return;
            }
            owner.onload = null;
            const doc = owner.contentDocument;
            try {
              // GA4 needs an HTTPS document. Drop the parent URL parameters before running the tag.
              doc.open();
              owner.contentWindow.history.replaceState(null, "", "/");
              doc.write("<!doctype html>" + frameTemplate.innerHTML);
              doc.close();
            } catch {
              stop(false);
              return;
            }
            if (typeof owner.contentWindow.gtag !== "function") {
              stop(false);
              return;
            }
            frameReady = true;
            for (const args of pending.splice(0)) tag(...args);
            const script = owner.contentDocument.createElement("script");
            script.async = true;
            script.referrerPolicy = "origin";
            script.onerror = () => {
              if (frame === owner) stop(false);
            };
            script.src = "https://www.googletagmanager.com/gtag/js?id=" + measurement;
            owner.contentDocument.head.append(script);
          };
          owner.srcdoc = "<!doctype html>";
          document.body.append(owner);
        }
        if (frameReady) frame.contentWindow[disable] = false;
        const locationID = location.origin + page.path;
        if (configured && previous === locationID) {
          scheduleExpiry();
          return;
        }
        const context = {
          project,
          surface: page.surface,
          resource: page.resource,
          page_location: locationID,
          page_title: site + " · " + page.surface,
          page_referrer: previous || referrer
        };
        tag("set", {
          ...context,
          send_page_view: false,
          allow_google_signals: false,
          allow_ad_personalization_signals: false
        });
        if (!configured) {
          tag("consent", "default", {
            ...denied,
            analytics_storage: "granted"
          });
          tag("js", new Date());
        }
        tag("config", measurement, {
          ...context,
          send_page_view: false,
          cookie_domain: "byuwur.co",
          cookie_path: "/",
          allow_google_signals: false,
          allow_ad_personalization_signals: false
        });
        configured = true;
        tag("event", "page_view", {
          ...context,
          send_to: measurement
        });
        previous = locationID;
        scheduleExpiry();
      }

      function scheduleExpiry() {
        // Long timeouts overflow in browsers. Recheck the cookie daily and at its actual expiry.
        clearTimeout(expiryTimer);
        const savedAt = Number(
          document.cookie.match(/(?:^|; )byuwur_analytics=v1\.yes\.(\d{10})(?:;|$)/)?.[1]
        );
        expiryTimer = setTimeout(
          sync,
          Math.min(86400000, Math.max(100, (savedAt + lifetime) * 1000 - Date.now()))
        );
      }

      // ===== TOOL ACTIONS =====
      function begin(action, field) {
        if (!production || !page || !controls || blockedChoice || choice() === "no") return;
        if (
          !actions.includes(action) ||
          (field && (action !== "configuration_changed" || !validField(field)))
        )
          return;
        const detailed = choice() === "yes" && !window[disable];
        const start = generation;
        const current = page.path;
        return () => {
          if (start !== generation || page?.path !== current) return;
          countUsage(action);
          if (!detailed) return;
          if (choice() !== "yes") {
            if (frame) sync();
            return;
          }
          if (start !== generation || page?.path !== current || !configured || window[disable]) return;
          tag("event", "tool_used", {
            send_to: measurement,
            project,
            surface: page.surface,
            resource: page.resource,
            action,
            ...(field ? {
              field_id: field
                .replace(/([a-z0-9])([A-Z])/g, "$1_$2")
                .replace(/-/g, "_")
                .toLowerCase()
            } : {})
          });
        };
      }

      function validField(field) {
        return false;
      }
      if (production) window.bySiteAnalytics = {
        begin,
        settings: () => controls?.open()
      };

      // ===== PRIVACY CONTROLS =====
      function saveChoice(value) {
        blockedChoice = value === "no";
        if (blockedChoice) stop(true);
        document.cookie =
          preference +
          "=v1." +
          value +
          "." +
          Math.floor(Date.now() / 1000) +
          "; Max-Age=" +
          lifetime +
          "; Domain=byuwur.co; Path=/; Secure; SameSite=Lax";
        if (value === "no" && document.cookie.includes(preference + "=v1.no.")) blockedChoice = false;
        sync();
      }

      function mountControls() {
        if (!page && !inlineSettings) {
          sync();
          return;
        }
        if (!window.byCommon?.initPrivacyControls) return;
        if (!controls) {
          controls = byCommon.initPrivacyControls({
            policyURL: new URL("privacy", siteRoot).href,
            cookiesURL: new URL("cookies", siteRoot).href,
            message: ({
              es: "Contamos visitas y algunas acciones por proyecto y, si está disponible, por país, sin identificadores del navegador. Aceptar activa las cookies de Google Analytics en los sitios indicados. Si rechazas la analítica, solo contamos las visitas.",
              ja: "ブラウザー識別子を使わずに、プロジェクト別にページ表示と一部の操作を数え、国が分かる場合は国別にも集計します。許可すると対象サイトで Google アナリティクスの Cookie も使用します。拒否した場合はページの表示回数だけを集計します。"
            })[document.documentElement.lang] || "We count page views and selected actions by project and, when available, country, without browser identifiers. Accept adds Google Analytics cookies across the listed sites. Reject keeps only the basic page-view count.",
            dismissalDomain: production ? "byuwur.co" : undefined,
            onChoice: production ? saveChoice : undefined
          });
          if (requestedSettings) controls.open();
        }
        sync();
        const panel = document.getElementById("privacy-controls");
        const suffix = inlineSettings?.dataset.projectSuffix || "";
        panel.querySelector("[data-policy]").href = new URL("privacy" + suffix, siteRoot).href;
        panel.querySelector("[data-cookies]").href = new URL("cookies" + suffix, siteRoot).href;
        if (inlineSettings) {
          document.getElementById("settings-link").hidden = false;
          document.querySelector("[data-settings-divider]").hidden = false;
        }
      }
      // ===== NAVIGATION AND LINK CLICKS =====
      function navigate(event) {
        const url = new URL(location.href);
        if (!production) {
          const base = siteRoot.pathname.replace(/\/$/, "");
          if (url.pathname === base || url.pathname.startsWith(base + "/"))
            url.pathname = url.pathname.slice(base.length) || "/";
        }
        const next = (production || local) && event.detail.uri !== "/privacy.php" ? route(url) : undefined;
        if (page?.path !== next?.path) generation++;
        page = next;
        inlineSettings = document.querySelector("[data-privacy-inline]");
        mountControls();
      }

      const links = new Map([
        ["https://byuwur.co/", ["open_project", "project_portfolio"]],
        ["https://stream.byuwur.co/", ["open_project", "project_stream_html"]],
        ["https://fgc.byuwur.co/", ["open_project", "project_stream_fgc"]],
        ["https://code.byuwur.co/", ["open_project", "project_code_view"]],
        ["https://csv.byuwur.co/", ["open_project", "project_csv_view"]],
        ["https://diff.byuwur.co/", ["open_project", "project_diff_view"]],
        ["https://json.byuwur.co/", ["open_project", "project_json_view"]],
        ["https://log.byuwur.co/", ["open_project", "project_log_view"]],
        ["https://mdedit.byuwur.co/", ["open_project", "project_md_edit"]],
        ["https://md.byuwur.co/", ["open_project", "project_md_view"]],
        ["https://xml.byuwur.co/", ["open_project", "project_xml_view"]],
        ["https://yaml.byuwur.co/", ["open_project", "project_yaml_view"]],
        ["https://github.com/byuwur/stream.html", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/spa.php", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/spa.js", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/stream.fgc", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/md.edit", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/md.view", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/json.view", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/csv.view", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/code.view", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/easy-http-error", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/easy-sidebar-bootstrap", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/easy-dropzone-php", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/limontech.py", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/onlinecongress.com.co", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/reservelapp.com", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/redi.com", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/renn.com", ["open_github", "github_repository"]],
        ["https://github.com/byuwur/nginx-configurations", ["open_github", "github_repository"]],
        ["https://github.com/byuwur", ["open_github", "github_profile"]],
        ["https://discord.byuwur.co/", ["open_community", "discord"]],
        ["mailto:mateus@byuwur.co", ["open_contact", "contact_email"]],
        ["https://calendly.com/atrujillomateus/30min", ["open_contact", "meeting"]],
        ["/resume", ["download_cv", "cv_pdf"]],
        ["/resume.en", ["download_cv", "cv_pdf"]],
        ["/resume.es", ["download_cv", "cv_pdf"]]
      ]);

      function click(event) {
        if (!event.isTrusted || (event.type === "auxclick" && event.button !== 1) || !page) return;
        const link = event.target.closest?.("a[href]");
        if (!link || link.closest("[contenteditable], [data-legal-document], #editor, #preview-panel")) return;
        const target = links.get(link.href) || (link.origin === location.origin && links.get(link.pathname));
        if (!target) return;
        countUsage(target[0], target[1]);
        if (choice() !== "yes") {
          if (frame) sync();
          return;
        }
        if (configured)
          tag("event", "resource_clicked", {
            send_to: measurement,
            project,
            surface: page.surface,
            action: target[0],
            resource: target[1]
          });
      }
      document.addEventListener("click", click, true);
      document.addEventListener("auxclick", click, true);
      document.addEventListener("bySPA:before-unload", () => {
        if (previous) referrer = previous;
        page = null;
        inlineSettings = null;
        controls?.update(false);
        if (production) window[disable] = true;
        if (frameReady) frame.contentWindow[disable] = true;
        generation++;
      });
      document.addEventListener("bySPA:load", navigate);
      document.addEventListener("bySPA:error", () => {
        page = null;
        inlineSettings = null;
        sync();
      });
      window.addEventListener("focus", sync);
      window.addEventListener("pageshow", sync);
      document.addEventListener("visibilitychange", () => {
        if (!document.hidden) sync();
      });
      window.cookieStore?.addEventListener("change", event => {
        if ([...event.changed, ...event.deleted].some(cookie => cookie.name === preference)) sync();
      });
    })();
  </script>
</body>

</html>
<?php
while (ob_get_level() > 0)
  ob_end_flush();
?>