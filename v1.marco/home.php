<?php
require_once "../_var.php";
require_once $TO_HOME . "_common.php";
//require_once $TO_HOME . "_functions.php";
//require_once $TO_HOME . "_plugins.php";
//require_once $TO_HOME . "_config.php";
require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "_router.php";
//require_once $TO_HOME . "_auth.php";
// --- PHP ---
require_once $TO_HOME . "v1.marco/lang/" . $app_lang . ".php";
?>
<link rel="stylesheet" href="<?= $HOME_PATH; ?>/css/v1.css" />
<script src="<?= $HOME_PATH; ?>/js/v1.js" defer></script>
<!-- BODY -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top p-3" id="sideNav">
    <a class="navbar-brand" href="#about">
        <span class="d-block d-md-none" style="color: #FFF;">
            <img src="<?= $HOME_PATH; ?>/v1.marco/img/favicon.png" height="36px" width="36px" style="margin-bottom: 4px;" alt="Logo" />
            <?= $_name_topbar; ?>
        </span>
        <span class="d-none d-md-block">
            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= $HOME_PATH; ?>/v1.marco/img/profile.jpg" alt="Marco" />
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav">
            <small style="margin: 12px 0;">
                <a href="<?= $ROOT_ROUTE; ?>es" class="a-lang" title="Español"><img src="<?= $HOME_PATH; ?>/img/co.png" /> ESP</a>
                <a href="<?= $ROOT_ROUTE; ?>en" class="a-lang" title="English"><img src="<?= $HOME_PATH; ?>/img/uk.png" /> ENG</a>
            </small>
            <li class="nav-item text-uppercase"><a class="nav-link" href="#about"><?= $_helloworld; ?></a></li>
            <li class="nav-item text-uppercase"><a class="nav-link" href="#skills"><?= $_skills; ?></a></li>
            <li class="nav-item text-uppercase"><a class="nav-link" href="#awards"><?= $_awards; ?></a></li>
            <li class="nav-item text-uppercase"><a class="nav-link" href="#experience"><?= $_experience; ?></a></li>
            <li class="nav-item text-uppercase"><a class="nav-link" href="#education"><?= $_education; ?></a></li>
            <li class="nav-item text-uppercase"><a class="nav-link" href="#contact"><?= $_contact; ?></a></li>
        </ul>
    </div>
