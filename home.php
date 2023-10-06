<!DOCTYPE html>
<?php
require_once "./_var.php";

if (isset($_GET['lang'])) {
  switch ($_GET['lang']) {
    case 'es':
    case 'en':
      setcookie('lang', $_GET['lang'], time() + 31536000, '/', '', false, false);
      require_once $to_home . "lang/lang_" . $_GET['lang'] . ".php";
      echo "<html lang='" . $_GET['lang'] . "'>";
      $lang = $_GET['lang'];
      break;
  }
} else if (isset($_COOKIE['lang'])) {
  switch ($_COOKIE['lang']) {
    case 'es':
    case 'en':
      require_once $to_home . "lang/lang_" . $_COOKIE['lang'] . ".php";
      echo "<html lang='" . $_COOKIE['lang'] . "'>";
      $lang = $_COOKIE['lang'];
      break;
  }
} else {
  setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
  require_once $to_home . "lang/lang_es.php";
  echo "<html lang='es'>";
  $lang = 'es';
}
?>

<head>
  <meta charset="utf-8" />
  <title><?= $_title; ?></title>
  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="Mateus [byUwUr]" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://byuwur.net/img/icon.png" />
  <meta property="og:url" content="https://byuwur.net" />
  <meta property="og:site_name" content="Mateus [byUwUr]" />
  <meta property="og:description" content="Programador | Desarrollador de software | Editor de Vídeo | Creador de Contenido Digital" />
  <!-- Meta tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Language" content="en,es" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Programador | Desarrollador de software | Editor de Vídeo | Creador de Contenido Digital" />
  <meta name="author" content="Andrés Trujillo Mateus" />
  <meta name="keywords" content="Mateus, byUwUr, byuwur, MNM, Team, MNM Team" />
  <meta name="copyright" content="Mateus [byUwUr]" />
  <meta name="theme-color" content="#111" />
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
  if (isset($_GET['theme']))
    switch ($_GET['theme']) {
      case 'dark':
      case 'light':
        setcookie('theme', $_GET['theme'], time() + 31536000, '/', '', false, false);
        echo '<link id="pagestyle" rel="stylesheet" href="./css/mateus.' . $_GET['theme'] . '.css" />';
        $theme = $_GET['theme'];
        break;
    }
  else if (isset($_COOKIE['theme']))
    switch ($_COOKIE['theme']) {
      case 'dark':
      case 'light':
        echo '<link id="pagestyle" rel="stylesheet" href="./css/mateus.' . $_COOKIE['theme'] . '.css" />';
        $theme = $_COOKIE['theme'];
        break;
    }
  else {
    setcookie('theme', 'dark', time() + 31536000, '/', '', false, false);
    echo '<link id="pagestyle" rel="stylesheet" href="./css/mateus.dark.css" />';
    $theme = "dark";
  }
  ?>
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
  <div class="side-video" style="animation: float 5s infinite;"></div>
  <!--video class="side-video" muted loop><source src="./img/side.mp4" type="video/mp4" /></video-->
  <!-- === Navigation === -->
  <nav class="pages-nav">
    <div class="pages-nav__item"><a id="btn-home" class="link link--page" href="#home"><?= $_helloworld; ?></a></div>
    <div class="pages-nav__item"><a id="btn-about" class="link link--page" href="#about"><?= $_aboutme; ?></a></div>
    <div class="pages-nav__item"><a id="btn-resume" class="link link--page" href="#resume"><?= $_resume; ?></a></div>
    <div class="pages-nav__item"><a id="btn-portfolio" class="link link--page" href="#portfolio"><?= $_portfolio; ?></a></div>
    <div class="pages-nav__item"><a id="btn-contact" class="link link--page" href="#contact"><?= $_contact; ?></a></div>
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
                      <a href="<?= $_github; ?>" target="_blank"><i class="fab fa-github"></i></a>
                      <a href="<?= $_youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                      <a href="<?= $_facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="<?= $_instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                      <!--a href="<?= $_twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a-->
                    </div>
                    <div class="btn-bar">
                      <a href="resume.<?= $lang; ?>" class="btn btn-theme"><?= $_cv; ?></a>
                      <hr class="my-1" /><a href="ui-kit" target="_blank">UI kit preview</a>
                      <hr class="my-1" /><!-- = Nav shortcut = -->
                      <!-- = Nav shortcut = -->
                      <div class="d-flex flex-row flex-wrap py-2">
                        <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_aboutme; ?></a>
                        <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_resume; ?></a>
                        <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_portfolio; ?></a>
                        <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_contact; ?></a>
                      </div>
                      <?= $_goto; ?>
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
                      <div class="col-6 col-sm-12 user-image" style="background-image:url(./img/profile.jpg);"><img src="./img/sample.jpg" title="" alt=""></div>
                      <div class="col-6 col-sm-12 btn-bar"><br><a href="resume.<?= $lang; ?>" target="_blank" class="btn btn-theme"><?= $_hire; ?></a></div>
                    </div>
                  </div>
                  <div class="col-sm-9 sm-m-30px-t">
                    <div class="about-text">
                      <h3 class="text-color"><?= $_iam; ?> Andrés Trujillo Mateus</h3>
                      <p class="m-0px"><?= $_about; ?></p>
                    </div> <!-- about-text -->
                    <div class="row m-30px-t">
                      <?php for ($i = 0; $i < count($_thingies); $i++) { ?>
                        <div class="col-sm-6 m-30px-b">
                          <div class="feature-box"><i class="icon text-color theme-after <?= $_thingiesicon[$i]; ?>"></i>
                            <div class="feature-content">
                              <h5 class="text-color"><?= $_thingies[$i]; ?></h5>
                            </div>
                          </div>
                        </div> <!-- col -->
                      <?php } ?>
                    </div> <!-- row -->
                  </div>
                </div> <!-- row -->
                <!-- = Counters = -->
                <div class="counter-row m-50px-t p-40px-t lg-m-35px-t lg-p-25px-t sm-p-15px-t">
                  <div class="row">
                    <div class="col-12 col-md-3 md-m-15px-tb">
                      <div class="counter-col counter-box">
                        <div class="counter-data" data-count="375"><i class="theme-color ti-ruler-pencil"></i>
                          <div class="count text-color">5</div><a href="<?= $_github; ?>" target="_blank">
                            <h6>Projects</h6>
                          </a>
                        </div>
                      </div>
                      <br><a href="ui-kit">&& UI kit preview</a>
                    </div> <!-- col -->
                    <div class="col-12 col-md-4 md-m-15px-tb">
                      <h6>Digital Business Card v2</h6><iframe src="./card.v2.html" title="Digital Business Card v2" width="100%" height="140px" frameborder="0"></iframe>
                    </div> <!-- col -->
                    <div class="col-12 col-md-5 md-m-15px-tb">
                      <h6>Digital Business Card v1</h6><iframe src="./card.v1.html" title="Digital Business Card v1" width="100%" height="140px" frameborder="0"></iframe>
                    </div> <!-- col -->
                  </div> <!-- row -->
                </div>
                <!-- = Nav shortcut = -->
                <div class="d-flex flex-row flex-wrap py-2">
                  <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_gostart; ?></a>
                  <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_resume; ?></a>
                  <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_portfolio; ?></a>
                  <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_contact; ?></a>
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
                              <?php for ($i = 0; $i < count($_codeskilltext); $i++) { ?>
                                <div class="col-sm-6 mt-3">
                                  <div class="progress-lt">
                                    <h6><i class="<?= $_codeskillicon[$i]; ?>"></i> <?= $_codeskilltext[$i]; ?></h6><span class="theme-bg"><?= $_codeskilllevel[$i]; ?></span>
                                    <div class="progress">
                                      <div class="progress-bar" style="width: <?= $_codeskillprogress[$i]; ?>"></div><!-- /progress-bar -->
                                    </div><!-- /progress -->
                                  </div><!-- /progress-lt -->
                                </div>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 p-30px-r sm-p-15px-r">
                          <h3 class="text-color"><?= $_otherskills; ?> <i class="fas fa-file-export"></i></h3>
                          <div class="skills">
                            <div class="row">
                              <?php for ($i = 0; $i < count($_otherskilltext); $i++) { ?>
                                <div class="col-sm-6 mt-3">
                                  <div class="progress-lt">
                                    <h6><i class="<?= $_otherskillicon[$i]; ?>"></i> <?= $_otherskilltext[$i]; ?></h6><span class="theme-bg"><?= $_otherskilllevel[$i]; ?></span>
                                    <div class="progress">
                                      <div class="progress-bar" style="width: <?= $_otherskillprogress[$i]; ?>"></div><!-- /progress-bar -->
                                    </div><!-- /progress -->
                                  </div><!-- /progress-lt -->
                                </div>
                              <?php } ?>
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
                        <?php for ($i = 0; $i < count($_experiencepos); $i++) { ?>
                          <li>
                            <div class="r-name">
                              <i class="theme-bg ti-briefcase"></i>
                              <span class="text-color"><?= $_experiencepos[$i]; ?><br><small><?= $_experienceent[$i]; ?></small></span>
                              <label><?= $_experiencetime[$i]; ?></label>
                            </div>
                            <div class="r-info">
                              <p><?= $_experiencedesc[$i]; ?></p>
                            </div>
                          </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div> <!-- col -->
                  <div class="col-md-6">
                    <div class="resume-row">
                      <h2 class="theme-after text-color"><?= $_education; ?></h2>
                      <ul>
                        <?php for ($i = 0; $i < count($_educationprog); $i++) { ?>
                          <li>
                            <div class="r-name"><i class="theme-bg fas fa-graduation-cap"></i><span class="text-color"><?= $_educationprog[$i]; ?><br><?= $_educationinst[$i]; ?></span></div>
                            <div class="r-info"><?= $_educationyear[$i]; ?> - <?= $_educationprof[$i]; ?></div>
                          </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div> <!-- col -->
                </div> <!-- row -->
                <!-- = Nav shortcut = -->
                <div class="d-flex flex-row flex-wrap py-2">
                  <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_gostart; ?></a>
                  <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_aboutme; ?></a>
                  <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_portfolio; ?></a>
                  <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_contact; ?></a>
                </div>
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
                      <li class="theme-after" data-filter=".expo">Expo</li>
                      <li class="theme-after" data-filter=".mention">Mention</li>
                    </ul>
                  </div> <!-- Portfolio Filter -->
                  <div class="portfolio-content">
                    <ul class="portfolio-cols portfolio-cols-3">
                      <?php for ($i = 0; $i < count($_portfoliotitle); $i++) { ?>
                        <li class="portfolio-item web <?= $_portfolioclass[$i]; ?>">
                          <div class="portfolio-col portfolio-hover-01">
                            <div class="portfolio-img">
                              <div class="portfolio-image" style="<?= $_portfoliobg[$i]; ?>"></div>
                              <div class="hover">
                                <div class="action-btn"><?= $_portfoliolink[$i]; ?></div> <!-- Video Btn -->
                              </div> <!-- Hover -->
                            </div>
                            <div class="portfolio-info">
                              <h5><?= $_portfoliotitle[$i]; ?></h5>
                              <p><?= $_portfoliodesc[$i]; ?></p>
                            </div>
                          </div> <!-- Portfolio -->
                        </li> <!-- col -->
                      <?php } ?>
                    </ul> <!-- row -->
                  </div>
                </div> <!-- portfolio content -->
                <!-- = Testimonials = -->
                <div class="testimonial-section m-30px-t sm-m-20px-t">
                  <div class="sub-title m-30px-b">
                    <h2 class="text-color theme-after"><?= $_personalref; ?></h2>
                  </div>
                  <div id="client-slider-single" class="owl-carousel">
                    <?php for ($i = 0; $i < count($_testname); $i++) { ?>
                      <div class="testimonial-col">
                        <div class="user">
                          <div class="img" style="<?= $_testpic[$i]; ?>"></div>
                          <div class="name"><span><?= $_testname[$i]; ?></span><label><?= $_testpos[$i]; ?></label><label><?= $_testtel[$i]; ?></label></div>
                        </div>
                      </div> <!-- col -->
                    <?php } ?>
                  </div> <!-- owl -->
                </div> <!-- testimonials-->
                <!-- = Nav shortcut = -->
                <div class="d-flex flex-row flex-wrap py-2">
                  <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_gostart; ?></a>
                  <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_aboutme; ?></a>
                  <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_resume; ?></a>
                  <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_contact; ?></a>
                </div>
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
                    <div class="contact-info"><i class="theme-color fab fa-linkedin"></i><a href="<?= $_linkedin; ?>">atrujillomateus</a></div>
                  </div>
                  <div class="col-sm-6">
                    <div class="contact-info"><i class="theme-color ti-email"></i><a href="mailto:<?= $_mail; ?>"><?= $_mail; ?></a></div>
                  </div>
                </div>
                <!-- = Contact = -->
                <div class="row">
                  <div class="col-12 m-30px-b sm-m-15px-b">
                    <div class="contact-form">
                      <h4 class="text-color font-alt m-20px-b"><?= $_say; ?></h4>
                      <form id="mail_form" name="mail_form" class="contactform">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group"><input type="text" id="mail_name" name="mail_name" class="validate form-control" placeholder="<?= $_name; ?>" required><span class="input-focus-effect theme-bg"></span></div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group"><input type="email" id="mail_email" name="mail_email" class="form-control" placeholder="<?= $_email; ?>" required><span class="input-focus-effect theme-bg"></span></div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group"><input type="tel" id="mail_phone" name="mail_phone" class="form-control" placeholder="<?= $_tphone; ?>"><span class="input-focus-effect theme-bg"></span></div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group"><input type="text" id="mail_subject" name="mail_subject" class="form-control" placeholder="<?= $_subject; ?>" required><span class="input-focus-effect theme-bg"></span></div>
                          </div>
                          <div class="col-12">
                            <div class="form-group"><textarea id="mail_message" name="mail_message" rows="3" class="form-control" placeholder="<?= $_msg; ?>" required></textarea><span class="input-focus-effect theme-bg"></span></div>
                          </div>
                          <div class="col-md-6 form-group">
                            <div class="g-recaptcha" id="mail_recaptcha" name="mail_recaptcha" data-sitekey="6LdBMSIaAAAAANG0gtgkpXUE0K5QS2nu0tJWC1Fm"></div>
                          </div>
                          <div class="col-md-6 send"><input type="submit" id="mail_submit" name="mail_submit" class="btn btn-theme" value="<?= $_send; ?>"></div><span class="output_message"></span>
                        </div>
                      </form>
                    </div>
                  </div> <!-- col -->
                </div>
                <!-- = Nav shortcut = -->
                <div class="d-flex flex-row flex-wrap py-2">
                  <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_gostart; ?></a>
                  <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_aboutme; ?></a>
                  <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_resume; ?></a>
                  <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_portfolio; ?></a>
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
    <div class="logo"><a href="./v1" title="Version 1.0"><img src="./img/icon.png" height="40px" width="40px" style="margin-right:8px;" alt="Logo versión 1" /></a>MATEUS</div>
    <div class="mt-1 mr-5 pr-4 text-right"><a href="es" class="a-lang" title="Español"><img src="./img/co.png" alt="" /> ES</a><br><a href="en" class="a-lang" title="English"><img src="./img/uk.png" alt="" /> EN</a></div>
    <div class="menu-toggle"><button id="btn-menu" class="menu-button"><span>menu</span></button></div>
  </header> <!-- header -->
  <!-- modal -->
  <div id="modal_front" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
    <div id="modal_front_container" class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div id="modal_front_title" class="modal-header m-0 fs-5 alert alert-success">Info.</div>
        <div id="modal_front_body" class="modal-body text-dark"></div>
        <div class="modal-footer">
          <a id="modal_front_back" href="javascript:$('#modal_front').modal('hide');" onclick="$('#modal_front').modal('hide')" class="btn btn-dark"><?= $_close; ?></a>
          <a id="modal_front_ok" href="javascript:;" class="btn btn-success"><?= $_ok; ?></a>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
  <!-- SCRIPTS -->
  <script type="text/javascript" src="./plugin/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="./plugin/popper/popper.min.js"></script>
  <script type="text/javascript" src="./plugin/modernizr/modernizr.min.js"></script>
  <script type="text/javascript" src="./plugin/owl-carousel/js/owl-carousel.min.js"></script>
  <script type="text/javascript" src="./plugin/typeit/typeit.min.js"></script>
  <script type="text/javascript" src="./plugin/isotope/isotope.min.js"></script>
  <script type="text/javascript" src="./plugin/particles/particles.min.js"></script>
  <script type="text/javascript" src="./plugin/magnific/js/magnific-popup.min.js"></script>
  <script type="text/javascript" src="./plugin/nav/js/classie.js"></script>
  <script type="text/javascript" src="./plugin/nav/js/nav.js"></script>
  <script type="text/javascript" src="./plugin/bootstrap/js/bootstrap.mateus.min.js"></script>
  <script type="text/javascript" src="./js/cookies.js"></script>
  <script type="text/javascript" src="./js/mateus.js"></script>
  <script src="<?= $to_home; ?>_functions.js"></script>
  <script>
    $("#mail_form").submit(function(event) {
      $("#mail_submit").removeAttr("disabled");
      event.preventDefault();
      let formData = $("#mail_form").serializeArray();
      formData.push({
        name: "mail_submit",
        value: "1"
      });
      $.ajax({
        type: "POST",
        url: "<?= $to_home; ?>contact.php",
        data: formData,
        dataType: "json",
        success: function(response) {
          if (response.status == 200 || response.status == 201 || response.status == 202) showModal("success", "INFO.", "<?= $_mail_thanks; ?>", "javascript:$('#modal_front').modal('hide');", true);
          else showModal("danger", "ERROR", "<?= $_mail_wrong; ?><br><code>(" + response.message + ")</code>", "javascript:$('#modal_front').modal('hide');", true);
          $("#mail_submit").removeAttr("disabled");
        },
        error: function(xhr, status, error) {
          showModal("danger", "ERROR", "<?= $_mail_wrong; ?>", "javascript:$('#modal_front').modal('hide');", true);
          $("#mail_submit").removeAttr("disabled");
          console.error(xhr.responseText);
        }
      });
    });

    function swapStyleSheet(sheet) {
      document.getElementById('pagestyle').setAttribute('href', '<?= $to_home; ?>css/mateus.' + sheet + '.css');
      document.cookie = 'theme=' + sheet + ';max-age=31536000;path=/;samesite;';
    }

    function swapPage(page) {
      document.querySelector(`#btn-menu`).click();
      setTimeout(() => document.querySelector(`#btn-${page}`).click(), 500);
    }

    document.addEventListener('DOMContentLoaded', function() {
      cookieconsent.run({
        "notice_banner_type": "simple",
        "consent_type": "express",
        "palette": "<?= $theme; ?>",
        "language": "<?= $lang; ?>",
        "website_name": "byuwur.net",
        "change_preferences_selector": "#cookiePrefs"
      });
    });
  </script>
</body>

</html>