<!DOCTYPE html>
<?php
if (isset($_GET['lang'])) {
  if ($_GET['lang'] == 'es' || $_GET['lang'] == 'en') {
    require_once "lang/lang_" . $_GET['lang'] . ".php";
    setcookie('lang', $_GET['lang'], time() + 31536000, '/', '', false, false);
    echo "<html lang='" . $_GET['lang'] . "'>";
    $lang = $_GET['lang'];
  } else {
    setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
    //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
  }
} else if (isset($_COOKIE['lang'])) {
  if ($_COOKIE['lang'] == 'es' || $_COOKIE['lang'] == 'en') {
    require_once "lang/lang_" . $_COOKIE['lang'] . ".php";
    echo "<html lang='" . $_COOKIE['lang'] . "'>";
    $lang = $_COOKIE['lang'];
  } else {
    setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
    //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
  }
} else {
  require_once "lang/lang_es.php";
  echo "<html lang='es'>";
  $lang = "es";
  setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
  //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
}
?>

<head>
  <meta charset="utf-8" />
  <title>Nestux Portela</title>
  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="Nestux Portela" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://byuwur.net/nestux/img/icon.png" />
  <meta property="og:url" content="https://byuwur.net/nestux/" />
  <meta property="og:site_name" content="Nestux Portela" />
  <meta property="og:description" content="Soy Nestux y este es mi portfolio." />
  <!-- Meta tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Soy Nestux y este es mi portfolio." />
  <meta name="author" content="Nestux Alfonso Portela" />
  <meta name="keywords" content="Nestux, MNM, Team, MNM Team" />
  <meta name="copyright" content="MNM" />
  <meta name="theme-color" content="#222">
  <link rel="shortcut icon" type="image/png" href="img/icon.png" />
  <link rel="icon" type="image/png" href="img/icon.png" />
  <!-- Bootstrap core CSS -->
  <link href="../plugin/bootstrap/css/bootstrap.resume.min.css" rel="stylesheet" />
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" />
  <link href="../plugin/fontawesome/css/all.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/resume.css" rel="stylesheet" />
  <script type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
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
</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#about">
      <span class="d-block d-lg-none" style="color: #FFF;">
        <img src="img/icon.png" height="36px" width="36px" style="margin-bottom: 4px;" alt="Logo" />
        <?= $_name_topbar; ?>
      </span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="Nestux" />
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">≡</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <small style="margin: 15px 0px;"><a href="es" class="a-logo" title="Español"><img src="../img/co.png" alt="" /> ESP</a>
          <a href="en" class="a-logo" title="English"><img src="../img/uk.png" alt="" /> ENG</a></small>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about"><?= $_helloworld; ?></a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills"><?= $_skills; ?></a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education"><?= $_education; ?></a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards"><?= $_awards; ?></a></li>
        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests"><?= $_interest; ?></a></li> -->
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience"><?= $_experience; ?></a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"><?= $_contact; ?></a></li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
      <div class="my-auto">
        <h1 class="mb-0"><?= $_name_top; ?></h1>
        <font style="text-transform: uppercase;"><?= $_nombre; ?></font>
        <hr>
        <p class="lead mb-5"><?= $_about; ?></p>
        <div class="subheading" style="margin-bottom:15px;">
          <a href="mailto:<?= $_mail; ?>"><?= $_mail; ?></a> | <a href="tel:<?= $_phone; ?>"><?= $_phone; ?></a>
        </div>
        <a href="#contact" class="a-logo nav-link js-scroll-trigger" style="font-size: 1.375em;"><?= $_start; ?></a>
        <br>
        <div class="social-icons">
          <a href="<?= $_facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="<?= $_twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="<?= $_telegram; ?>" target="_blank"><i class="fab fa-telegram-plane"></i></a>
          <a href="<?= $_whatsapp; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
          <a href="<?= $_instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="<?= $_youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="<?= $_github; ?>" target="_blank"><i class="fab fa-github"></i></a>
        </div>
      </div>
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
      <div class="my-auto">
        <h2 class="mb-5"><?= $_skills; ?></h2>

        <div class="subheading mb-3"><?= $_languages; ?></div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item"><i class="fab fa-aws"></i></li>
          <li class="list-inline-item"><i class="fab fa-linux"></i></li>
          <li class="list-inline-item"><i class="fas fa-server"></i></li>
          <li class="list-inline-item"><i class="fab fa-html5"></i></li>
          <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
          <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
          <li class="list-inline-item"><i class="fab fa-php"></i></li>
          <li class="list-inline-item"><i class="fas fa-database"></i></li>
          <li class="list-inline-item"><i class="fab fa-github"></i></li>
          <li class="list-inline-item"><i class="fab fa-joomla"></i></li>
          <li class="list-inline-item"><i class="fab fa-wordpress-simple"></i></li>
        </ul>

        <div class="subheading mb-3"><?= $_thingies; ?></div>
        <ul class="fa-ul mb-0">
          <li><i class="fa-li fa fa-check"></i><?= $_thingies0; ?></li>
          <li><i class="fa-li fa fa-check"></i><?= $_thingies1; ?></li>
          <li><i class="fa-li fa fa-check"></i><?= $_thingies2; ?></li>
          <li><i class="fa-li fa fa-check"></i><?= $_thingies3; ?></li>
          <!-- <li><i class="fa-li fa fa-check"></i><?= $_thingies4; ?></li> -->
          <!-- <li><i class="fa-li fa fa-check"></i><?= $_thingies5; ?></li> -->
        </ul>
      </div>
      <?= $_goto; ?>
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
      <div class="my-auto">
        <h2 class="mb-5"><?= $_education; ?></h2>

        <div class="resume-item d-flex flex-column flex-md-row mb-3">
          <div class="resume-content mr-auto">
            <h3 class="mb-0"><?= $_educationinst2; ?></h3>
            <div class="subheading"><?= $_educationcarr2; ?></div>
            <div><?= $_educationprog2; ?></div>
            <!-- <p>GPA: 4.3<font size="2">/5.0</font></p> -->
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?= $_educationyear2; ?></span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row mb-3">
          <div class="resume-content mr-auto">
            <h3 class="mb-0"><?= $_educationinst1; ?></h3>
            <div class="subheading"><?= $_educationcarr1; ?></div>
            <div><?= $_educationprog1; ?></div>
            <!-- <p>GPA: 4.3<font size="2">/5.0</font></p> -->
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?= $_educationyear1; ?></span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row mb-3">
          <div class="resume-content mr-auto">
            <h3 class="mb-0"><?= $_educationinst0; ?></h3>
            <div class="subheading"><?= $_educationcarr0; ?></div>
            <?= $_educationprog0; ?>
            <p>GPA: 4.5<font size="2">/5.0</font>
            </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?= $_educationyear0; ?></span>
          </div>
        </div>

      </div>
      <?= $_goto; ?>
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
      <div class="my-auto">
        <h2 class="mb-5"><?= $_awards; ?></h2>
        <ul class="fa-ul mb-0">
          <!-- <li><i class="fa-li fa fa-trophy text-warning"></i><?= $_awards6; ?></li>
            <li><i class="fa-li fa fa-trophy text-warning"></i><?= $_awards5; ?></li>
            <li><i class="fa-li fa fa-trophy text-warning"></i><?= $_awards4; ?></li> -->
          <li><i class="fa-li fa fa-trophy text-warning"></i><?= $_awards3; ?></li>
          <li><i class="fa-li fa fa-trophy text-warning"></i><?= $_awards2; ?></li>
          <li><i class="fa-li fa fa-trophy text-warning"></i><?= $_awards1; ?></li>
          <li><i class="fa-li fa fa-trophy text-warning"></i><?= $_awards0; ?></li>
        </ul>
      </div>
      <?= $_goto; ?>
    </section>
    <!-- <hr> -->
    <!-- <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5"><?= $_interest; ?></h2>
          <p><?= $_interest0; ?></p>
        </div>
        <?= $_goto; ?>
      </section> -->
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
      <div class="my-auto">
        <h2 class="mb-5"><?= $_experience; ?></h2>

        <div class="resume-item d-flex flex-column flex-md-row mb-5">
          <div class="resume-content mr-auto">
            <h3 class="mb-0"><?= $_experiencepos0; ?></h3>
            <div class="subheading mb-3"><?= $_experienceent0; ?> | <small><a href="https://colamericanodegirardot.edu.co/home/" target="_blank">https://colamericanodegirardot.edu.co/home/</a></small></div>
            <p><?= $_experiencedesc0; ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?= $_experiencetime0; ?></span>
          </div>
        </div>

      </div>
      <?= $_goto; ?>
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="contact">
      <div class="my-auto">
        <div class="container-fluid">
          <div class="row">
            <h2 class="colorlib-heading"><?= $_chead; ?></h2>
          </div>
          <br>
          <div class="row">
            <div class="col-md-5 col-md-pull-6 my-auto" style="margin-bottom: 2em;">
              <hr>
              <div>
                <i class="fa fa-envelope" style="font-size: 1.5em; margin-right: 15px;"></i>
                <a style="font-size: 1.125em;" href="mailto:<?= $_mail; ?>"><?= $_mail; ?></a>
              </div>
              <hr>
              <div>
                <i class="fa fa-phone-alt" style="font-size: 1.5em; margin-right: 15px;"></i>
                <a style="font-size: 1.125em;" href="tel:<?= $_phone; ?>"><?= $_phone; ?></a>
              </div>
              <hr><?= $_goto; ?>
              <hr>
            </div>
            <div class="col-md-7 col-md-push-6 my-auto">
              <div class="col-md-12">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                  <div class="form-group">
                    <input type="text" name="s_name" class="form-control" placeholder="<?= $_name; ?>" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="s_email" class="form-control" placeholder="<?= $_email; ?>" required>
                  </div>
                  <div class="form-group">
                    <input type="tel" name="s_phone" class="form-control" placeholder="<?= $_phone; ?>">
                  </div>
                  <div class="form-group">
                    <input type="text" name="s_subject" class="form-control" placeholder="<?= $_subject; ?>" required>
                  </div>
                  <div class="form-group">
                    <textarea name="s_message" rows="3" class="form-control" placeholder="<?= $_msg; ?>" required></textarea>
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LcgdbwUAAAAAMjsRwvIR08sluNH9GBfzEHQ5JTe"></div><br>
                  <div class="form-group">
                    <input type="submit" name="s_enviar" class="a-logo" value="<?= $_send; ?>">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <?php
  if (isset($_POST['s_enviar'])) {
    $captcha = $_POST['g-recaptcha-response'];

    if (!$captcha) {
      echo '<script type="text/javascript">alert("reCaptcha inválido. / Invalid reCaptcha.");</script>';
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
        $mail_asunto = $s_subject . " | Nestux, " . $s_name . $_s_wants;
        $mail_header = "From: info@mnm.team\r\n"
          . "MIME-Version: 1.0\r\n"
          . "Content-type: text/html; charset=iso-8859-1\r\n";
        $mail_msg = ' <html> <head> <title> Contactar a Nestux </title> </head> <body>
		<p>Hola, Nestux:<br><br>Soy <strong>' . $s_name . '</strong>.</p>
		<p>Pueden contactarme en: <strong>' . $s_email . '</strong> o llamarme al: <strong>' . $s_phone . '</strong>.</p>
		Necesito decirles:<br>
		' . $s_message . '
		<br><br><br>Gracias.<br><br>Atentamente, ' . $s_name . '.
	    </body> </html> ';

        $sendmail = @mail($mail, $mail_asunto, $mail_msg, $mail_header);

        if ($sendmail) {
          echo '<script type="text/javascript">alert("' . $_s_thanks . '");</script>';
        } else {
          echo '<script type="text/javascript">alert("' . $_s_wrong . '");</script>';
        }
      } else {
        echo '<script type="text/javascript">alert("reCaptcha inválido. Lamentamos las molestias. / Invalid reCaptcha. Sorry for the bother.");</script>';
      }
    }
  }
  ?>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../plugin/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="../plugin/bootstrap/js/bootstrap.min.js"></script>
  <!-- Plugin JavaScript -->
  <script type="text/javascript" src="../plugin/easing/easing.min.js"></script>
  <!-- Custom scripts for this template -->
  <script type="text/javascript" src="../js/resume.js"></script>
  <!-- Cookie consent -->
  <script type="text/javascript" src="../js/cookies.js"></script>
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

</html>