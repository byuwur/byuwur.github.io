<!DOCTYPE html>
<?php
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es' || $_GET['lang'] == 'en') {
        require("lang/lang_" . $_GET['lang'] . ".php");
        setcookie('lang', $_GET['lang'], time() + 31536000, '/', '', false, false);
        echo "<html lang='" . $_GET['lang'] . "'>";
        $lang = $_GET['lang'];
    } else {
        setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
        //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
    }
} else if (isset($_COOKIE['lang'])) {
    if ($_COOKIE['lang'] == 'es' || $_COOKIE['lang'] == 'en') {
        require("lang/lang_" . $_COOKIE['lang'] . ".php");
        echo "<html lang='" . $_COOKIE['lang'] . "'>";
        $lang = $_COOKIE['lang'];
    } else {
        setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
        //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
    }
} else {
    require("lang/lang_es.php");
    echo "<html lang='es'>";
    $lang = "es";
    setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
    //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
}
?>

<head>
    <meta charset="utf-8" />
    <title><?= $_title; ?> v1</title>
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="Mateus [byUwUr]" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://somosmnm.000webhostapp.com/img/icon.png" />
    <meta property="og:url" content="https://byuwur.github.io/" />
    <meta property="og:site_name" content="Mateus [byUwUr]" />
    <meta property="og:description" content="Mateus' portfolio" />
    <!-- Meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en,es" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Mateus' portfolio" />
    <meta name="author" content="Andrés Trujillo Mateus" />
    <meta name="keywords" content="Mateus, byUwUr, byuwur, MNM, Team, MNM Team" />
    <meta name="copyright" content="Mateus [byUwUr]" />
    <meta name="theme-color" content="#222" />
    <link rel="shortcut icon" type="image/png" href="./favicon.png" />
    <link rel="icon" type="image/png" href="./favicon.png" />
    <link rel="apple-touch-icon" href="./favicon.png" />
    <!-- STYLES -->
    <link href="./plugin/bootstrap/css/bootstrap.resume.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" />
    <link href="./plugin/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="./css/resume.css" rel="stylesheet" />
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async src="https://www.googletagmanager.com/gtag/js?id=UA-148227598-1"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag() {dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-148227598-1');
    </script>
</head>

<body id="page-top">
    <!-- navigation menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#about">
            <span class="d-block d-lg-none" style="color: #FFF;">
                <img src="./img/icon.png" height="36px" width="36px" style="margin-bottom: 4px;" alt="Logo" />
                <?= $_name_topbar; ?>
            </span>
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="./img/profile.jpg" alt="Mateus" />
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">≡</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <small style="margin: 15px 0px;"><a href="es.v1" class="a-logo" title="Español"><img src="./img/co.png" alt="" /> ES</a><a href="en.v1" class="a-logo" title="English"><img src="./img/uk.png" alt="" /> EN</a></small>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about"><?= $_helloworld; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills"><?= $_skills; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards"><?= $_portfolio; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience"><?= $_experience; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education"><?= $_education; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"><?= $_contact; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests"><?= $_interest; ?></a></li>
                <a href="./" class="a-logo"><?= $_new; ?></a>
            </ul>
        </div>
    </nav>
    <!-- portfolio start -->
    <div class="container-fluid">
        <!-- about section -->
        <section class="resume-section p-2 d-flex d-column" id="about">
            <div class="my-auto">
                <h1 class="mb-0 align-bottom"><?= $_name_top; ?></h1><font class="align-bottom" style="text-transform: uppercase;"><?= $_nombre; ?></font>
                <hr>
                <p class="lead"><?= $_about; ?></p>
                <div class="subheading">
                    | <a href="<?= $_linkedin; ?>"><?= $_linkedin; ?></a> | <small><a class="a-logo" href="resume.es" target="_blank">Resume en español</a> | <a class="a-logo" href="resume.en" target="_blank">Resume in english</a></small> |
                </div>
                <br>
                <div class="social-icons">
                    <a href="<?= $_linkedin; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="<?= $_youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="<?= $_github; ?>" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="<?= $_facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?= $_instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="<?= $_twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-5 col-md-4">
                        <br><h6>Digital Business Card v2</h6>
                        <iframe src="./card.v2.html" title="Digital Business Card v2" width="100%" height="135px" frameborder="0"></iframe>
                    </div> <!-- col -->
                    <div class="col-12 col-sm-7 col-md-4">
                        <br><h6>Digital Business Card v1</h6>
                        <iframe src="./card.v1.html" title="Digital Business Card v1" width="100%" height="110px" frameborder="0"></iframe>
                    </div> <!-- col -->
                </div>
                <br><a href="#contact" class="a-logo nav-link js-scroll-trigger" style="font-size: 1.375em;"><?= $_start; ?></a>
            </div>
        </section>
        <hr>
        <!-- skills section -->
        <section class="resume-section p-2 d-flex flex-column" id="skills">
            <div class="my-auto">
                <h2 class="mb-5"><?= $_skills; ?></h2>
                <div class="subheading mb-3"><?= $_languages; ?></div>
                <ul class="list-inline dev-icons">
                <?php for ($i=0; $i < count($_codeskillicon); $i++) { ?>
                    <li class="list-inline-item"><i class="<?= $_codeskillicon[$i]; ?>"></i></li>
                <?php } ?>
                </ul>
                <div class="subheading mb-2">SOFTWARE:</div>
                <ul class="row fa-ul mb-3">
                <?php for ($i=0; $i < count($_otherskilltext); $i++) { ?>
                    <li class="col-12 col-sm-6"><i class="fa-li <?= $_otherskillicon[$i]; ?>"></i><?= $_otherskilltext[$i]." - ".$_otherskilllevel[$i]; ?></li>
                <?php } ?>
                </ul>
                <div class="subheading mb-2"><?= $_things; ?></div>
                <ul class="row fa-ul mb-0">
                <?php for ($i=0; $i < count($_thingies); $i++) { ?>
                    <li class="col-12 col-sm-6"><i class="fa-li fa fa-check"></i><?= $_thingies[$i]; ?></li>
                <?php } ?>
                </ul>
            </div>
            <?= $_goto; ?>
        </section>
        <hr>
        <!-- awards section -->
        <section class="resume-section p-2 d-flex flex-column" id="awards">
            <div class="my-auto">
                <h2 class="mb-5"><?= $_portfolio; ?></h2>
                <ul class="fa-ul mb-0">
                <?php for ($i=0; $i < count($_portafolio); $i++) { ?>
                    <li><i class="fa-li fa fa-trophy text-warning"></i><?= $_portafolio[$i]; ?></li>
                <?php } ?>
                </ul>
            </div>
            <?= $_goto; ?>
        </section>
        <hr>
        <!-- experience section -->
        <section class="resume-section p-2 d-flex flex-column" id="experience">
            <div class="my-auto">
                <h2 class="mb-5"><?= $_experience; ?></h2>
                <?php for ($i=0; $i < count($_experiencepos); $i++) { ?>
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto"><h3 class="mb-0"><?= $_experiencepos[$i]; ?></h3><div class="subheading"><?= $_experienceent[$i]; ?></div><div><?= $_experiencedesc[$i]; ?></div></div>
                    <div class="resume-date text-md-right"><span class="text-primary"><?= $_experiencetime[$i]; ?></span></div>
                </div>
                <?php } ?>
            </div>
            <?= $_goto; ?>
        </section>
        <hr>
        <!-- education section -->
        <section class="resume-section p-2 d-flex flex-column" id="education">
            <div class="my-auto">
                <h2 class="mb-5"><?= $_education; ?></h2>
                <?php for ($i=0; $i < count($_educationprog); $i++) { ?>
                    <div class="resume-item d-flex flex-column flex-md-row mb-3">
                        <div class="resume-content mr-auto"><h3 class="mb-0"><?= $_educationprog[$i]; ?></h3><div class="subheading"><?= $_educationinst[$i]; ?></div><p><?= $_educationprof[$i]; ?></p></div>
                        <div class="resume-date text-md-right"><span class="text-primary"><?= $_educationyear[$i]; ?></span></div>
                    </div>
                <?php } ?>
            </div>
            <?= $_goto; ?>
        </section>
        <hr>
        <!-- contact section -->
        <section class="resume-section p-2 d-flex flex-column" id="contact">
            <div class="my-auto">
                <div class="container-fluid">
                    <div class="row"><h2 class="colorlib-heading"><?= $_chead; ?></h2></div><br>
                    <div class="row">
                        <div class="col-md-5 col-md-pull-6 my-auto" style="margin-bottom: 2em;">
                            <hr>
                            <div>
                                <i class="fab fa-linkedin" style="font-size: 1.5em; margin-right: 15px;"></i>
                                <a style="font-size: 1.125em;" href="<?= $_linkedin; ?>">atrujillomateus</a>
                                <br><br>
                                <i class="fas fa-envelope" style="font-size: 1.5em; margin-right: 15px;"></i>
                                <a style="font-size: 1.125em;" href="mailto:<?= $_mail; ?>"><?= $_mail; ?></a>
                            </div>
                            <hr>
                            <div><?= $_goto; ?></div>
                            <hr>
                            <!--div class="col-md-12 col-md-pull-12 my-auto">
                                <a href="https://fc.lc/ref/byuwur" target="_blank"><img alt="Promo fc.lc" src="img/fc_<?= $lang; ?>.jpg" style="border-style:outset; border-radius:10px; margin-bottom:5px; max-height:66px; max-width:99%;" /></a><br>
                                <a href="https://ouo.io/ref/X00662tQ" target="_blank"><img alt="Promo ouo.io" src="img/ouo_<?= $lang; ?>.jpg" style="border-style:outset; border-radius:10px; margin-bottom:5px; max-height:66px; max-width:99%;" /></a><br>
                                <a href="https://join-adf.ly/21902363" target="_blank"><img alt="Promo adf.ly" src="img/adf_<?= $lang; ?>.jpg" style="border-style:outset; border-radius:10px; margin-bottom:5px; max-height:66px; max-width:99%;" /></a>
                            </div>
                            <hr-->
                        </div>
                        <div class="col-md-7 col-md-push-6 my-auto">
                            <div class="col-md-12">
                                <form method="POST">
                                    <div class="form-group col-md-pull-12"><input type="text" name="s_name" class="form-control" placeholder="<?= $_name; ?>" required></div>
                                    <div class="form-group col-md-pull-12"><input type="email" name="s_email" class="form-control" placeholder="<?= $_email; ?>" required></div>
                                    <div class="form-group col-md-pull-12"><input type="tel" name="s_phone" class="form-control" placeholder="<?= $_tphone; ?>"></div>
                                    <div class="form-group col-md-pull-12"><input type="text" name="s_subject" class="form-control" placeholder="<?= $_subject; ?>" required></div>
                                    <div class="form-group col-md-pull-12"><textarea name="s_message" rows="3" class="form-control" placeholder="<?= $_msg; ?>" required></textarea></div>
                                    <div class="g-recaptcha" data-sitekey="6LcgdbwUAAAAAMjsRwvIR08sluNH9GBfzEHQ5JTe"></div><br>
                                    <div class="form-group col-md-pull-12"><input type="submit" name="s_enviar" class="a-logo" value="<?= $_send; ?>"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- interests section -->
        <section class="resume-section p-2 d-flex flex-column" id="interests">
            <div class="my-auto">
                <h2 class="mb-5"><?= $_interest; ?></h2>
                <p><?= $_interesting; ?></p>
            </div>
            <?= $_goto; ?>
        </section>
        <!-- portfolio end -->
    </div>
    <!-- SCRIPTS -->
    <script type="text/javascript" src="./plugin/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="./plugin/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./plugin/easing/easing.min.js"></script>
    <script type="text/javascript" src="./js/resume.js"></script>
    <!-- Cookie consent -->
    <script type="text/javascript" src="./js/cookies.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            cookieconsent.run({
                "notice_banner_type": "simple",
                "consent_type": "express",
                "palette": "dark",
                "language": <?= '"' . $lang . '"'; ?>,
                "website_name": "mnm.team",
                "change_preferences_selector": "#cookiePrefs"
            });
        });
    </script>
    <!-- End cookie consent -->
