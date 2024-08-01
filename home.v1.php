<?php
require_once "./_var.php";
//require_once $TO_HOME . "_functions.php";
//require_once $TO_HOME . "_plugin.php";
//require_once $TO_HOME . "_config.php";
require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "_router.php";
//require_once $TO_HOME . "_auth.php";
require_once $TO_HOME . "common.php";
// --- PHP ---
?>
<link rel="stylesheet" href="<?= $HOME_PATH; ?>/css/resume.css" />
<!-- BODY -->
<div id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#about">
            <span class="d-block d-lg-none" style="color: #FFF;">
                <img src="<?= $HOME_PATH; ?>/img/icon.png" height="36px" width="36px" style="margin-bottom: 4px;" alt="Logo" />
                <?= $_name_topbar; ?>
            </span>
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= $HOME_PATH; ?>/img/profile.jpg" alt="Mateus" />
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">≡</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <small style="margin: 15px 0px;"><a href="<?= $ROOT_ROUTE; ?>v1.es" class="a-logo" title="Español"><img src="<?= $HOME_PATH; ?>/img/co.png" alt="" /> ES</a><a href="<?= $ROOT_ROUTE; ?>v1.en" class="a-logo" title="English"><img src="<?= $HOME_PATH; ?>/img/uk.png" alt="" /> EN</a></small>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about"><?= $_helloworld; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills"><?= $_skills; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards"><?= $_portfolio; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience"><?= $_experience; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education"><?= $_education; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"><?= $_contact; ?></a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests"><?= $_interest; ?></a></li>
                <li class="nav-item"><a href="<?= $ROOT_ROUTE; ?>v2" class="a-logo h6"><?= $_new; ?></a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <section class="resume-section p-2 d-flex d-column" id="about">
            <div class="my-auto">
                <h1 class="mb-0 align-bottom"><?= $_name_top; ?></h1>
                <font class="align-bottom" style="text-transform: uppercase;"><?= $_nombre; ?></font>
                <hr>
                <p class="lead"><?= $_about; ?></p>
                <div class="subheading">
                    | <a href="<?= $_linkedin; ?>" target="_blank"><?= $_linkedin; ?></a> | <small><a class="a-logo" href="<?= $ROOT_ROUTE; ?>resume.es" target="_blank">Resume en español</a> | <a class="a-logo" href="<?= $ROOT_ROUTE; ?>resume.en" target="_blank">Resume in english</a></small> |
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
                    <div class="col-12 col-sm-5">
                        <br>
                        <h6>Digital Business Card v2</h6>
                        <iframe src="<?= $HOME_PATH; ?>/card.v2.html" title="Digital Business Card v2" width="100%" height="135px" frameborder="0"></iframe>
                    </div>
                    <div class="col-12 col-sm-7">
                        <br>
                        <h6>Digital Business Card v1</h6>
                        <iframe src="<?= $HOME_PATH; ?>/card.v1.html" title="Digital Business Card v1" width="100%" height="110px" frameborder="0"></iframe>
                    </div>
                </div>
                <br><a href="#contact" class="a-logo nav-link js-scroll-trigger" style="font-size: 1.375em;"><?= $_start; ?></a>
            </div>
        </section>
        <hr>
        <section class="resume-section p-2 d-flex flex-column" id="skills">
            <div class="my-auto">
                <h2 class="mb-5"><?= $_skills; ?></h2>
                <div class="subheading mb-3"><?= $_languages; ?></div>
                <ul class="list-inline dev-icons">
                    <?php for ($i = 0; $i < count($_codeskillicon); $i++) { ?>
                        <li class="list-inline-item"><i class="<?= $_codeskillicon[$i]; ?>"></i></li>
                    <?php } ?>
                </ul>
                <div class="subheading mb-2">SOFTWARE:</div>
                <ul class="row fa-ul mb-3">
                    <?php for ($i = 0; $i < count($_otherskilltext); $i++) { ?>
                        <li class="col-12 col-sm-6"><i class="fa-li <?= $_otherskillicon[$i]; ?>"></i><?= $_otherskilltext[$i] . " - " . $_otherskilllevel[$i]; ?></li>
                    <?php } ?>
                </ul>
                <div class="subheading mb-2"><?= $_things; ?></div>
                <ul class="row fa-ul mb-0">
                    <?php for ($i = 0; $i < count($_thingies); $i++) { ?>
                        <li class="col-12 col-sm-6"><i class="fa-li fa fa-check"></i><?= $_thingies[$i]; ?></li>
                    <?php } ?>
                </ul>
            </div>
            <?= $_goto; ?>
        </section>
        <hr>
        <section class="resume-section p-2 d-flex flex-column" id="awards">
            <div class="my-auto">
                <h2 class="mb-5"><?= $_portfolio; ?></h2>
                <ul class="fa-ul mb-0">
                    <?php for ($i = 0; $i < count($_portafolio); $i++) { ?>
                        <li><i class="fa-li fa fa-trophy text-warning"></i><?= $_portafolio[$i]; ?></li>
                    <?php } ?>
                </ul>
            </div>
            <?= $_goto; ?>
        </section>
        <hr>
        <section class="resume-section p-2 d-flex flex-column" id="experience">
            <div class="my-auto">
                <h2 class="mb-5"><?= $_experience; ?></h2>
                <?php for ($i = 0; $i < count($_experiencepos); $i++) { ?>
                    <div class="resume-item d-flex flex-column flex-md-row mb-5">
                        <div class="resume-content mr-auto">
                            <h3 class="mb-0"><?= $_experiencepos[$i]; ?></h3>
                            <div class="subheading"><?= $_experienceent[$i]; ?></div>
                            <div><?= $_experiencedesc[$i]; ?></div>
                        </div>
                        <div class="resume-date text-md-right"><span class="text-primary"><?= $_experiencetime[$i]; ?></span></div>
                    </div>
                <?php } ?>
            </div>
            <?= $_goto; ?>
        </section>
        <hr>
        <section class="resume-section p-2 d-flex flex-column" id="education">
            <div class="my-auto">
                <h2 class="mb-5"><?= $_education; ?></h2>
                <?php for ($i = 0; $i < count($_educationprog); $i++) { ?>
                    <div class="resume-item d-flex flex-column flex-md-row mb-3">
                        <div class="resume-content mr-auto">
                            <h3 class="mb-0"><?= $_educationprog[$i]; ?></h3>
                            <div class="subheading"><?= $_educationinst[$i]; ?></div>
                            <p><?= $_educationprof[$i]; ?></p>
                        </div>
                        <div class="resume-date text-md-right"><span class="text-primary"><?= $_educationyear[$i]; ?></span></div>
                    </div>
                <?php } ?>
            </div>
            <?= $_goto; ?>
        </section>
        <hr>
        <section class="resume-section p-2 d-flex flex-column" id="contact">
            <div class="my-auto">
                <div class="container-fluid">
                    <div class="row">
                        <h2 class="colorlib-heading"><?= $_chead; ?></h2>
                    </div><br>
                    <div class="row">
                        <div class="col-md-5 col-md-pull-6 my-auto" style="margin-bottom: 2em;">
                            <hr>
                            <div>
                                <i class="fab fa-linkedin" style="font-size: 1.5em; margin-right: 15px;"></i>
                                <a style="font-size: 1.125em;" href="<?= $_linkedin; ?>" target="_blank">atrujillomateus</a>
                                <br><br>
                                <i class="fas fa-envelope" style="font-size: 1.5em; margin-right: 15px;"></i>
                                <a style="font-size: 1.125em;" href="mailto:<?= $_mail; ?>" target="_blank"><?= $_mail; ?></a>
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
                                <form id="mail_form" name="mail_form" action="javascript:;">
                                    <div class="form-group col-md-pull-12"><input type="text" id="mail_name" name="mail_name" class="form-control" placeholder="<?= $_name; ?>" required></div>
                                    <div class="form-group col-md-pull-12"><input type="email" id="mail_email" name="mail_email" class="form-control" placeholder="<?= $_email; ?>" required></div>
                                    <div class="form-group col-md-pull-12"><input type="tel" id="mail_phone" name="mail_phone" class="form-control" placeholder="<?= $_tphone; ?>"></div>
                                    <div class="form-group col-md-pull-12"><input type="text" id="mail_subject" name="mail_subject" class="form-control" placeholder="<?= $_subject; ?>" required></div>
                                    <div class="form-group col-md-pull-12"><textarea id="mail_message" name="mail_message" rows="3" class="form-control" placeholder="<?= $_msg; ?>" required></textarea></div>
                                    <div class="g-recaptcha" id="mail_recaptcha" name="mail_recaptcha" data-sitekey="6LdBMSIaAAAAANG0gtgkpXUE0K5QS2nu0tJWC1Fm"></div><br>
                                    <div class="form-group col-11"><button id="mail_submit" type="submit" class="a-logo"><?= $_send; ?></button></div>
                                    <div id="mail_spinner" class="col-1 m-2 spinner-border text-primary" role="status" style="display:none;"><span class="sr-only">Loading...</span></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="resume-section p-2 d-flex flex-column" id="interests">
            <div class="my-auto">
                <h2 class="mb-5"><?= $_interest; ?></h2>
                <p><?= $_interesting; ?></p>
            </div>
            <?= $_goto; ?>
        </section>
    </div>
