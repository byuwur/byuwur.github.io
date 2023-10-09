<?php
require_once "./connect.php";
?>
<!DOCTYPE HTML>
<?php
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es' || $_GET['lang'] == 'en') {
        require_once "./lang/lang_" . $_GET['lang'] . ".php";
        setcookie('lang', $_GET['lang'], time() + 31536000, '/', '', false, false);
        echo "<html lang='" . $_GET['lang'] . "'>";
        $lang = $_GET['lang'];
    } else {
        setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
        //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
    }
} else if (isset($_COOKIE['lang'])) {
    if ($_COOKIE['lang'] == 'es' || $_COOKIE['lang'] == 'en') {
        require_once "./lang/lang_" . $_COOKIE['lang'] . ".php";
        echo "<html lang='" . $_COOKIE['lang'] . "'>";
        $lang = $_COOKIE['lang'];
    } else {
        setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
        //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
    }
} else {
    setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
	require_once "./lang/lang_es.php";
    echo "<html lang='es'>";
    $lang = "es";
    //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
}
if (isset($_GET['title'])) {
    $title = $_GET['title'] . " - MNM.team();";
} else {
    $title = "MNM.team();";
}
?>

<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="mnm.team" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://byuwur.net/img/logo.jpg" />
    <meta property="og:url" content="https://byuwur.net/" />
    <meta property="og:site_name" content="mnm.team" />
    <meta property="og:description" content="¿Tienes un proyecto en mente? Un placer. Somos MNM, desarrolladores de software." />
    <!-- Meta tags -->
    <meta http-equiv="Content-Language" content="en,es" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="¿Tienes un proyecto en mente? Un placer. Somos MNM, desarrolladores de software." />
    <meta name="keywords" content="MNM.team, mnm.team, desarrolladora, software, paginas web, webpage, development, devs, apps, plataformas, MNM, Team" />
    <meta name="author" content="[Mateus] byUwUr" />
	<meta name="copyright" content="[Mateus] byUwUr" />
	<meta name="theme-color" content="#006" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png" />
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="../plugin/animate/animate.mnm.min.css" />
    <link rel="stylesheet" href="../plugin/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="../plugin/bootstrap/css/bootstrap.mnm.min.css" />
    <link rel="stylesheet" href="../plugin/flexslider/css/flexslider.min.css" />
    <?php
    if (isset($_GET['theme'])) {
        if ($_GET['theme'] == 'light' || $_GET['theme'] == 'dark') {
            setcookie('theme', $_GET['theme'], time() + 31536000, '/', '', false, false);
            echo '<meta name="theme-color" content="#111" />';
            echo '<link id="pagestyle" rel="stylesheet" href="../css/mnm.' . $_GET['theme'] . '.css" />';
            $theme = $_GET['theme'];
        } else {
            setcookie('theme', 'dark', time() + 31536000, '/', '', false, false);
            //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
        }
    } else if (isset($_COOKIE['theme'])) {
        if ($_COOKIE['theme'] == 'light' || $_COOKIE['theme'] == 'dark') {
            echo '<meta name="theme-color" content="#111" />';
            echo '<link id="pagestyle" rel="stylesheet" href="../css/mnm.' . $_COOKIE['theme'] . '.css" />';
            $theme = $_COOKIE['theme'];
        } else {
            setcookie('theme', 'dark', time() + 31536000, '/', '', false, false);
            //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
        }
    } else {
        setcookie('theme', 'dark', time() + 31536000, '/', '', false, false);
		echo '<link id="pagestyle" rel="stylesheet" href="../css/mnm.dark.css" />';
        //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
    }
    ?>
    <!-- Modernizr JS -->
    <script type="text/javascript" src="../plugin/modernizr/modernizr.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]><script type="text/javascript" src="../js/respond.min.js"></script><![endif]-->
    <!-- Swap theme -->
    <script type="text/javascript">
        function swapStyleSheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', '../css/mnm.' + sheet + '.css');
            document.cookie = 'theme=' + sheet + ';max-age=31536000;path=/;samesite;';
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=UA-148227598-1"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-148227598-1');
    </script>
    <!-- reCaptcha -->
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!-- === Loading === -->
    <div id="loading">
        <div class="load-circle-back"></div>
        <div class="load-circle-fore"></div>
        <div class="load-text"><?= $_load; ?></div>
    </div>
    <!-- === Particles === -->
    <div id="particles"></div>
    <div id="mnm-page">
        <a href="javascript:;" class="js-mnm-nav-toggle mnm-nav-toggle"><span>menu</span></a>
        <aside id="mnm-aside" role="complementary" class="border js-fullheight">
            <h1 id="mnm-logo">
                <img src="../img/logo.jpg" width="175px" height="175px" style="border: 5px solid #222; border-radius: 10px;" alt="MNM logo" /><br>
                <small><small style="margin-right:5px;"><?= $_language; ?></small><a href="es" title="Español"><img src="../img/co.png" width="16px" height="12px" style="margin-bottom:3px;" alt="" /> ES</a>|<a href="en" title="English"><img src="../img/uk.png" width="16px" height="12px" style="margin-bottom:3px;" alt="" /> EN</a><br><!-- <a href="soon.html" class="a-logo"><?= $_new; ?></a> --></small>
            </h1>
            <nav id="mnm-main-menu" role="navigation">
                <ul>
                    <li id="li_home"><a href="<?= $lang; ?>" onclick="active_home()"> <?= $_helloworld; ?> </a></li>
                    <li id="li_work"><a href="<?= $_project; ?>" onclick="active_work()"> <?= $_projects; ?> </a></li>
                    <li id="li_services"><a href="<?= $_service; ?>" onclick="active_services()"> <?= $_services; ?> </a></li>
                    <li id="li_about"><a href="<?= $_about; ?>" onclick="active_about()"> <?= $_aboutus; ?> </a></li>
                    <li id="li_contact"><a href="<?= $_contact; ?>" onclick="active_contact()"> <?= $_contactus; ?> </a></li>
                </ul>
            </nav>
            <div class="mnm-footer">
                <small><?php $_theme; ?> <a href="javascript:;" onclick="swapStyleSheet('light')"><?= $_light; ?></a> | <a href="javascript:;" onclick="swapStyleSheet('dark')"><?= $_dark; ?></a></small>
                <a class='hidden' href='<?= $_light; ?>'>Light / Claro</a><a class='hidden' href='<?= $_dark; ?>'>Dark / Oscuro</a><br>
                <p>&copy;<?= date("Y"); ?>, MNM <br><small><small><a href="../">byUwUr</a> | <a href="https://colorlib.com" target="_blank">colorlib</a>
                            <br><a href="sitemap"><?= $_sitemap; ?></a> | <a href="cookie-policy">cookies</a></small></small></p>
                <ul>
                    <li><a href="https://fb.me/mnmdotteam" target="_blank"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>
        </aside>