</nav>
<div class="container old-container">
    <section id="about">
        <h1 class="text-uppercase text-center"><?= $_name_top; ?></h1>
        <span class="text-uppercase mb-5"><?= $_nombre; ?></span>
        <p class="mt-4 pt-4"><?= $_about; ?></p>
        <div>
            <a href="mailto:<?= $_mail; ?>"><?= $_mail; ?></a> | <a href="tel:<?= $_phone; ?>"><?= $_phone; ?></a>
        </div>
        <div class="social-icons mt-4">
            <a href="<?= $_whatsapp; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="<?= $_facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="<?= $_github; ?>" target="_blank"><i class="fab fa-github"></i></a>
        </div>
    </section>
    <section id="skills">
        <h2 class="text-uppercase mb-5 pb-3"><?= $_skills; ?></h2>
        <div class="my-4"><?= $_languages; ?></div>
        <ul class="d-flex flex-row flex-wrap gap-2 fs-1 mb-4">
            <li><i class="fab fa-angular"></i></li>
            <li><i class="fab fa-node-js"></i></li>
            <li><i class="fab fa-java"></i></li>
            <li><i class="fab fa-php"></i></li>
            <li><i class="fas fa-database"></i></li>
            <li><i class="fab fa-html5"></i></li>
            <li><i class="fab fa-css3-alt"></i></li>
            <li><i class="fab fa-js-square"></i></li>
            <li><i class="fab fa-python"></i></li>
        </ul>
        <div class="my-2"><?= $_thingies; ?></div>
        <ul class="row mb-4 w-100">
            <li><i class="fas fa-check"></i><?= $_thingies0; ?></li>
            <li><i class="fas fa-check"></i><?= $_thingies1; ?></li>
            <li><i class="fas fa-check"></i><?= $_thingies2; ?></li>
            <li><i class="fas fa-check"></i><?= $_thingies3; ?></li>
        </ul>
    </section>
    <section id="awards">
        <h2 class="text-uppercase mb-5 pb-5"><?= $_portfolio; ?></h2>
        <ul class="w-100">
            <li><i class="fas fa-trophy text-warning"></i><?= $_awards3; ?></li>
            <li><i class="fas fa-trophy text-warning"></i><?= $_awards2; ?></li>
            <li><i class="fas fa-trophy text-warning"></i><?= $_awards1; ?></li>
            <li><i class="fas fa-trophy text-warning"></i><?= $_awards0; ?></li>
        </ul>
    </section>
    <section id="experience">
        <h2 class="text-uppercase mb-5 pb-5"><?= $_experience; ?></h2>
        <ul class="w-100">
            <li class="d-flex flex-column flex-md-row mb-5">
                <div class="flex-grow-1">
                    <h4><i class="fas fa-check"></i><?= $_experiencepos0; ?></h4>
                    <span><i class="fas fa-building"></i><?= $_experienceent0; ?></span>
                    <p class="mb-0"><i class="fas fa-list-check"></i><?= $_experiencedesc0; ?></p>
                </div>
                <span class="ms-4 text-primary text-md-end"><i class="fas fa-clock"></i><?= $_experiencetime0; ?></span>
            </li>
        </ul>
    </section>
    <section id="education">
        <h2 class="text-uppercase mb-5 pb-5"><?= $_education; ?></h2>
        <ul class="w-100">
            <li class="d-flex flex-column flex-md-row mb-5">
                <div class="flex-grow-1">
                    <h4><i class="fas fa-building"></i><?= $_educationinst2; ?></h4>
                    <span><i class="fas fa-graduation-cap"></i><?= $_educationcarr2; ?></span>
                    <p class="mb-0"><i class="fas fa-list-check"></i><?= $_educationprog2; ?></p>
                </div>
                <span class="ms-4 text-primary text-md-end"><i class="fas fa-clock"></i><?= $_educationyear2; ?></span>
            </li>
            <li class="d-flex flex-column flex-md-row mb-5">
                <div class="flex-grow-1">
                    <h4><i class="fas fa-building"></i><?= $_educationinst1; ?></h4>
                    <span><i class="fas fa-graduation-cap"></i><?= $_educationcarr1; ?></span>
                    <p class="mb-0"><i class="fas fa-list-check"></i><?= $_educationprog1; ?></p>
                </div>
                <span class="ms-4 text-primary text-md-end"><i class="fas fa-clock"></i><?= $_educationyear1; ?></span>
            </li>
            <li class="d-flex flex-column flex-md-row mb-5">
                <div class="flex-grow-1">
                    <h4><i class="fas fa-building"></i><?= $_educationinst0; ?></h4>
                    <span><i class="fas fa-graduation-cap"></i><?= $_educationcarr0; ?></span>
                    <p class="mb-0"><i class="fas fa-list-check"></i><?= $_educationprog0; ?></p>
                </div>
                <span class="ms-4 text-primary text-md-end"><i class="fas fa-clock"></i><?= $_educationyear0; ?></span>
            </li>
        </ul>
    </section>
    <section id="contact">
        <h2 class="mb-5 pb-5"><?= $_chead; ?></h2>
        <ul class="row w-100 fs-5 mb-3">
            <li class="col-12 col-md-6 text-end">
                <a href="tel:<?= $_phone; ?>" target="_blank"><?= $_phone; ?></a>
                <i class="fas fa-phone"></i>
            </li>
            <li class="col-12 col-md-6 text-start">
                <i class="fas fa-envelope"></i>
                <a href="mailto:<?= $_mail; ?>" target="_blank"><?= $_mail; ?></a>
            </li>
        </ul>
        <!--form id="mail_form" name="mail_form" class="row w-100" action="javascript:;">
            <div class="col-12 col-md-6 p-2">
                <input type="text" id="mail_name" name="mail_name" class="form-control" placeholder="<?= $_name; ?>" required>
            </div>
            <div class="col-12 col-md-6 p-2">
                <input type="email" id="mail_email" name="mail_email" class="form-control" placeholder="<?= $_email; ?>" required>
            </div>
            <div class="col-12 col-md-6 p-2">
                <input type="tel" id="mail_phone" name="mail_phone" class="form-control" placeholder="<?= $_tphone; ?>">
            </div>
            <div class="col-12 col-md-6 p-2">
                <input type="text" id="mail_subject" name="mail_subject" class="form-control" placeholder="<?= $_subject; ?>" required>
            </div>
            <div class="col-12 p-2">
                <textarea id="mail_message" name="mail_message" rows="3" class="form-control" placeholder="<?= $_msg; ?>" required></textarea>
            </div>
            <div class="g-recaptcha col-12 col-md-6 p-2" id="mail_recaptcha" name="mail_recaptcha" data-sitekey="6LdBMSIaAAAAANG0gtgkpXUE0K5QS2nu0tJWC1Fm"></div>
            <div class="col-12 col-md-6 p-2">
                <button type="submit" class="btn btn-primary p-2o5 pr-5">
                    <i class="fas fa-paper-plane mr-2"></i><?= $_send; ?>
                    <div class="spinner-border" role="status" style="display:none;"></div>
                </button>
            </div>
        </!--form-->
    </section>
</div>
<!-- BODY -->
<script>
    "use strict";
    $(() => {
        document.title = "Marco Cortés";
        initCommon();
        if ($("#page-icon").length) $("#page-icon").attr("href", "<?= $HOME_PATH; ?>/v1.marco/img/favicon.png");
        if ($("#shortcut-icon").length) $("#shortcut-icon").attr("href", "<?= $HOME_PATH; ?>/v1.marco/img/favicon.png");
    });
</script>
<?php
// Always call due to /_var.php invoking ob_start();
ob_end_flush();
?>