</div>
<!-- BODY -->
<script src="<?= $HOME_PATH; ?>/js/resume.js" defer></script>
<script>
    "use strict";
    $(document).ready(function() {
        $("#mail_form").submit(function(event) {
            $("#mail_submit").attr("disabled", true);
            $("#mail_spinner").fadeIn(1);
            event.preventDefault();
            let formData = $("#mail_form").serializeArray();
            formData.push({
                name: "mail_submit",
                value: "1"
            });
            $.ajax({
                type: "POST",
                url: "<?= $HOME_PATH . $ROOT_ROUTE; ?>_contact.php",
                data: formData,
                dataType: "json",
            }).done(function(response) {
                if (response.status == 200 || response.status == 201 || response.status == 202) show_modal_front("success", "ATENCIÓN", "Su mensaje se ha enviado exitosamente.<br>¡Le contactaremos pronto!", true);
                else show_modal_front("danger", "ERROR", "Ocurrió un error.<br>Disculpe las molestias, intente nuevamente.<br><code>(" + response.message + ")</code>", true);
            }).fail(function(xhr, status, error) {
                show_modal_front("danger", "ERROR", "Ocurrió un error.<br>Disculpe las molestias, intente nuevamente.", true);
                console.error(error);
            }).always(function() {
                $("#mail_submit").removeAttr("disabled");
                $("#mail_spinner").fadeOut(1);
            });
        });
        cookieconsent.run({
            "notice_banner_type": "simple",
            "consent_type": "express",
            "palette": "dark",
            "language": <?= '"' . $lang . '"'; ?>,
            "website_name": "mnm.team",
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
<?php
//login([], true);
// Always output due to "/_var.php" invoking ob_start();
ob_end_flush();
?>