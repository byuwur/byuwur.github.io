<!DOCTYPE html>
<?php
/*
 * File: home.php
 * Desc: Entry point for the Single Page Application (SPA). This file initializes configurations, handles routing, and loads the main structure of the SPA, including the header, content container, and footer. The page also includes necessary CSS and JS resources.
 * Deps: _var.php, _common.php, _functions.php, _plugin.php, _routes.php, _router.php
 * Copyright (c) 2026 Andrés Trujillo [Mateus] byUwUr
 */

// Sets a flag to enable the inclusion of local storage variables in the HTML output
$setLocalStorage = true;
// Include the main variable configuration file
require_once "./_var.php";
// Include utility functions
require_once "{$TO_HOME}/spa.php/_functions.php";
//require_once "{$TO_HOME}/_functions.php";
// Include common functions and initializations
require_once "{$TO_HOME}/spa.php/_common.php";
// Include composer libraries
//require_once "{$TO_HOME}/spa.php/_plugins.php";
//require_once "{$TO_HOME}/_plugins.php";
// Include database connections
//require_once "{$TO_HOME}/_config.php";
// Load the routes configuration
require_once "{$TO_HOME}/_routes.php";
// Route the request based on the URI
require_once "{$TO_HOME}/spa.php/_router.php";
// Include auth management
//require_once "{$TO_HOME}/spa.php/_auth.php";
//require_once "{$TO_HOME}/_auth.php";
// Include common functions and initializations that may require "/_routes.php"
require_once "{$TO_HOME}/_common.php";

// --- PHP ---
?>

<head>
  <title><?= escape_html($LANG["title.default"]) ?></title>
  <meta charset="utf-8" />
  <meta property="og:title" content="<?= escape_html($LANG["title.default"]) ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://byuwur.co/img/logo.png" />
  <meta property="og:image:alt" content="[Mateus] byUwUr" />
  <meta property="og:url" content="<?= escape_html($LANG["meta.url"]) ?>" />
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
  <meta name="twitter:title" content="<?= escape_html($LANG["title.default"]) ?>" />
  <meta name="twitter:description" content="<?= escape_html($LANG["meta.description"]) ?>" />
  <meta name="twitter:image" content="https://byuwur.co/img/logo.png" />
  <meta name="twitter:image:alt" content="[Mateus] byUwUr" />
  <link rel="canonical" href="<?= escape_html($LANG["meta.url"]) ?>" />
  <link rel="alternate" hreflang="es" href="https://byuwur.co/es" />
  <link rel="alternate" hreflang="en" href="https://byuwur.co/en" />
  <link rel="alternate" hreflang="ja" href="https://byuwur.co/ja" />
  <link rel="alternate" hreflang="x-default" href="https://byuwur.co/" />
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
  <script src="<?= "{$HOME_PATH}/spa.php/js/cookies.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/_functions.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/_common.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/_spa.js" ?>" defer></script>
  <!--script src="https://www.google.com/recaptcha/api.js" defer></script-->
  <!-- Add your overrides below -->
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/_common.css" ?>" />
</head>

<body>
  <!-- byuwur/spa.php | Copyright (c) 2026 Andrés Trujillo [Mateus] byUwUr -->
  <noscript>
    <section id="noscript-intro" aria-labelledby="noscript-title">
      <h1 id="noscript-title"><?= escape_html($LANG["profile.full_name"]) ?> | @byUwUr</h1>
      <h2><?= escape_html($LANG["seo.roles"]) ?></h2>
      <p><?= escape_html($LANG["seo.summary"]) ?></p>
      <p><?= escape_html($LANG["seo.location"]) ?></p>
      <p>
        <?= escape_html($LANG["seo.work"]) ?>
        <a href="https://github.com/byuwur/stream.fgc">Stream.FGC</a>,
        <a href="https://github.com/byuwur/spa.php">SPA.php</a>,
        <a href="https://github.com/byuwur/easy-md-viewer">Easy MD Viewer</a>,
        <a href="https://github.com/byuwur/easy-json-viewer">Easy JSON Viewer</a> and
        <a href="https://github.com/byuwur/stream.html">Stream.HTML</a>.
      </p>
      <p>
        <?= escape_html($LANG["seo.contact"]) ?>
        <a href="mailto:<?= escape_html($LANG["contact.mail"]) ?>">Email</a> ·
        <a href="<?= escape_html($LANG["social.linkedin.url"]) ?>">LinkedIn</a> ·
        <a href="<?= escape_html($LANG["social.github.url"]) ?>">GitHub</a>
      </p>
      <p><?= escape_html($LANG["seo.javascript"]) ?></p>
    </section>
  </noscript>
  <section id="intro" class="d-none">
    <!-- Add a short description to help SEO -->
    <?= escape_html($LANG["meta.description"]) ?>
  </section>
  <nav id="spa-nav"></nav>
  <main id="spa-content"></main>
  <footer id="spa-foot"></footer>
  <div class="side-video"></div>
  <!--div id="particles"></div-->
  <div id="spa-loader">
    <div class="load-circle-back"></div>
    <div class="load-circle-fore"></div>
    <div class="load-text"><?= $LANG["loader.loading"] // Trusted layout HTML from the bundled language files. ?></div>
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
</body>

</html>
<?php
while (ob_get_level() > 0)
  ob_end_flush();
?>