<?php
require_once "./_var.php";
require_once $TO_HOME . "_common.php";
//require_once $TO_HOME . "_functions.php";
//require_once $TO_HOME . "_plugins.php";
//require_once $TO_HOME . "_config.php";
require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "_router.php";
//require_once $TO_HOME . "_auth.php";
// --- PHP ---
?>
<link id="pagestyle" rel="stylesheet" href="<?= $HOME_PATH; ?>/css/v2.css" />
<!-- BODY -->
<nav class="pages-nav">
  <div class="pages-nav__item"><a id="btn-home" class="link link--page" href="#home"><?= $_helloworld; ?></a></div>
  <div class="pages-nav__item"><a id="btn-about" class="link link--page" href="#about"><?= $_aboutme; ?></a></div>
  <div class="pages-nav__item"><a id="btn-resume" class="link link--page" href="#resume"><?= $_resume; ?></a></div>
  <div class="pages-nav__item"><a id="btn-portfolio" class="link link--page" href="#portfolio"><?= $_portfolio; ?></a></div>
  <div class="pages-nav__item"><a id="btn-contact" class="link link--page" href="#contact"><?= $_contact; ?></a></div>
</nav>
<div class="pages-stack">
  <div class="page home-banner" id="home">
    <div class="container-fluid p-0">
      <div class="row full-screen">
        <div class="col-lg-3">
          <p class="footer"><?= $_footer; ?></p>
        </div>
        <div class="col-lg-9">
          <div class="page-scroll">
            <div class="page-content">
              <div class="v-center-box d-flex align-items-center">
                <div class="home-text">
                  <h6 class="text-white theme-after"><?= $_helloworld; ?></h6>
                  <h1 class="text-white blue-after"><?= $_im; ?> Mateus Andrés</h1>
                  <p class="text-white"><?= $_andim; ?> <span id="typed"></span></p>
                  <div class="social-icons">
                    <a href="<?= $_linkedin; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="<?= $_github; ?>" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="<?= $_youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="<?= $_facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?= $_instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                  </div>
                  <div class="btn-bar">
                    <a href="<?= $ROOT_ROUTE; ?>resume.<?= $lang; ?>" class="btn btn-primary"><?= $_cv; ?></a>
                    <hr class="my-1" />
                    <div class="d-flex flex-row flex-wrap py-2">
                      <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_aboutme; ?></a>
                      <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_resume; ?></a>
                      <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_portfolio; ?></a>
                      <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_contact; ?></a>
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
  </div>
  <div class="page about-section" id="about">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-3 page-title">
          <div class="v-center-box d-flex align-items-end">
            <h2><?= $_aboutmateus; ?> Mateus</h2>
          </div>
          <p class="footer"><?= $_footer; ?></p>
        </div>
        <div class="col-lg-9">
          <div class="page-scroll">
            <div class="page-content">
              <div class="section-title">
                <h6 class="theme-after text-white"><?= $_whoiam; ?></h6>
                <div class="st-title">
                  <h2 class="theme-after text-white"><?= $_aboutiam; ?></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 user-photo">
                  <div class="row">
                    <div class="col-6 col-sm-12 user-image" style="background-image:url(<?= $HOME_PATH; ?>/img/profile.jpg);"><img src="<?= $HOME_PATH; ?>/img/profile.jpg" title="" alt=""></div>
                    <div class="col-6 col-sm-12 btn-bar"><br><a href="<?= $ROOT_ROUTE; ?>resume.<?= $lang; ?>" target="_blank" class="btn btn-primary"><?= $_hire; ?></a></div>
                  </div>
                </div>
                <div class="col-sm-9 sm-m-30px-t">
                  <div class="about-text">
                    <h3 class="text-white"><?= $_iam; ?> Andrés Trujillo Mateus</h3>
                    <p class="m-0px"><?= $_about; ?></p>
                  </div>
                  <div class="row m-30px-t">
                    <?php for ($i = 0; $i < count($_thingies); $i++) { ?>
                      <div class="col-sm-6 m-30px-b">
                        <div class="feature-box"><i class="icon text-white theme-after <?= $_thingiesicon[$i]; ?>"></i>
                          <div class="feature-content">
                            <h5 class="text-white"><?= $_thingies[$i]; ?></h5>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="counter-row m-50px-t p-40px-t lg-m-35px-t lg-p-25px-t sm-p-15px-t">
                <div class="row">
                  <div class="col-12 col-md-3 md-m-15px-tb">
                    <div class="counter-col counter-box">
                      <div class="counter-data" data-count="375"><i class="ti-ruler-pencil"></i>
                        <div class="count text-white">18</div><a href="<?= $_github; ?>" target="_blank">
                          <h6>Projects</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 md-m-15px-tb">
                    <h6>Digital Business Card v2</h6><iframe src="<?= $HOME_PATH; ?>/card.v2.html" title="Digital Business Card v2" width="100%" height="140px" frameborder="0"></iframe>
                  </div>
                  <div class="col-12 col-md-5 md-m-15px-tb">
                    <h6>Digital Business Card v1</h6><iframe src="<?= $HOME_PATH; ?>/card.v1.html" title="Digital Business Card v1" width="100%" height="140px" frameborder="0"></iframe>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-row flex-wrap py-2">
                <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_gostart; ?></a>
                <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_resume; ?></a>
                <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_portfolio; ?></a>
                <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_contact; ?></a>
              </div>
            </div>
            <p class="footer-resp"><?= $_footer; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page resume-section" id="resume">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-3 page-title">
          <div class="v-center-box d-flex align-items-end">
            <h2><?= $_resume; ?></h2>
          </div>
          <p class="footer"><?= $_footer; ?></p>
        </div>
        <div class="col-lg-9">
          <div class="page-scroll">
            <div class="page-content">
              <div class="section-title">
                <h6 class="theme-after text-white"><?= $_expertise; ?></h6>
                <div class="st-title">
                  <h2 class="theme-after text-white"><?= $_resume; ?></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="skill-row">
                    <div class="sub-title m-30px-b">
                      <h2 class="text-white theme-after"><?= $_skills; ?></h2>
                    </div>
                    <div class="row">
                      <div class="col-6 p-30px-r sm-p-15px-r">
                        <h3 class="text-white"><?= $_codeskills; ?> <i class="fas fa-code"></i></h3>
                        <div class="skills">
                          <div class="row">
                            <?php for ($i = 0; $i < count($_codeskilltext); $i++) { ?>
                              <div class="col-sm-6 mt-3">
                                <div class="progress-lt">
                                  <h6><i class="<?= $_codeskillicon[$i]; ?>"></i> <?= $_codeskilltext[$i]; ?></h6><span class="theme-bg"><?= $_codeskilllevel[$i]; ?></span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: <?= $_codeskillprogress[$i]; ?>"></div>
                                  </div>
                                </div>
                              </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 p-30px-r sm-p-15px-r">
                        <h3 class="text-white"><?= $_otherskills; ?> <i class="fas fa-file-export"></i></h3>
                        <div class="skills">
                          <div class="row">
                            <?php for ($i = 0; $i < count($_otherskilltext); $i++) { ?>
                              <div class="col-sm-6 mt-3">
                                <div class="progress-lt">
                                  <h6><i class="<?= $_otherskillicon[$i]; ?>"></i> <?= $_otherskilltext[$i]; ?></h6><span class="theme-bg"><?= $_otherskilllevel[$i]; ?></span>
                                  <div class="progress">
                                    <div class="progress-bar" style="width: <?= $_otherskillprogress[$i]; ?>"></div>
                                  </div>
                                </div>
                              </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="resume-row">
                    <h2 class="theme-after text-white"><?= $_experience; ?></h2>
                    <ul>
                      <?php for ($i = 0; $i < count($_experiencepos); $i++) { ?>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg ti-briefcase"></i>
                            <span class="text-white"><?= $_experiencepos[$i]; ?><br><small><?= $_experienceent[$i]; ?></small></span>
                            <label><?= $_experiencetime[$i]; ?></label>
                          </div>
                          <div class="r-info">
                            <p><?= $_experiencedesc[$i]; ?></p>
                          </div>
                        </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="resume-row">
                    <h2 class="theme-after text-white"><?= $_education; ?></h2>
                    <ul>
                      <?php for ($i = 0; $i < count($_educationprog); $i++) { ?>
                        <li>
                          <div class="r-name"><i class="theme-bg fas fa-graduation-cap"></i><span class="text-white"><?= $_educationprog[$i]; ?><br><?= $_educationinst[$i]; ?></span></div>
                          <div class="r-info"><?= $_educationyear[$i]; ?> - <?= $_educationprof[$i]; ?></div>
                        </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-row flex-wrap py-2">
                <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_gostart; ?></a>
                <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_aboutme; ?></a>
                <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_portfolio; ?></a>
                <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_contact; ?></a>
              </div>
            </div>
            <p class="footer-resp"><?= $_footer; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page" id="portfolio">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-3 page-title">
          <div class="v-center-box d-flex align-items-end">
            <h2><?= $_portfolio; ?></h2>
          </div>
          <p class="footer"><?= $_footer; ?></p>
        </div>
        <div class="col-lg-9">
          <div class="page-scroll">
            <div class="page-content">
              <div class="section-title">
                <h6 class="theme-after text-white"><?= $_mywork; ?></h6>
                <div class="st-title">
                  <h2 class="theme-after text-white"><?= $_myproj; ?></h2>
                </div>
              </div>
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
                </div>
                <div class="portfolio-content">
                  <ul class="portfolio-cols portfolio-cols-3">
                    <?php for ($i = 0; $i < count($_portfoliotitle); $i++) { ?>
                      <li class="portfolio-item web <?= $_portfolioclass[$i]; ?>">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <div class="portfolio-image" style="<?= $_portfoliobg[$i]; ?>"></div>
                            <div class="hover">
                              <div class="action-btn"><?= $_portfoliolink[$i]; ?></div>
                            </div>
                          </div>
                          <div class="portfolio-info">
                            <h5><?= $_portfoliotitle[$i]; ?></h5>
                            <p><?= $_portfoliodesc[$i]; ?></p>
                          </div>
                        </div>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
              <div class="testimonial-section m-30px-t sm-m-20px-t">
                <div class="sub-title m-30px-b">
                  <h2 class="text-white theme-after"><?= $_personalref; ?></h2>
                </div>
                <div id="client-slider-single" class="owl-carousel">
                  <?php for ($i = 0; $i < count($_testname); $i++) { ?>
                    <div class="slider-item testimonial-col">
                      <div class="user">
                        <div class="img" style="<?= $_testpic[$i]; ?>"></div>
                        <div class="name"><span><?= $_testname[$i]; ?></span><label><?= $_testpos[$i]; ?></label><label><?= $_testtel[$i]; ?></label></div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="d-flex flex-row flex-wrap py-2">
                <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_gostart; ?></a>
                <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_aboutme; ?></a>
                <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_resume; ?></a>
                <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_contact; ?></a>
              </div>
            </div>
            <p class="footer-resp"><?= $_footer; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page" id="contact">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-3 page-title">
          <div class="v-center-box d-flex align-items-end">
            <h2><?= $_contact; ?></h2>
          </div>
          <p class="footer"><?= $_footer; ?></p>
        </div>
        <div class="col-lg-9">
          <div class="page-scroll">
            <div class="page-content">
              <div class="section-title">
                <h6 class="theme-after text-white"><?= $_getintouch; ?></h6>
                <div class="st-title">
                  <h2 class="theme-after text-white"><?= $_chead; ?></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="contact-info"><i class="fab fa-linkedin"></i><a href="<?= $_linkedin; ?>" target="_blank">atrujillomateus</a></div>
                </div>
                <div class="col-sm-6">
                  <div class="contact-info"><i class="fab fa-envelope"></i><a href="mailto:<?= $_mail; ?>" target="_blank"><?= $_mail; ?></a></div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 m-30px-b sm-m-15px-b">
                  <div class="contact-form">
                    <h4 class="text-white font-alt m-20px-b"><?= $_say; ?></h4>
                    <form id="mail_form" name="mail_form" class="contactform" action="javascript:;">
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
                        <div class="col-md-6 send">
                          <button id="mail_submit" type="submit" class="btn btn-primary">
                            <?= $_send; ?><i class="fas fa-arrow-right"></i>
                            <div id="mail_spinner" class="spinner-border" style="display:none;"></div>
                          </button>
                        </div>
                        <span class="output_message"></span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-row flex-wrap py-2">
                <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_gostart; ?></a>
                <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_aboutme; ?></a>
                <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_resume; ?></a>
                <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn btn-primary btn-sm"><?= $_go; ?> <?= $_portfolio; ?></a>
              </div>
            </div>
            <p class="footer-resp"><?= $_footer; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<header class="header theme-bg">
  <div class="logo"><a href="<?= $ROOT_ROUTE; ?>v1" title="Version 1"><img src="<?= $HOME_PATH; ?>/img/logo.png" height="40px" width="40px" style="margin-right:8px;" alt="Logo versión 1" /></a>MATEUS</div>
  <div class="mt-1 mr-5 pr-4 text-right"><a href="<?= $ROOT_ROUTE; ?>es" class="a-lang" title="Español"><img src="<?= $HOME_PATH; ?>/img/co.png" alt="" /> ES</a><br><a href="<?= $ROOT_ROUTE; ?>en" class="a-lang" title="English"><img src="<?= $HOME_PATH; ?>/img/uk.png" alt="" /> EN</a></div>
  <div class="menu-toggle"><button id="btn-menu" class="menu-button"><span>menu</span></button></div>
</header>

<!-- BODY -->
<script src="<?= $HOME_PATH; ?>/js/v2.js" defer></script>
<script>
  "use strict";

  function swapStyleSheet(sheet) {
    document.querySelector("#pagestyle").setAttribute("href", `${localStorage.getItem("HOME_PATH")}/css/mateus.${sheet}.css`);
    document.cookie = "theme=" + sheet + ";max-age=31536000;path=/;samesite;";
  }

  function swapPage(page) {
    document.querySelector(`#btn-menu`).click();
    setTimeout(() => document.querySelector(`#btn-${page}`).click(), 500);
  }

  function onHashChange() {
    switch (window.location.hash.replace("#!", "")) {
      case "home":
      case "about":
      case "resume":
      case "portfolio":
      case "contact":
        swapPage(window.location.hash.replace("#!", ""));
        break;
    }
  }

  $(() => {
    $(window).on("hashchange", onHashChange);
    document.title = "[Mateus] byUwUr v2";
    initCommon();
    element_make_http_request({
      $elementId: "#mail_form",
      $url: "<?= $HOME_PATH . $ROOT_ROUTE; ?>_contact.php",
      $_post: [{
        name: "mail_submit",
        value: "1"
      }],
      doneFn: () => {
        show_modal_front("success", "ATENCIÓN", "Su mensaje se ha enviado exitosamente.<br>¡Le contactaremos pronto!", true);
      },
    });
    onHashChange();
  });
</script>
<?php
// Always call due to /_var.php invoking ob_start();
ob_end_flush();
?>