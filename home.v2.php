<?php
require_once "./_var.php";
require_once $TO_HOME . "common.php";
?>
<div class="dark-body">
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
                    </div>
                    <div class="btn-bar">
                      <a href="<?= $TO_HOME; ?>resume.<?= $lang; ?>" class="btn btn-theme"><?= $_cv; ?></a>
                      <hr class="my-1" /><a href="<?= $TO_HOME; ?>ui-kit" target="_blank">UI kit preview</a>
                      <hr class="my-1" />
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
    </div> 
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
                <div class="section-title">
                  <h6 class="theme-after text-color"><?= $_whoiam; ?></h6>
                  <div class="st-title">
                    <h2 class="theme-after text-color"><?= $_aboutiam; ?></h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3 user-photo">
                    <div class="row">
                      <div class="col-6 col-sm-12 user-image" style="background-image:url(<?= $HOME_PATH; ?>img/profile.jpg);"><img src="<?= $HOME_PATH; ?>img/sample.jpg" title="" alt=""></div>
                      <div class="col-6 col-sm-12 btn-bar"><br><a href="<?= $TO_HOME; ?>resume.<?= $lang; ?>" target="_blank" class="btn btn-theme"><?= $_hire; ?></a></div>
                    </div>
                  </div>
                  <div class="col-sm-9 sm-m-30px-t">
                    <div class="about-text">
                      <h3 class="text-color"><?= $_iam; ?> Andrés Trujillo Mateus</h3>
                      <p class="m-0px"><?= $_about; ?></p>
                    </div> 
                    <div class="row m-30px-t">
                      <?php for ($i = 0; $i < count($_thingies); $i++) { ?>
                        <div class="col-sm-6 m-30px-b">
                          <div class="feature-box"><i class="icon text-color theme-after <?= $_thingiesicon[$i]; ?>"></i>
                            <div class="feature-content">
                              <h5 class="text-color"><?= $_thingies[$i]; ?></h5>
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
                        <div class="counter-data" data-count="375"><i class="theme-color ti-ruler-pencil"></i>
                          <div class="count text-color">5</div><a href="<?= $_github; ?>" target="_blank">
                            <h6>Projects</h6>
                          </a>
                        </div>
                      </div>
                      <br><a href="<?= $TO_HOME; ?>ui-kit" target="_blank">&& UI kit preview</a>
                    </div> 
                    <div class="col-12 col-md-4 md-m-15px-tb">
                      <h6>Digital Business Card v2</h6><iframe src="<?= $HOME_PATH; ?>card.v2.html" title="Digital Business Card v2" width="100%" height="140px" frameborder="0"></iframe>
                    </div> 
                    <div class="col-12 col-md-5 md-m-15px-tb">
                      <h6>Digital Business Card v1</h6><iframe src="<?= $HOME_PATH; ?>card.v1.html" title="Digital Business Card v1" width="100%" height="140px" frameborder="0"></iframe>
                    </div> 
                  </div> 
                </div>
                <div class="d-flex flex-row flex-wrap py-2">
                  <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_gostart; ?></a>
                  <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_resume; ?></a>
                  <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_portfolio; ?></a>
                  <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_contact; ?></a>
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
                <div class="section-title">
                  <h6 class="theme-after text-color"><?= $_expertise; ?></h6>
                  <div class="st-title">
                    <h2 class="theme-after text-color"><?= $_resume; ?></h2>
                  </div>
                </div>
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
                                      <div class="progress-bar" style="width: <?= $_codeskillprogress[$i]; ?>"></div>
                                    </div>
                                  </div>
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
                  </div> 
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
                  </div> 
                </div> 
                <div class="d-flex flex-row flex-wrap py-2">
                  <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_gostart; ?></a>
                  <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_aboutme; ?></a>
                  <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_portfolio; ?></a>
                  <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_contact; ?></a>
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
                <div class="section-title">
                  <h6 class="theme-after text-color"><?= $_mywork; ?></h6>
                  <div class="st-title">
                    <h2 class="theme-after text-color"><?= $_myproj; ?></h2>
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
                    <h2 class="text-color theme-after"><?= $_personalref; ?></h2>
                  </div>
                  <div id="client-slider-single" class="owl-carousel">
                    <?php for ($i = 0; $i < count($_testname); $i++) { ?>
                      <div class="testimonial-col">
                        <div class="user">
                          <div class="img" style="<?= $_testpic[$i]; ?>"></div>
                          <div class="name"><span><?= $_testname[$i]; ?></span><label><?= $_testpos[$i]; ?></label><label><?= $_testtel[$i]; ?></label></div>
                        </div>
                      </div> 
                    <?php } ?>
                  </div> 
                </div> 
                <div class="d-flex flex-row flex-wrap py-2">
                  <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_gostart; ?></a>
                  <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_aboutme; ?></a>
                  <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_resume; ?></a>
                  <a href="javascript:swapPage('contact');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_contact; ?></a>
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
                <div class="section-title">
                  <h6 class="theme-after text-color"><?= $_getintouch; ?></h6>
                  <div class="st-title">
                    <h2 class="theme-after text-color"><?= $_chead; ?></h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="contact-info"><i class="theme-color fab fa-linkedin"></i><a href="<?= $_linkedin; ?>" target="_blank">atrujillomateus</a></div>
                  </div>
                  <div class="col-sm-6">
                    <div class="contact-info"><i class="theme-color ti-email"></i><a href="mailto:<?= $_mail; ?>" target="_blank"><?= $_mail; ?></a></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 m-30px-b sm-m-15px-b">
                    <div class="contact-form">
                      <h4 class="text-color font-alt m-20px-b"><?= $_say; ?></h4>
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
                          <div class="col-md-6 send"><input type="submit" id="mail_submit" name="mail_submit" class="btn btn-theme" value="<?= $_send; ?>"></div><span class="output_message"></span>
                        </div>
                      </form>
                    </div>
                  </div> 
                </div>
                <div class="d-flex flex-row flex-wrap py-2">
                  <a href="javascript:swapPage('home');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_gostart; ?></a>
                  <a href="javascript:swapPage('about');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_aboutme; ?></a>
                  <a href="javascript:swapPage('resume');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_resume; ?></a>
                  <a href="javascript:swapPage('portfolio');" class="mr-2 py-1 px-3 text-uppercase text-center text-nowrap mr-1 mb-3 btn-sm btn-theme"><?= $_go; ?> <?= $_portfolio; ?></a>
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
    <div class="logo"><a href="<?= $TO_HOME; ?>v1" custom-folder="true" title="Version 1"><img src="<?= $HOME_PATH; ?>img/icon.png" height="40px" width="40px" style="margin-right:8px;" alt="Logo versión 1" /></a>MATEUS</div>
    <div class="mt-1 mr-5 pr-4 text-right"><a href="<?= $TO_HOME; ?>es" class="a-lang" title="Español"><img src="<?= $HOME_PATH; ?>img/co.png" alt="" /> ES</a><br><a href="<?= $TO_HOME; ?>en" class="a-lang" title="English"><img src="<?= $HOME_PATH; ?>img/uk.png" alt="" /> EN</a></div>
    <div class="menu-toggle"><button id="btn-menu" class="menu-button"><span>menu</span></button></div>
  </header> 
  <script>
    "use strict";
    function swapStyleSheet(sheet) {
      document.getElementById('pagestyle').setAttribute('href', '<?= $HOME_PATH; ?>css/mateus.' + sheet + '.css');
      document.cookie = 'theme=' + sheet + ';max-age=31536000;path=/;samesite;';
    }
    function swapPage(page) {
      document.querySelector(`#btn-menu`).click();
      setTimeout(() => document.querySelector(`#btn-${page}`).click(), 500);
    }
    function onHashChangeEvent() {
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
    window.addEventListener("hashchange", onHashChangeEvent);
    document.addEventListener('DOMContentLoaded', function() {
      onHashChangeEvent();
      $("#mail_form").submit(function(event) {
        $("#mail_submit").attr("disabled", true);
        event.preventDefault();
        let formData = $("#mail_form").serializeArray();
        formData.push({
          name: "mail_submit",
          value: "1"
        });
        $.ajax({
          type: "POST",
          url: "<?= $HOME_PATH; ?>_contact.php",
          data: formData,
          dataType: "json",
          success: function(response) {
            if (response.status == 200 || response.status == 201 || response.status == 202) show_modal_front("success", "INFO.", "<?= $_mail_thanks; ?>", true);
            else show_modal_front("danger", "ERROR", "<?= $_mail_wrong; ?><br><code>(" + response.message + ")</code>", true);
            $("#mail_submit").removeAttr("disabled");
          },
          error: function(xhr, status, error) {
            show_modal_front("danger", "ERROR", "<?= $_mail_wrong; ?>", true);
            $("#mail_submit").removeAttr("disabled");
            console.error(xhr.responseText);
          }
        });
      });
      cookieconsent.run({
        "notice_banner_type": "simple",
        "consent_type": "express",
        "palette": "<?= $_theme; ?>",
        "language": "<?= $lang; ?>",
        "website_name": "byuwur.net",
        "change_preferences_selector": "#cookiePrefs"
      });
    });
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-148227598-1');
  </script>
</div>