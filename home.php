<!DOCTYPE html>
<?php
$routes = [
    //"/uri" => ["URI" => "file.php", "GET" => ["key" => "value"], "POST" => ["key" => "value"], "COMPONENT" => ["#id" => "file.php"]],
    "/" => ["URI" => "home.v2.php"],
    "/new" => ["URI" => "home.v2.php"],
    "/v2" => ["URI" => "home.v2.php"],
    "/es" => ["URI" => "home.v2.php", "GET" => ["lang" => "es"]],
    "/en" => ["URI" => "home.v2.php", "GET" => ["lang" => "en"]],
    "/dark" => ["URI" => "home.v2.php", "GET" => ["theme" => "dark", "lang" => "en"]],
    "/light" => ["URI" => "home.v2.php", "GET" => ["theme" => "light", "lang" => "en"]],
    "/oscuro" => ["URI" => "home.v2.php", "GET" => ["theme" => "dark", "lang" => "es"]],
    "/claro" => ["URI" => "home.v2.php", "GET" => ["theme" => "light", "lang" => "es"]],
    "/old" => ["URI" => "home.v1.php"],
    "/v1" => ["URI" => "home.v1.php"],
    "/v1.es" => ["URI" => "home.v1.php", "GET" => ["lang" => "es"]],
    "/v1.en" => ["URI" => "home.v1.php", "GET" => ["lang" => "en"]],
    "/resume" => ["FILE" => "resume.es.pdf"],
    "/resume.es" => ["FILE" => "resume.es.pdf"],
    "/resume.en" => ["FILE" => "resume.en.pdf"]
];
$setLocalStorage = true;
require_once "./_var.php";
require_once $TO_HOME . "_functions.php";
require_once $TO_HOME . "_router.php";
require_once $TO_HOME . "common.php";
?>

<head>
    <meta charset="utf-8" />
    <title><?= $_title; ?></title> <!-- Assuming you want to keep the version indicator in the title -->
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
    <link rel="shortcut icon" type="image/png" href="<?= $HOME_PATH; ?>favicon.png" />
    <link rel="icon" type="image/png" href="<?= $HOME_PATH; ?>favicon.png" />
    <link rel="apple-touch-icon" href="<?= $HOME_PATH; ?>favicon.png" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/bootstrap/css/bootstrap.resume.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/bootstrap/css/bootstrap.mateus.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/owl-carousel/css/owl-carousel.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/magnific/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/themify/themify-icons.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/common.css" />
    <?php
    if (isset($_theme)) echo '<link id="pagestyle" rel="stylesheet" href="' . $HOME_PATH . 'css/common.' . $_theme . '.css" />';
    else echo '<link id="pagestyle" rel="stylesheet" href="' . $HOME_PATH . 'css/common.dark.css" />';
    ?>
    <script src="<?= $HOME_PATH; ?>plugin/jquery/jquery.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>plugin/bootstrap/js/bootstrap.min.js" defer></script> <!-- Keep the version from the first snippet if it's compatible -->
    <script src="<?= $HOME_PATH; ?>plugin/easing/easing.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>plugin/popper/popper.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>plugin/modernizr/modernizr.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>plugin/owl-carousel/js/owl-carousel.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>plugin/typeit/typeit.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>plugin/isotope/isotope.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>plugin/particles/particles.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>plugin/magnific/js/magnific-popup.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>plugin/bootstrap/js/bootstrap.mateus.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>js/cookies.js" defer></script>
    <script src="<?= $HOME_PATH; ?>_functions.js" defer></script>
    <script src="<?= $HOME_PATH; ?>_spa.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148227598-1" defer></script>
</head>

<body>
    <div id="spa-loader" class="loading">
        <div class="load-circle-back"></div>
        <div class="load-circle-fore"></div>
        <div class="load-text"><?= $_load; ?></div>
    </div>
    <div id="particles"></div>
    <div class="side-video" style="animation: float 5s infinite;"></div>
    <div id="spa-page-content-container"></div>
</body>

</html>