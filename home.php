<!DOCTYPE html>
<?php
/*
 * File: home.php
 * Desc: Entry point for the Single Page Application (SPA). This file initializes configurations, handles routing, and loads the main structure of the SPA, including the header, content container, and footer. The page also includes necessary CSS and JS resources.
 * Deps: _var.php, _common.php, _functions.php, _plugin.php, _routes.php, _router.php
 * Copyright (c) 2023 Andrés Trujillo [Mateus] byUwUr
 */

// Sets a flag to enable the inclusion of local storage variables in the HTML output
$setLocalStorage = true;
// Include the main variable configuration file
require_once "./_var.php";
// Include common functions and initializations
require_once $TO_HOME . "_common.php";
// Include utility functions
require_once $TO_HOME . "_functions.php";
// Include composer libraries
require_once $TO_HOME . "_plugins.php";
// Include database connections
//require_once $TO_HOME . "_config.php";
// Load the routes configuration
require_once $TO_HOME . "_routes.php";
// Route the request based on the URI
require_once $TO_HOME . "_router.php";
// Include auth management
//require_once $TO_HOME . "_auth.php";
// Include utility HTML
//require_once $TO_HOME . "common.php";

// --- PHP ---
?>

<head>
    <meta charset="utf-8" />
    <title><?= $_title; ?></title>
    <meta property="og:title" content="[Mateus] byUwUr" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://byuwur.net/img/icon.png" />
    <meta property="og:url" content="https://byuwur.net" />
    <meta property="og:site_name" content="[Mateus] byUwUr" />
    <meta property="og:description" content="Programador | Desarrollador de software | Editor de Vídeo | Creador de Contenido Digital" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en,es" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Programador | Desarrollador de software | Editor de Vídeo | Creador de Contenido Digital" />
    <meta name="author" content="Andrés Trujillo Mateus" />
    <meta name="keywords" content="Mateus, byUwUr, byuwur, MNM, Team, MNM Team" />
    <meta name="copyright" content="[Mateus] byUwUr" />
    <meta name="theme-color" content="#222" /> <!-- Kept from the first snippet; adjust if needed -->
    <link rel="shortcut icon" type="image/png" href="<?= $HOME_PATH; ?>/favicon.png" />
    <link rel="icon" type="image/png" href="<?= $HOME_PATH; ?>/favicon.png" />
    <link rel="apple-touch-icon" href="<?= $HOME_PATH; ?>/favicon.png" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>/plugin/bootstrap/css/bootstrap.resume.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>/plugin/bootstrap/css/bootstrap.mateus.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>/plugin/owl-carousel/css/owl-carousel.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>/plugin/magnific/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>/plugin/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>/plugin/themify/themify-icons.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>/common.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>/common.<?= $app_theme; ?>.css" />
    <script src="<?= $HOME_PATH; ?>/plugin/jquery/jquery.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/plugin/bootstrap/js/bootstrap.min.js" defer></script> <!-- Keep the version from the first snippet if it's compatible -->
    <script src="<?= $HOME_PATH; ?>/plugin/easing/easing.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/plugin/popper/popper.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/plugin/modernizr/modernizr.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/plugin/owl-carousel/js/owl-carousel.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/plugin/typeit/typeit.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/plugin/isotope/isotope.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/plugin/particles/particles.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/plugin/magnific/js/magnific-popup.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/plugin/bootstrap/js/bootstrap.mateus.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/js/cookies.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/_functions.js" defer></script>
    <script src="<?= $HOME_PATH; ?>/_spa.js" defer></script>
</head>

<body>
    <!-- byuwur/easy-spa-php | Copyright (c) 2023 Andrés Trujillo [Mateus] byUwUr -->
    <div id="spa-loader">
        <div class="load-circle-back"></div>
        <div class="load-circle-fore"></div>
        <div class="load-text"><?= $_load; ?></div>
    </div>
    <div id="particles"></div>
    <div class="side-video" style="animation: float 5s infinite;"></div>
    <div id="spa-page-content-container"></div>
</body>

</html>
<?php
// Always call due to /_var.php invoking ob_start();
ob_end_flush();
?>