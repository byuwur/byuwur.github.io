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
  <title><?= $_title; ?></title>
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
  <!-- Plugin CSS -->
  <link href="./plugin/bootstrap/css/bootstrap.mateus.min.css" rel="stylesheet">
  <link href="./plugin/owl-carousel/css/owl-carousel.min.css" rel="stylesheet">
  <link href="./plugin/magnific/css/magnific-popup.css" rel="stylesheet">
  <link href="./plugin/nav/css/nav.css" rel="stylesheet" />
  <link href="./plugin/fontawesome/css/all.min.css" rel="stylesheet">
  <link href="./plugin/themify/themify-icons.min.css" rel="stylesheet">
  <!-- Styles -->
  <?php
  if (isset($_GET['theme'])) {
    if ($_GET['theme'] == 'light' || $_GET['theme'] == 'dark') {
      setcookie('theme', $_GET['theme'], time() + 31536000, '/', '', false, false);
      echo '<meta name="theme-color" content="#111" />';
      echo '<link id="pagestyle" rel="stylesheet" href="./css/mateus.' . $_GET['theme'] . '.css" />';
      $theme = $_GET['theme'];
    } else {
      setcookie('theme', 'dark', time() + 31536000, '/', '', false, false);
      //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
    }
  } else if (isset($_COOKIE['theme'])) {
    if ($_COOKIE['theme'] == 'light' || $_COOKIE['theme'] == 'dark') {
      echo '<meta name="theme-color" content="#111" />';
      echo '<link id="pagestyle" rel="stylesheet" href="./css/mateus.' . $_COOKIE['theme'] . '.css" />';
      $theme = $_COOKIE['theme'];
    } else {
      setcookie('theme', 'dark', time() + 31536000, '/', '', false, false);
      //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
    }
  } else {
    setcookie('theme', 'dark', time() + 31536000, '/', '', false, false);
    echo '<link id="pagestyle" rel="stylesheet" href="./css/mateus.dark.css" />';
    $theme = "dark";
    //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
  }
  ?>
  <script type="text/javascript" src="./plugin/modernizr/modernizr.min.js"></script>
  <!-- Swap theme -->
  <script type="text/javascript">
    function swapStyleSheet(sheet) {
      document.getElementById('pagestyle').setAttribute('href', './css/mateus.' + sheet + '.css');
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
  <!-- ReCAPTCHA -->
  <script type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="dark-body">
  <!-- === Loading === -->
  <div id="loading">
    <div class="load-circle-back"></div>
    <div class="load-circle-fore"></div>
    <div class="load-text"><?= $_load; ?></div>
  </div>
  <!-- === Particles === -->
  <div id="particles"></div>
  <!-- === Side video === -->
  <video class="side-video" autoplay muted loop><source src="./img/side.mp4" type="video/mp4" /></video>
  <!-- === Navigation === -->
  <nav class="pages-nav">
    <div class="pages-nav__item"><a class="link link--page" href="#home"><?= $_helloworld; ?></a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#resume"><?= $_resume; ?></a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#portfolio"><?= $_portfolio; ?></a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#about"><?= $_aboutme; ?></a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#contact"><?= $_contact; ?></a></div>
  </nav>
  <!-- === Stack === -->
  <div class="pages-stack">
    <!-- === Home Banner === -->
    <div class="page home-banner" id="home">
      <div class="container-fluid p-0">
        <div class="row no-gutters full-screen">
          <div class="col-lg-3">
            <p class="footer"><?= $_footer; ?></p>
            <div class="d-flex align-items-end home-user-avatar v-center-box">
              <div class="avatar-image"></div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="page-scroll">
              <div class="page-content">
                <div class="v-center-box d-flex align-items-center">
                  <div class="home-text">
                    <h6 class="text-color theme-after"><?= $_helloworld; ?></h6>
                    <h1 class="text-color blue-after"><?= $_im; ?> Mateus Andrés</h1>
                    <p><?= $_andim; ?> <span id="type-it"></span></p>
                    <div class="social-icons">
                      <a href="<?= $_linkedin; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                      <a href="<?= $_youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                      <a href="<?= $_github; ?>" target="_blank"><i class="fab fa-github"></i></a>
                      <a href="<?= $_facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="<?= $_instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                      <a href="<?= $_twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="btn-bar">
                      <a href="resume.<?= $lang; ?>" class="btn btn-theme"><?= $_cv; ?></a>
                      <br><br><a href="ui-kit">UI kit preview</a>
                      <br><br><?= $_goto; ?>
                    </div>
                  </div>
                </div>
              </div>
              <p class="footer-resp"><?= $_footer; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- home -->
    <!-- === About === -->
    <div class="page about-section" id="about">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 page-title">
            <div class="v-center-box d-flex align-items-end">
              <h2><?= $_aboutmateus; ?> Mateus</h2>
            </div>
            <p class="footer"><?= $_footer; ?></p>
          </div>
          <div class="col-lg-9">
            <div class="page-scroll">
              <div class="page-content">
                <!-- = Page Title = -->
                <div class="section-title">
                  <h6 class="theme-after text-color"><?= $_whoiam; ?></h6>
                  <div class="st-title">
                    <h2 class="theme-after text-color"><?= $_aboutiam; ?></h2>
                  </div>
                </div>
                <!-- = About = -->
                <div class="row">
                  <div class="col-sm-3 user-photo">
                    <div class="row">
                      <div class="col-6 col-sm-12 user-image" style="background-image:url(./img/profile.jpg);">
                        <img src="./img/sample.jpg" title="" alt="">
                      </div>
                      <div class="col-6 col-sm-12 btn-bar">
                        <br><a href="resume.<?= $lang; ?>" target="_blank" class="btn btn-theme"><?= $_hire; ?></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-9 sm-m-30px-t">
                    <div class="about-text">
                      <h3 class="text-color"><?= $_iam; ?> Andrés Trujillo Mateus</h3>
                      <p class="m-0px"><?= $_about; ?></p>
                    </div> <!-- about-text -->
                    <div class="row m-30px-t">
                      <div class="col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon text-color theme-after ti-split-v-alt"></i>
                          <div class="feature-content">
                            <h5 class="text-color"><?= $_thingies6; ?></h5>
                          </div>
                        </div>
                      </div> <!-- col -->
                      <div class="col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon text-color theme-after ti-server"></i>
                          <div class="feature-content">
                            <h5 class="text-color"><?= $_thingies2; ?></h5>
                          </div>
                        </div>
                      </div> <!-- col -->
                      <div class="col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon text-color theme-after ti-help-alt"></i>
                          <div class="feature-content">
                            <h5 class="text-color"><?= $_thingies3; ?></h5>
                          </div>
                        </div>
                      </div> <!-- col -->
                      <div class="col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon text-color theme-after ti-mobile"></i>
                          <div class="feature-content">
                            <h5 class="text-color"><?= $_thingies1; ?></h5>
                          </div>
                        </div>
                      </div> <!-- col -->
                      <div class="col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon text-color theme-after ti-video-clapper"></i>
                          <div class="feature-content">
                            <h5 class="text-color"><?= $_thingies4; ?></h5>
                          </div>
                        </div>
                      </div> <!-- col -->
                      <div class="col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon text-color theme-after ti-github"></i>
                          <div class="feature-content">
                            <h5 class="text-color"><?= $_thingies0; ?></h5>
                          </div>
                        </div>
                      </div> <!-- col -->
                    </div> <!-- row -->
                  </div>
                </div> <!-- row -->
                <!-- = Counters = -->
                <div class="counter-row m-50px-t p-40px-t lg-m-35px-t lg-p-25px-t sm-p-15px-t">
                  <div class="row">
                    <div class="col-12 col-md-3 md-m-15px-tb">
                      <div class="counter-col counter-box">
                        <div class="counter-data" data-count="375">
                          <i class="theme-color ti-ruler-pencil"></i>
                          <div class="count text-color">5</div>
                          <a href="<?= $_github; ?>" target="_blank"><h6>Projects</h6></a>
                        </div>
                      </div>
                      <br><a href="ui-kit">&& UI kit preview</a>
                    </div> <!-- col -->
                    <div class="col-12 col-md-4 md-m-15px-tb">
                      <h6>Digital Business Card v2</h6>
                      <iframe src="./card.v2.html" title="Digital Business Card v2" width="100%" height="135px" frameborder="0"></iframe>
                    </div> <!-- col -->
                    <div class="col-12 col-md-5 md-m-15px-tb">
                      <h6>Digital Business Card v1</h6>
                      <iframe src="./card.v1.html" title="Digital Business Card v1" width="100%" height="110px" frameborder="0"></iframe>
                    </div> <!-- col -->
                  </div> <!-- row -->
                </div>
              </div> <!-- page-content -->
              <p class="footer-resp"><?= $_footer; ?></p>
            </div> <!-- page-scroll  -->
          </div>
        </div> <!-- row -->
      </div>
    </div> <!-- about -->
    <!-- === Resume === -->
    <div class="page resume-section" id="resume">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 page-title">
            <div class="v-center-box d-flex align-items-end">
              <h2><?= $_resume; ?></h2>
            </div>
            <p class="footer"><?= $_footer; ?></p>
          </div>
          <div class="col-lg-9">
            <div class="page-scroll">
              <div class="page-content">
                <!-- = Page Title = -->
                <div class="section-title">
                  <h6 class="theme-after text-color"><?= $_expertise; ?></h6>
                  <div class="st-title">
                    <h2 class="theme-after text-color"><?= $_resume; ?></h2>
                  </div>
                </div>
                <!-- = Resume = -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="skill-row">
                      <div class="sub-title m-30px-b">
                        <h2 class="text-color theme-after"><?= $_skills; ?></h2>
                      </div>
                      <div class="row">
                        <div class="col-6 p-30px-r sm-p-15px-r">
                          <h3 class="text-color"><?= $_codeskills; ?> <i class="fas fa-code"></i></h3>
                          <div class="skills">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="progress-lt">
                                  <h6><i class="fab fa-php"></i> PHP</h6>
                                  <span class="theme-bg">Advanced</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 88%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fab fa-github"></i> Git</h6>
                                  <span class="theme-bg">Intermediate</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 55%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fas fa-database"></i> SQL</h6>
                                  <span class="theme-bg">Advanced</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 75%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fab fa-java"></i> <i class="fab fa-android"></i> JAVA</h6>
                                  <span class="theme-bg">Intermediate</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 66%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fab fa-python"></i> PYTHON</h6>
                                  <span class="theme-bg">Basic</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 33%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                              </div>
                              <div class="col-sm-6 sm-m-15px-t">
                                <div class="progress-lt">
                                  <h6><i class="fab fa-html5"></i> HTML5</h6>
                                  <span class="theme-bg">Intermediate</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 66%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fab fa-css3"></i> CSS3</h6>
                                  <span class="theme-bg">Intermediate</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 66%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fab fa-js"></i> Javascript</h6>
                                  <span class="theme-bg">Intermediate</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 66%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 p-30px-r sm-p-15px-r">
                          <h3 class="text-color"><?= $_otherskills; ?> <i class="fas fa-file-export"></i></h3>
                          <div class="skills">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="progress-lt">
                                  <h6><i class="fab fa-youtube"></i> Vegas Pro</h6>
                                  <span class="theme-bg">Advanced</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 99%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fab fa-youtube"></i> Davinci Resolve</h6>
                                  <span class="theme-bg">Advanced</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 75%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fab fa-adobe"></i> Premiere Pro</h6>
                                  <span class="theme-bg">Advanced</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 75%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fab fa-adobe"></i> Photoshop</h6>
                                  <span class="theme-bg">Intermediate</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 66%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fab fa-adobe"></i> Lightroom</h6>
                                  <span class="theme-bg">Intermediate</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 50%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                              </div>
                              <div class="col-sm-6 sm-m-15px-t">
                                <div class="progress-lt">
                                  <h6><i class="fab fa-adobe"></i> After FX</h6>
                                  <span class="theme-bg">Basic</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 33%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fab fa-adobe"></i> Illustrator</h6>
                                  <span class="theme-bg">Basic</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 33%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fas fa-cube"></i> Blender</h6>
                                  <span class="theme-bg">Basic</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 33%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                                <div class="progress-lt">
                                  <h6><i class="fas fa-cubes"></i> Unity</h6>
                                  <span class="theme-bg">Basic</span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 33%;">
                                    </div><!-- /progress-bar -->
                                  </div><!-- /progress -->
                                </div><!-- /progress-lt -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> <!-- col -->
                  <div class="col-md-6">
                    <div class="resume-row">
                      <h2 class="theme-after text-color"><?= $_experience; ?></h2>
                      <ul>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg ti-briefcase"></i>
                            <span class="text-color"><?= $_experiencepos2; ?> | <small><?= $_experienceent2; ?></small></span>
                            <label><?= $_experiencetime2; ?></label>
                          </div>
                          <div class="r-info">
                            <p><?= $_experiencedesc2; ?></p>
                          </div>
                        </li>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg ti-briefcase"></i>
                            <span class="text-color"><?= $_experiencepos1; ?> | <small><?= $_experienceent1; ?></small></span>
                            <label><?= $_experiencetime1; ?></label>
                          </div>
                          <div class="r-info">
                            <p><?= $_experiencedesc1; ?></p>
                          </div>
                        </li>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg ti-briefcase"></i>
                            <span class="text-color"><?= $_experiencepos0; ?> | <small><?= $_experienceent0; ?></small></span>
                            <label><?= $_experiencetime0; ?></label>
                          </div>
                          <div class="r-info">
                            <p><?= $_experiencedesc0; ?></p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div> <!-- col -->
                  <div class="col-md-6">
                    <div class="resume-row">
                      <h2 class="theme-after text-color"><?= $_education; ?></h2>
                      <ul>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg fas fa-graduation-cap"></i>
                            <span class="text-color"><?= $_educationcarr0; ?><br><?= $_educationinst0; ?></span>
                          </div>
                          <div class="r-info">
                            <?= $_educationyear0; ?> - <small><?= $_educationprog0; ?></small>
                            <p>GPA: 4.0<small>/5.0</small></p>
                          </div>
                        </li>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg fas fa-graduation-cap"></i>
                            <span class="text-color"><?= $_educationcarr2; ?><br><?= $_educationinst2; ?></span>
                          </div>
                          <div class="r-info">
                            <?= $_educationyear2; ?> - <small><?= $_educationprog2; ?></small>
                            <p><a href='https://www.crehana.com/users/atrujillomateus/' target='_blank'>crehana.com/users/atrujillomateus/</a></p>
                          </div>
                        </li>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg fas fa-graduation-cap"></i>
                            <span class="text-color"><?= $_educationcarr1; ?><br><?= $_educationinst1; ?></span>
                          </div>
                          <div class="r-info">
                            <?= $_educationyear1; ?> - <small><?= $_educationprog1; ?></small>
                            <p><a href='https://profile.edx.org/u/atrujillomateus' target='_blank'>profile.edx.org/u/atrujillomateus</a></p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div> <!-- col -->
                </div> <!-- row -->
              </div> <!-- page-content -->
              <p class="footer-resp"><?= $_footer; ?></p>
            </div> <!-- page-scroll  -->
          </div>
        </div> <!-- row -->
      </div>
    </div> <!-- resume -->
    <!-- === Portfolio === -->
    <div class="page" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 page-title">
            <div class="v-center-box d-flex align-items-end">
              <h2><?= $_portfolio; ?></h2>
            </div>
            <p class="footer"><?= $_footer; ?></p>
          </div>
          <div class="col-lg-9">
            <div class="page-scroll">
              <div class="page-content">
                <!-- = Page Title = -->
                <div class="section-title">
                  <h6 class="theme-after text-color"><?= $_mywork; ?></h6>
                  <div class="st-title">
                    <h2 class="theme-after text-color"><?= $_myproj; ?></h2>
                  </div>
                </div>
                <!-- = Portfolio = -->
                <div class="portfolio-section">
                  <div class="portfolio-filter m-10px-b">
                    <ul class="filter text-left text-md-center">
                      <li class="active theme-after" data-filter="*"><?= $_all; ?></li>
                      <li class="theme-after" data-filter=".android">Android</li>
                      <li class="theme-after" data-filter=".web">Web</li>
                      <li class="theme-after" data-filter=".windows">Windows</li>
                      <!--li class="theme-after" data-filter=".av">AV</li-->
                      <li class="theme-after" data-filter=".expo">Expo</li>
                      <li class="theme-after" data-filter=".mention">Mention</li>
                    </ul>
                  </div> <!-- Portfolio Filter -->
                  <div class="portfolio-content">
                    <ul class="portfolio-cols portfolio-cols-3">
                      <li class="portfolio-item web android">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <div class="portfolio-image" style="background-image:url(./img/work-1.png);"></div>
                            <div class="hover">
                              <div class="action-btn">
                                <a href="https://play.google.com/store/apps/details?id=com.mateus.sda" target="_blank"><i class="fab fa-google-play"></i></a>
                                <a href="https://semillasdealegriaespinal.com/" target="_blank" class="theme-color"><i class="fa fa-link"></i></a>
                              </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>
                          <div class="portfolio-info">
                            <h5><?= $_sda; ?></h5>
                            <p><?= $_sda_desc; ?></p>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      <li class="portfolio-item windows av">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <div class="portfolio-image" style="background-image:url(./img/work-4.jpg);"></div>
                            <div class="hover">
                              <div class="action-btn">
                                <a href="https://youtu.be/RNQTSueIa-8" target="_blank"><i class="fa fa-play"></i></a>
                                <a href="./limontech" target="_blank" class="theme-color"><i class="fa fa-external-link-alt"></i></a>
                                <a class="lightbox-gallery theme-color" href="./img/work-4-lg.jpg" title="<?= $_lt; ?>"><i class="fas fa-expand"></i></a>
                              </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>
                          <div class="portfolio-info">
                            <h5><?= $_lt; ?></h5>
                            <p><?= $_lt_desc; ?></p>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      <li class="portfolio-item web android mention">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <div class="portfolio-image" style="background-image:url(./img/work-5.jpg);"></div>
                            <div class="hover">
                              <div class="action-btn">
                                <a href="https://play.google.com/store/apps/details?id=com.byuwur.reserv" target="_blank"><i class="fab fa-google-play"></i></a>
                                <a href="https://www.sistemas-i-computacion-tic.com/reserv/" target="_blank" class="theme-color"><i class="fa fa-link"></i></a>
                                <a href="./reservelapp" target="_blank" class="theme-color"><i class="fa fa-external-link-alt"></i></a>
                                <a class="lightbox-gallery theme-color" href="./img/work-5-lg.jpg" title="<?= $_reserv; ?>"><i class="fas fa-expand"></i></a>
                              </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>
                          <div class="portfolio-info">
                            <h5><?= $_reserv; ?></h5>
                            <p><?= $_reserv_desc; ?></p>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      <li class="portfolio-item web mention">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <div class="portfolio-image" style="background-image:url(./img/work-2.jpg);"></div>
                            <div class="hover">
                              <div class="action-btn">
                                <a href="./redi" target="_blank" class="theme-color"><i class="fa fa-external-link-alt"></i></a>
                                <a class="lightbox-gallery theme-color" href="./img/work-2-lg.jpg" title="<?= $_redi; ?>"><i class="fas fa-expand"></i></a>
                              </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>
                          <div class="portfolio-info">
                            <h5><?= $_redi; ?></h5>
                            <p><?= $_redi_desc; ?></p>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      <li class="portfolio-item web mention">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <div class="portfolio-image" style="background-image:url(./img/work-3.jpg);"></div>
                            <div class="hover">
                              <div class="action-btn">
                                <a href="./renn" target="_blank" class="theme-color"><i class="fa fa-external-link-alt"></i></a>
                                <a class="lightbox-gallery theme-color" href="./img/work-3-lg.jpg" title="<?= $_renn; ?>"><i class="fas fa-expand"></i></a>
                              </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>
                          <div class="portfolio-info">
                            <h5><?= $_renn; ?></h5>
                            <p><?= $_renn_desc; ?></p>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      <li class="portfolio-item mention expo">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <div class="portfolio-image" style="background-image:url(./img/work-6.jpg);"></div>
                          </div>
                          <div class="portfolio-info">
                            <h5><?= $_bootcamp; ?></h5>
                            <p><?= $_bootcamp_desc; ?></p>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                    </ul> <!-- row -->
                  </div>
                </div> <!-- portfolio content -->
                <!-- = Testimonials = -->
                <div class="testimonial-section m-30px-t sm-m-20px-t">
                  <div class="sub-title m-30px-b">
                    <h2 class="text-color theme-after"><?= $_personalref; ?></h2>
                  </div>
                  <div id="client-slider-single" class="owl-carousel">
                    <div class="testimonial-col">
                      <div class="user">
                        <div class="img" style="background-image:url(./img/dayessi.jpg);"></div>
                        <div class="name">
                          <span><?= $_testname1; ?></span>
                          <label><?= $_testpos1; ?></label>
                          <label><?= $_testtel1; ?></label>
                        </div>
                      </div>
                    </div> <!-- col -->
                    <div class="testimonial-col">
                      <div class="user">
                        <div class="img" style="background-image:url(./img/nestux.jpg);"></div>
                        <div class="name">
                          <span><?= $_testname4; ?></span>
                          <label><?= $_testpos4; ?></label>
                          <label><?= $_testtel4; ?></label>
                        </div>
                      </div>
                    </div> <!-- col -->
                    <div class="testimonial-col">
                      <div class="user">
                        <div class="img" style="background-image:url(./img/marco.jpg);"></div>
                        <div class="name">
                          <span><?= $_testname3; ?></span>
                          <label><?= $_testpos3; ?></label>
                          <label><?= $_testtel3; ?></label>
                        </div>
                      </div>
                    </div> <!-- col -->
                    <div class="testimonial-col">
                      <div class="user">
                        <div class="img" style="background-image:url(./img/jose.jpg);"></div>
                        <div class="name">
                          <span><?= $_testname0; ?></span>
                          <label><?= $_testpos0; ?></label>
                          <label><?= $_testtel0; ?></label>
                        </div>
                      </div>
                    </div> <!-- col -->
                  </div> <!-- owl -->
                </div> <!-- testimonials-->
              </div> <!-- page-content -->
              <p class="footer-resp"><?= $_footer; ?></p>
            </div> <!-- page-scroll  -->
          </div>
        </div> <!-- row -->
      </div>
    </div> <!-- portfolio -->
    <!-- === Contact === -->
    <div class="page" id="contact">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 page-title">
            <div class="v-center-box d-flex align-items-end">
              <h2><?= $_contact; ?></h2>
            </div>
            <p class="footer"><?= $_footer; ?></p>
          </div>
          <div class="col-lg-9">
            <div class="page-scroll">
              <div class="page-content">
                <!-- = Page Title = -->
                <div class="section-title">
                  <h6 class="theme-after text-color"><?= $_getintouch; ?></h6>
                  <div class="st-title">
                    <h2 class="theme-after text-color"><?= $_chead; ?></h2>
                  </div>
                </div>
                <!-- = Info = -->
                <div class="row">
                  <div class="col-sm-6">
                    <div class="contact-info">
                      <i class="theme-color fab fa-linkedin"></i>
                      <a href="<?= $_linkedin; ?>">atrujillomateus</a>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="contact-info">
                      <i class="theme-color ti-email"></i>
                      <a href="mailto:<?= $_mail; ?>"><?= $_mail; ?></a>
                    </div>
                  </div>
                </div>
                <!-- = Contact = -->
                <div class="row">
                  <div class="col-12 m-30px-b sm-m-15px-b">
                    <div class="contact-form">
                      <h4 class="text-color font-alt m-20px-b"><?= $_say; ?></h4>
                      <form class="contactform" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="s_name" class="validate form-control" placeholder="<?= $_name; ?>" required>
                              <span class="input-focus-effect theme-bg"></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="email" name="s_email" class="form-control" placeholder="<?= $_email; ?>" required>
                              <span class="input-focus-effect theme-bg"></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="tel" name="s_phone" class="form-control" placeholder="<?= $_tphone; ?>">
                              <span class="input-focus-effect theme-bg"></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="s_subject" class="form-control" placeholder="<?= $_subject; ?>" required>
                              <span class="input-focus-effect theme-bg"></span>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea name="s_message" rows="3" class="form-control" placeholder="<?= $_msg; ?>" required></textarea>
                              <span class="input-focus-effect theme-bg"></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="g-recaptcha" data-sitekey="6LcgdbwUAAAAAMjsRwvIR08sluNH9GBfzEHQ5JTe"></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="send">
                              <input type="submit" name="s_enviar" class="btn btn-theme" value="<?= $_send; ?>">
                            </div>
                            <span class="output_message"></span>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div> <!-- col -->
                </div>
              </div> <!-- page-content -->
              <p class="footer-resp"><?= $_footer; ?></p>
            </div> <!-- page-scroll  -->
          </div>
        </div> <!-- row -->
      </div>
    </div> <!-- contact -->
  </div> <!-- stack -->
  <!-- === Header === -->
  <header class="header theme-bg">
    <div class="logo"><a href="v1" title="Version 1.0"><img src="./img/icon.png" height="40px" width="40px" style="margin-right:8px;" alt="Logo versión 1" /></a>MATEUS</div>
    <div style="margin-top:3px;"><a href="es" class="a-lang" title="Español"><img src="./img/co.png" alt="" /> ESP</a><br><a href="en" class="a-lang" title="English"><img src="./img/uk.png" alt="" /> ENG</a></div>
    <div class="menu-toggle" style="background-color:#000;"><button class="menu-button"><span>menu</span></button></div>
  </header> <!-- header -->
  <!-- Plugins JS -->
  <script type="text/javascript" src="./plugin/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="./plugin/popper/popper.min.js"></script>
  <script type="text/javascript" src="./plugin/bootstrap/js/bootstrap.mateus.min.js"></script>
  <script type="text/javascript" src="./plugin/owl-carousel/js/owl-carousel.min.js"></script>
  <script type="text/javascript" src="./plugin/typeit/typeit.min.js"></script>
  <script type="text/javascript" src="./plugin/isotope/isotope.min.js"></script>
  <script type="text/javascript" src="./plugin/particles/particles.min.js"></script>
  <script type="text/javascript" src="./plugin/magnific/js/magnific-popup.min.js"></script>
  <script type="text/javascript" src="./plugin/nav/js/classie.js"></script>
  <script type="text/javascript" src="./plugin/nav/js/nav.js"></script>
  <!-- Scripts -->
  <script type="text/javascript" src="./js/mateus.js"></script>
  <!-- Cookie consent -->
  <script type="text/javascript" src="./js/cookies.js"></script>
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      cookieconsent.run({
        "notice_banner_type": "simple",
        "consent_type": "express",
        "palette": <?= '"' . $theme . '"'; ?>,
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

</html>