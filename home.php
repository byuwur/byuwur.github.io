<!DOCTYPE html>
<?php
/*
 * File: home.php
 * Desc: Entry point for the Single Page Application (SPA). This file initializes configurations, handles routing, and loads the main structure of the SPA, including the header, content container, and footer. The page also includes necessary CSS and JS resources.
 * Deps: _var.php, _common.php, _functions.php, _plugin.php, _routes.php, _router.php
 * Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr
 */

// Sets a flag to enable the inclusion of local storage variables in the HTML output
$setLocalStorage = true;
// Include the main variable configuration file
require_once "./_var.php";
// Include common functions and initializations
require_once "{$TO_HOME}/spa.php/_common.php";
// Include utility functions
require_once "{$TO_HOME}/spa.php/_functions.php";
//require_once "{$TO_HOME}/_functions.php";
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
  <title><?= htmlspecialchars($LANG["title.default"], ENT_QUOTES, "UTF-8") ?></title>
  <meta charset="utf-8" />
  <meta property="og:title" content="<?= htmlspecialchars($LANG["title.default"], ENT_QUOTES, "UTF-8") ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://byuwur.co/img/logo.png" />
  <meta property="og:url" content="https://byuwur.co" />
  <meta property="og:site_name" content="<?= htmlspecialchars($LANG["title.default"], ENT_QUOTES, "UTF-8") ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($LANG["meta.description"] ?? "Desarrollador de software | Editor de video", ENT_QUOTES, "UTF-8") ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
  <meta name="description" content="<?= htmlspecialchars($LANG["meta.description"] ?? "Desarrollador de software | Editor de video", ENT_QUOTES, "UTF-8") ?>" />
  <meta name="author" content="Andrés Trujillo [Mateus] byUwUr" />
  <meta name="keywords" content="Mateus, byUwUr, byuwur, Mateus byUwUr" />
  <meta name="copyright" content="[Mateus] byUwUr" />
  <meta name="robots" content="index, follow" /> <!-- Decommented to get indexed -->
  <meta name="theme-color" content="#300" />
  <link rel="icon" id="page-icon" type="image/png" href="<?= "{$HOME_PATH}/img/favicon.png" ?>" />
  <link rel="apple-touch-icon" href="<?= "{$HOME_PATH}/img/favicon.png" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/animate.min.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/fontawesome.min.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/jquery-ui.min.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/shards.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/bootstrap.min.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/swiper.min.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/select2.min.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/css/dropzone.min.css" ?>" />
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/spa.php/_common.css" ?>" />
  <script src="<?= "{$HOME_PATH}/spa.php/js/jquery.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/jquery-ui.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/popper.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/shards.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/bootstrap.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/swiper.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/select2.full.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/dropzone.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/typed.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/particles.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/js/cookies.min.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/_functions.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/_common.js" ?>" defer></script>
  <script src="<?= "{$HOME_PATH}/spa.php/_spa.js" ?>" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" defer></script>
  <!-- Add your overrides below -->
  <link rel="stylesheet" href="<?= "{$HOME_PATH}/_common.css" ?>" />
</head>

<body>
  <!-- byuwur/spa.php | Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr -->
  <section id="intro" class="d-none">
    <!-- Add a short description to help SEO -->
    <?= htmlspecialchars($LANG["meta.description"], ENT_QUOTES, "UTF-8") ?>
  </section>
  <div id="spa-loader">
    <div class="load-circle-back"></div>
    <div class="load-circle-fore"></div>
    <div class="load-text"><?= $LANG["loader.loading"] ?></div>
  </div>
  <div id="bywr-accessibility">
    <a href="javascript:byCommon.accessibilityToggle();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.open_panel"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.open_panel"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.open_panel"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-universal-access"></i>
    </a>
    <div id="bywr-accessibility-buttons" class="hide">
      <a href="javascript:byCommon.accessibilityText('plus');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.increase_text"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.increase_text"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.increase_text"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-magnifying-glass-plus"></i>
      </a>
      <a href="javascript:byCommon.accessibilityText();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.reset_text"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.reset_text"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.reset_text"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-magnifying-glass"></i>
      </a>
      <a href="javascript:byCommon.accessibilityText('minus');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.decrease_text"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.decrease_text"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.decrease_text"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-magnifying-glass-minus"></i>
      </a>
      <a href="javascript:byCommon.accessibilityMotion();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.toggle_motion"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.toggle_motion"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.toggle_motion"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-wind"></i>
      </a>
      <a href="javascript:byCommon.accessibilityDyslexia();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.dyslexia"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.dyslexia"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.dyslexia"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-font"></i>
      </a>
      <a href="javascript:byCommon.accessibilityWordSpacing();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.word_spacing"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.word_spacing"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.word_spacing"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-text-width"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighlightLinks();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.highlight_links"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.highlight_links"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.highlight_links"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-link"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast();" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.high_contrast"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.high_contrast"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.high_contrast"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-circle-half-stroke"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast('invertchropia');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.invert_colors"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.invert_colors"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.invert_colors"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-droplet"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast('monochropia');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.grayscale"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.grayscale"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.grayscale"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-droplet-slash"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast('protanopia');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.protanopia"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.protanopia"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.protanopia"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-eye"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast('deuteranopia');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.deuteranopia"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.deuteranopia"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.deuteranopia"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-eye-slash"></i>
      </a>
      <a href="javascript:byCommon.accessibilityHighContrast('tritanopia');" role="button" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["accessibility.tritanopia"], ENT_QUOTES, "UTF-8") ?>" title="<?= htmlspecialchars($LANG["accessibility.tritanopia"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["accessibility.tritanopia"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-eye-low-vision"></i>
      </a>
    </div>
  </div>
  <div id="particles"></div>
  <div class="side-video"></div>
  <nav id="spa-nav"></nav>
  <main id="spa-content"></main>
  <footer id="spa-foot"></footer>
</body>

</html>
<?php
while (ob_get_level() > 0) ob_end_flush();
?>
