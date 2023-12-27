<?php
require_once "./_var.php";
require_once $TO_HOME . "common.php";
?>
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
<meta name="theme-color" content="#111" />
<link rel="shortcut icon" type="image/png" href="<?= $HOME_PATH; ?>favicon.png" />
<link rel="icon" type="image/png" href="<?= $HOME_PATH; ?>favicon.png" />
<link rel="apple-touch-icon" href="<?= $HOME_PATH; ?>favicon.png" />
<link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/bootstrap/css/bootstrap.mateus.min.css" />
<link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/owl-carousel/css/owl-carousel.min.css" />
<link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/magnific/css/magnific-popup.css" />
<link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/nav/css/nav.css" />
<link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/fontawesome/css/all.min.css" />
<link rel="stylesheet" href="<?= $HOME_PATH; ?>plugin/themify/themify-icons.min.css" />
<?php
if (isset($_theme)) echo '<link id="pagestyle" rel="stylesheet" href="' . $HOME_PATH . 'css/mateus.' . $_theme . '.css" />';
else echo '<link id="pagestyle" rel="stylesheet" href="' . $HOME_PATH . 'css/mateus.dark.css" />';
?>
<script src="<?= $HOME_PATH; ?>plugin/jquery/jquery.min.js" defer></script>
<script src="<?= $HOME_PATH; ?>_spa.js" defer></script>
<script src="<?= $HOME_PATH; ?>plugin/popper/popper.min.js" defer></script>
<script src="<?= $HOME_PATH; ?>plugin/modernizr/modernizr.min.js" defer></script>
<script src="<?= $HOME_PATH; ?>plugin/owl-carousel/js/owl-carousel.min.js" defer></script>
<script src="<?= $HOME_PATH; ?>plugin/typeit/typeit.min.js" defer></script>
<script src="<?= $HOME_PATH; ?>plugin/isotope/isotope.min.js" defer></script>
<script src="<?= $HOME_PATH; ?>plugin/particles/particles.min.js" defer></script>
<script src="<?= $HOME_PATH; ?>plugin/magnific/js/magnific-popup.min.js" defer></script>
<script src="<?= $HOME_PATH; ?>plugin/bootstrap/js/bootstrap.mateus.min.js" defer></script>
<script src="<?= $HOME_PATH; ?>plugin/nav/js/classie.js" defer></script>
<script src="<?= $HOME_PATH; ?>plugin/nav/js/nav.js" defer></script>
<script src="<?= $HOME_PATH; ?>js/cookies.js" defer></script>
<script src="<?= $HOME_PATH; ?>js/mateus.js" defer></script>
<script src="<?= $HOME_PATH; ?>_functions.js" defer></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148227598-1" defer></script>