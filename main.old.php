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
<link rel="stylesheet" href="<?= $HOME_PATH; ?>/css/v1.css" />
<script src="<?= $HOME_PATH; ?>/js/v1.js" defer></script>
<script>
    localStorage.setItem("APP_LANG", "<?= $app_lang; ?>");
    localStorage.setItem("APP_THEME", "<?= $app_theme; ?>");
</script>
<!-- BODY -->
<div class="app-container">
    <div class="container">
        <section id="about">
            <h1 class="text-uppercase text-center"><?= $_name_top; ?></h1>
            <span class="text-uppercase mb-5"><?= $_nombre; ?></span>
            <p class="mt-4 pt-4"><?= $_about; ?></p>
            <div class="social-icons mt-4">
                <a href="<?= $_linkedin; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="<?= $_youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="<?= $_github; ?>" target="_blank"><i class="fab fa-github"></i></a>
                <a href="<?= $_facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="<?= $_instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="<?= $_twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="mt-4 d-flex flex-column flex-sm-row">
                <a class="a-lang" href="<?= $ROOT_ROUTE; ?>resume.es" target="_blank">
                    <i class="fas fa-file-invoice"></i><span>Resume en Español</span><i class="fas fa-download ms-auto"></i>
                </a>
                <a class="a-lang" href="<?= $ROOT_ROUTE; ?>resume.en" target="_blank">
                    <i class="fas fa-file-invoice"></i><span>Resume in English</span><i class="fas fa-download ms-auto"></i>
                </a>

            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-5">
                    <h6>Digital Business Card v2</h6>
                    <iframe src="<?= $HOME_PATH; ?>/card.v2.html" title="Digital Business Card v2" width="100%" height="135px" frameborder="0"></iframe>
                </div>
                <div class="col-12 col-md-7">
                    <h6>Digital Business Card v1</h6>
                    <iframe src="<?= $HOME_PATH; ?>/card.v1.html" title="Digital Business Card v1" width="100%" height="110px" frameborder="0"></iframe>
                </div>
            </div>
        </section>
        <section id="skills">
            <h2 class="text-uppercase mb-5 pb-3"><?= $_skills; ?></h2>
            <div class="my-4"><?= $_languages; ?></div>
            <ul class="d-flex flex-row flex-wrap gap-2 fs-1 mb-4">
                <?php for ($i = 0; $i < count($_codeskillicon); $i++) { ?>
                    <li><i class="<?= $_codeskillicon[$i]; ?>"></i></li>
                <?php } ?>
            </ul>
            <div class="my-2">SOFTWARE:</div>
            <ul class="row mb-4 w-100">
                <?php for ($i = 0; $i < count($_otherskilltext); $i++) { ?>
                    <li class="col-12 col-md-6"><i class="<?= $_otherskillicon[$i]; ?>"></i><?= $_otherskilltext[$i] . " = " . $_otherskilllevel[$i]; ?></li>
                <?php } ?>
            </ul>
            <div class="my-2"><?= $_things; ?></div>
            <ul class="row mb-4 w-100">
                <?php for ($i = 0; $i < count($_thingies); $i++) { ?>
                    <li class="col-12 col-md-6"><i class="fas fa-check"></i><?= $_thingies[$i]; ?></li>
                <?php } ?>
            </ul>
        </section>
        <section id="awards">
            <h2 class="text-uppercase mb-5 pb-5"><?= $_portfolio; ?></h2>
            <ul class="w-100">
                <?php for ($i = 0; $i < count($_portafolio); $i++) { ?>
                    <li><i class="fas fa-trophy"></i><?= $_portafolio[$i]; ?></li>
                <?php } ?>
            </ul>
        </section>
        <section id="experience">
            <h2 class="text-uppercase mb-5 pb-5"><?= $_experience; ?></h2>
            <ul class="w-100">
                <?php for ($i = 0; $i < count($_experiencepos); $i++) { ?>
                    <li class="d-flex flex-column flex-md-row mb-5">
                        <div class="flex-grow-1">
                            <h4><i class="fas fa-check"></i><?= $_experiencepos[$i]; ?></h4>
                            <span><i class="fas fa-building"></i><?= $_experienceent[$i]; ?></span>
                            <p class="mb-0"><i class="fas fa-list-check"></i><?= $_experiencedesc[$i]; ?></p>
                        </div>
                        <span class="ms-4 text-primary text-md-end"><i class="fas fa-clock"></i><?= $_experiencetime[$i]; ?></span>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <section id="education">
            <h2 class="text-uppercase mb-5 pb-5"><?= $_education; ?></h2>
            <ul class="w-100">
                <?php for ($i = 0; $i < count($_educationprog); $i++) { ?>
                    <li class="d-flex flex-column flex-md-row mb-5">
                        <div class="flex-grow-1">
                            <h4><i class="fas fa-graduation-cap"></i><?= $_educationprog[$i]; ?></h4>
                            <span><i class="fas fa-building"></i><?= $_educationinst[$i]; ?></span>
                            <p class="mb-0"><i class="fas fa-list-check"></i><?= $_educationprof[$i]; ?></p>
                        </div>
                        <span class="ms-4 text-primary text-md-end"><i class="fas fa-clock"></i><?= $_educationyear[$i]; ?></span>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <section id="contact">
            <h2 class="mb-5 pb-5"><?= $_chead; ?></h2>
            <ul class="row w-100 fs-5 mb-3">
                <li class="col-12 col-md-6 text-end">
                    <a href="<?= $_linkedin; ?>" target="_blank">atrujillomateus</a>
                    <i class="fab fa-linkedin"></i>
                </li>
                <li class="col-12 col-md-6 text-start">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?= $_mail; ?>" target="_blank"><?= $_mail; ?></a>
                </li>
            </ul>
        </section>
        <section id="interest">
            <h2 class="mb-5 pb-5"><?= $_interest; ?></h2>
            <div class="has-background-contain w-100 mb-4" style="background-image:url(<?= $HOME_PATH; ?>/img/profile.jpg);height:192px"></div>
            <p><?= $_interesting; ?></p>
            <?= $_goto; ?>
        </section>
    </div>
</div>
<!-- BODY -->
<script>
    "use strict";
    $(() => {
        document.title = "[Mateus] byUwUr v1";
        byCommon.init();
        if ($("#page-icon").length) $("#page-icon").attr("href", "<?= $HOME_PATH; ?>/img/favicon.png");
        if ($("#shortcut-icon").length) $("#shortcut-icon").attr("href", "<?= $HOME_PATH; ?>/img/favicon.png");
    });
</script>
<?php
// Always call due to /_var.php invoking ob_start();
ob_end_flush();
?>