</body>
<?php
if (isset($_POST['s_enviar'])) {
    $captcha = $_POST['g-recaptcha-response'];

    if (!$captcha) {
        echo '<script type="text/javascript" type="text/javascript">alert("reCaptcha inválido. / Invalid reCaptcha.");</script>';
    } else {
        $secret = "6LcgdbwUAAAAAGCql62It59UFlNifLK0I7SElrVJ";
        $rescaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
        $arrcaptcha = json_decode($rescaptcha, true);

        if ($arrcaptcha['success']) {
            $s_name = $_POST['s_name'];
            $s_email = $_POST['s_email'];
            $s_phone = $_POST['s_phone'];
            $s_subject = $_POST['s_subject'];
            $s_message = $_POST['s_message'];

            $mail = $_mail;
            $mail_asunto = $s_subject . " | Mateus, " . $s_name . $_s_wants;
            $mail_header = "From: info@mnm.team\r\n"
                . "MIME-Version: 1.0\r\n"
                . "Content-type: text/html; charset=iso-8859-1\r\n";
            $mail_msg = ' <html> <head> <title> Contactar a Mateus </title> </head> <body>
		<p>Hola, Mateus:<br><br>Soy <strong>' . $s_name . '</strong>.</p>
		<p>Pueden contactarme en: <strong>' . $s_email . '</strong> o llamarme al: <strong>' . $s_phone . '</strong>.</p>
		Necesito decirles:<br>
		' . $s_message . '
		<br><br><br>Gracias.<br><br>Atentamente, ' . $s_name . '.
	    </body> </html> ';

            $sendmail = @mail($mail, $mail_asunto, $mail_msg, $mail_header);

            if ($sendmail) {
                echo '<script type="text/javascript" type="text/javascript">alert("' . $_s_thanks . '");</script>';
            } else {
                echo '<script type="text/javascript" type="text/javascript">alert("' . $_s_wrong . '");</script>';
            }
        } else {
            echo '<script type="text/javascript" type="text/javascript">alert("reCaptcha inválido. Lamentamos las molestias. / Invalid reCaptcha. Sorry for the bother.");</script>';
        }
    }
}
?>
</html>