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
<link rel="stylesheet" href="<?= $HOME_PATH; ?>/css/v2.css" />
<link id="themesheet" rel="stylesheet" href="<?= $HOME_PATH; ?>/css/v2.<?= $app_theme; ?>.css" />
<script src="<?= $HOME_PATH; ?>/js/v2.js" defer></script>
<script>
    localStorage.setItem("APP_LANG", "<?= $app_lang; ?>");
    localStorage.setItem("APP_THEME", "<?= $app_theme; ?>");
</script>
<!-- BODY -->
<div class="app-container">
    <div class="social-icons">
        <a href="<?= $_linkedin; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="<?= $_github; ?>" target="_blank"><i class="fab fa-github"></i></a>
        <a href="<?= $_youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>
    <section id="about">
        <div class="mb-3">
            <span class="text-uppercase text-center fs-1 fw-bold">Soy <?= $_name_top; ?></span>
            <span class="text-uppercase"><?= $_nombre; ?></span>
        </div>
        <span class="fs-3">Y hago cosas útiles</span>
        <span class="fs-3 mb-5">en <span id="typed"></span></span>
        <div class="row project-slider w-100">
            <!--div class="col-md-6 project p-4 mb-4 text-dark-shadow" style="background-image: url(<?= $HOME_PATH; ?>/img/v0/work-1/0.jpg);">
                <h3 class="project-title">Title</h3>
                <div class="project-description p-4">
                    <div class="flex-grow-1">
                        <h3>&nbsp;</h3>
                        <span class="project-text">Description</span>
                    </div>
                    <div class="flex-grow-0">
                        <div class="mt-3">
                            <span class="badge rounded-pill text-bg-dark"><i class="fab fa-php ps-0"></i>PHP</span>
                        </div>
                        <div class="mt-3">
                            <a href="https://byuwur.net" target="_blank"><i class="fab fa-github"></i><span>GitHub</span><i class="fas fa-code"></i></a>
                            <a href="https://byuwur.net" target="_blank"><i class="fas fa-play-circle"></i><span>Demo</span></a>
                        </div>
                    </div>
                </div>
            </!--div-->
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-sm-auto d-flex justify-content-center">
                <div class="has-background-contain rounded-circle mb-4" style="background-image:url(<?= $HOME_PATH; ?>/img/profile.jpg);height:128px;width:128px;"></div>
            </div>
            <p class="col"><?= $_about; ?></p>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-center">
            <a class="a-lang" href="<?= $ROOT_ROUTE; ?>resume.es" title="Resume en Español">
                <i class="fas fa-file-invoice"></i><img src="<?= $HOME_PATH; ?>/img/co.png" width="16px" height="12px" style="margin: 4px;" alt="" /><span>Resume (ES)</span><i class="fas fa-download ms-auto"></i>
            </a>
            <a class="a-lang" href="<?= $ROOT_ROUTE; ?>resume.en" title="Resume in English">
                <i class="fas fa-file-invoice"></i><img src="<?= $HOME_PATH; ?>/img/uk.png" width="16px" height="12px" style="margin: 4px;" alt="" /><span>Resume (EN)</span><i class="fas fa-download ms-auto"></i>
            </a>
        </div>
    </section>
    <section id="resume">
        <h2 class="text-uppercase mb-5 pb-5"><?= "RESUME"; ?></h2>
        <div class="row">
            <div class="skill-row row col-12">
                <div class="col-6">
                    <h4 class="text-uppercase"><i class="fas fa-code"></i><?= $_codeskills; ?></h4>
                    <div class="row">
                        <?php for ($i = 0; $i < count($_codeskilltext); $i++) { ?>
                            <div class="skill col-sm-6 mt-3">
                                <h4 class="m-0"><i class="<?= $_codeskillicon[$i]; ?>"></i><?= $_codeskilltext[$i]; ?></h4>
                                <span class="badge rounded-pill text-primary text-md-end"><?= $_codeskilllevel[$i]; ?></span>
                                <div class="progress rounded-pill">
                                    <div class="progress-bar rounded-pill " style="width: <?= $_codeskillprogress[$i]; ?>"></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-6">
                    <h4 class="text-uppercase"><i class="fas fa-file-export"></i><?= $_things; ?></h4>
                    <div class="row">
                        <?php for ($i = 0; $i < count($_otherskilltext); $i++) { ?>
                            <div class="skill col-sm-6 mt-3">
                                <h4 class="m-0"><i class="<?= $_otherskillicon[$i]; ?>"></i><?= $_otherskilltext[$i]; ?></h4>
                                <span class="badge rounded-pill text-primary text-md-end"><?= $_otherskilllevel[$i]; ?></span>
                                <div class="progress rounded-pill">
                                    <div class="progress-bar rounded-pill " style="width: <?= $_otherskillprogress[$i]; ?>"></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="resume-row col-md-6">
                <h4 class="text-uppercase"><i class="fas fa-briefcase"></i><?= $_experience; ?></h4>
                <ul>
                    <?php for ($i = 0; $i < count($_experiencepos); $i++) { ?>
                        <li>
                            <div class="resume-title p-2">
                                <h4 class="m-0"><i class="fas fa-check"></i><?= $_experiencepos[$i]; ?></h4>
                                <span class="mt-1"><i class="fas fa-building"></i><?= $_experienceent[$i]; ?></span>
                                <span class="text-primary text-md-end"><i class="fas fa-clock"></i><?= $_experiencetime[$i]; ?></span>
                            </div>
                            <div class="p-2">
                                <span class="m-0"><i class="fas fa-list-check"></i><?= $_experiencedesc[$i]; ?></span>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="resume-row col-md-6">
                <h4 class="text-uppercase"><i class="fas fa-graduation-cap"></i><?= $_education; ?></h4>
                <ul>
                    <?php for ($i = 0; $i < count($_educationprog); $i++) { ?>
                        <li>
                            <div class="resume-title p-2">
                                <h4 class="m-0"><i class="fas fa-graduation-cap"></i><?= $_educationprog[$i]; ?></h4>
                                <span class="mt-1"><i class="fas fa-building"></i><?= $_educationinst[$i]; ?></span>
                                <span class="text-primary text-md-end"><i class="fas fa-clock"></i><?= $_educationyear[$i]; ?></span>
                            </div>
                            <div class="p-2">
                                <span class="m-0"><i class="fas fa-list-check"></i><?= $_educationprof[$i]; ?></span>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-12 mt-5 pt-5">
                <ul class="w-100">
                    <?php for ($i = 0; $i < count($_portafolio); $i++) { ?>
                        <li><i class="fas fa-trophy"></i><?= $_portafolio[$i]; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>
    <section id="contact">
        <h2 class="mb-5"><?= $_chead; ?></h2>
        <span class="mb-5 pb-5"><?= "Y construyamos algo increíble juntos."; ?></span>
        <ul class="row w-100 fs-5 mb-4">
            <li class="col-12 col-md-6 text-end">
                <a href="<?= $_linkedin; ?>" target="_blank">atrujillomateus</a>
                <i class="fab fa-linkedin"></i>
            </li>
            <li class="col-12 col-md-6 text-start">
                <i class="fas fa-envelope"></i>
                <a href="mailto:<?= $_mail; ?>" target="_blank"><?= $_mail; ?></a>
            </li>
        </ul>
        <form id="mail_form" name="mail_form" class="row w-100" action="javascript:;">
            <div class="col-12 col-md-6 position-relative"><i class="fas fa-user input-icon"></i>
                <input type="text" id="mail_name" name="mail_name" class="form-control input-has-icon" placeholder="<?= $_name; ?>" required>
            </div>
            <div class="col-12 col-md-6 position-relative"><i class="fas fa-at input-icon"></i>
                <input type="email" id="mail_email" name="mail_email" class="form-control input-has-icon" placeholder="<?= $_email; ?>" required>
            </div>
            <div class="col-12 col-md-6 position-relative"><i class="fas fa-phone input-icon"></i>
                <input type="tel" id="mail_phone" name="mail_phone" class="form-control input-has-icon" placeholder="<?= $_tphone; ?>">
            </div>
            <div class="col-12 col-md-6 position-relative"><i class="fas fa-envelope-open-text input-icon"></i>
                <input type="text" id="mail_subject" name="mail_subject" class="form-control input-has-icon" placeholder="<?= $_subject; ?>" required>
            </div>
            <div class="col-12 position-relative"><i class="fas fa-pen-nib input-icon"></i>
                <textarea id="mail_message" name="mail_message" rows="3" class="form-control input-has-icon" placeholder="<?= $_msg; ?>" required></textarea>
            </div>
            <div class="g-recaptcha col-12 col-md-6 p-2" id="mail_recaptcha" name="mail_recaptcha" data-sitekey="6LdBMSIaAAAAANG0gtgkpXUE0K5QS2nu0tJWC1Fm"></div>
            <div class="col-12 col-md-6 p-2">
                <button type="submit" class="btn btn-primary p-2o5 pr-5">
                    <i class="fas fa-paper-plane mr-2"></i><?= $_send; ?>
                    <div class="spinner-border" role="status" style="display:none;"></div>
                </button>
            </div>
        </form>
        <div class="row w-100">
            <h5 class="mt-5 pt-5">Digital Business Cards. :]</h5>
            <div class="col-md-5 col-lg-6">
                <iframe src="<?= $HOME_PATH; ?>/card.v2.html" title="Digital Business Card v2" width="100%" height="128px" frameborder="0"></iframe>
            </div>
            <div class="col-md-7 col-lg-6">
                <iframe src="<?= $HOME_PATH; ?>/card.v1.html" title="Digital Business Card v1" width="100%" height="128px" frameborder="0"></iframe>
            </div>
        </div>
    </section>
</div>
<!-- BODY -->
<script>
    "use strict";
    $(() => {
        document.title = "[Mateus] byUwUr";
        byCommon.init();
        if ($("#page-icon").length) $("#page-icon").attr("href", "<?= $HOME_PATH; ?>/img/favicon.png");
        if ($("#shortcut-icon").length) $("#shortcut-icon").attr("href", "<?= $HOME_PATH; ?>/img/favicon.png");
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
            failFn: () => {
                show_modal_front("danger", "ATENCIÓN", "Su mensaje se ha enviado exitosamente.<br>¡Le contactaremos pronto!", true);
            }
        });
    });
</script>
<?php
// Always call due to /_var.php invoking ob_start();
ob_end_flush();
?>