<?php
require_once "./_var.php";
require_once "{$TO_HOME}/spa.php/_common.php";
//require_once "{$TO_HOME}/spa.php/_functions.php";
//require_once "{$TO_HOME}/_functions.php";
//require_once "{$TO_HOME}/spa.php/_plugins.php";
//require_once "{$TO_HOME}/_plugins.php";
//require_once "{$TO_HOME}/_config.php";
require_once "{$TO_HOME}/_routes.php";
//require_once "{$TO_HOME}/spa.php/_router.php";
//require_once "{$TO_HOME}/spa.php/_auth.php";
//require_once "{$TO_HOME}/_auth.php";
require_once "{$TO_HOME}/_common.php";
// --- PHP ---
?>
<link rel="stylesheet" href="<?= "{$HOME_PATH}/css/v1.css" ?>" />
<script src="<?= "{$HOME_PATH}/js/v1.js" ?>" defer></script>
<!-- BODY -->
<div class="app-container">
    <div class="container">
        <section id="about">
            <h1 class="text-uppercase text-center"><?= $_name_top ?></h1>
            <span class="text-uppercase mb-5"><?= $_nombre ?></span>
            <div class="row mt-4 pt-4">
                <div class="col-sm-auto d-flex justify-content-center">
                    <div class="has-background-contain rounded-circle mb-4" style="background-image:url('<?= "{$HOME_PATH}/img/profile.jpg" ?>');height:128px;width:128px;"></div>
                </div>
                <p class="col"><?= $_about ?></p>
            </div>
            <div class="social-icons mt-4">
                <a href="<?= $_linkedin ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="<?= $_github ?>" target="_blank"><i class="fab fa-github"></i></a>
                <a href="<?= $_youtube ?>" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="mt-4 d-flex flex-column flex-sm-row">
                <a class="a-lang" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_ES}" ?>" target="_blank">
                    <i class="fas fa-file-invoice"></i><span>Résumé en Español</span><i class="fas fa-download ms-auto"></i>
                </a>
                <a class="a-lang" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_EN}" ?>" target="_blank">
                    <i class="fas fa-file-invoice"></i><span>Résumé in English</span><i class="fas fa-download ms-auto"></i>
                </a>

            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-5">
                    <h6>Digital Business Card v2 :]</h6>
                    <iframe src="<?= "{$HOME_PATH}/card.v2.html" ?>" title="Digital Business Card v2" width="100%" height="128px" frameborder="0"></iframe>
                </div>
                <div class="col-12 col-md-7">
                    <h6>Digital Business Card v1 :)</h6>
                    <iframe src="<?= "{$HOME_PATH}/card.v1.html" ?>" title="Digital Business Card v1" width="100%" height="128px" frameborder="0"></iframe>
                </div>
            </div>
        </section>
        <section id="skills">
            <h2 class="text-uppercase mb-5 pb-3"><?= $_skills ?></h2>
            <div class="my-4"><?= $_codes ?></div>
            <ul class="d-flex flex-row flex-wrap gap-2 fs-1 mb-4">
                <?php foreach ($_codeskills as $codeskill) { ?>
                    <li><i class="<?= $codeskill["icon"] ?>" data-bs-toggle="tooltip" data-bs-title="<?= "{$codeskill["text"]} = {$codeskill["level"]}" ?>"></i></li>
                <?php } ?>
            </ul>
            <div class="my-2">Software:</div>
            <ul class="row mb-4 w-100">
                <?php foreach ($_otherskills as $otherskill) { ?>
                    <li class="col-12 col-md-6"><i class="<?= $otherskill["icon"] ?>"></i><?= "{$otherskill["text"]} = {$otherskill["level"]}" ?></li>
                <?php } ?>
            </ul>
            <div class="my-2"><?= $_things ?></div>
            <ul class="row mb-4 w-100">
                <?php foreach ($_thingies as $thingy) { ?>
                    <li class="col-12 col-md-6"><i class="fas fa-check"></i><?= $thingy ?></li>
                <?php } ?>
            </ul>
        </section>
        <section id="experience">
            <h2 class="text-uppercase mb-5 pb-5"><?= $_experience ?></h2>
            <ul class="w-100">
                <?php foreach ($_experiences as $experience) { ?>
                    <li class="d-flex flex-column flex-md-row mb-5">
                        <div class="flex-grow-1">
                            <h4><i class="fas fa-check"></i><?= $experience["pos"] ?></h4>
                            <span><i class="fas fa-building"></i><?= $experience["ent"] ?></span>
                            <p class="mb-0"><i class="fas fa-list-check"></i><?= $experience["desc"] ?></p>
                        </div>
                        <span class="ms-4 text-primary text-md-end"><i class="fas fa-clock"></i><?= $experience["time"] ?></span>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <section id="education">
            <h2 class="text-uppercase mb-5 pb-5"><?= $_education ?></h2>
            <ul class="w-100">
                <?php foreach ($_educations as $education) { ?>
                    <li class="d-flex flex-column flex-md-row mb-5">
                        <div class="flex-grow-1">
                            <h4><i class="fas fa-graduation-cap"></i><?= $education["prog"] ?></h4>
                            <span><i class="fas fa-building"></i><?= $education["inst"] ?></span>
                            <p class="mb-0"><i class="fas fa-list-check"></i><?= $education["prof"] ?></p>
                        </div>
                        <span class="ms-4 text-primary text-md-end"><i class="fas fa-clock"></i><?= $education["year"] ?></span>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <section id="awards">
            <h2 class="text-uppercase mb-5 pb-5"><?= $_portfolio ?></h2>
            <ul class="w-100">
                <?php foreach ($_portfolios as $portfolio) { ?>
                    <li><a href="<?= "/" ?>"><i class="fas fa-trophy"></i><?= "{$portfolio["title"]}, {$portfolio["year"]}. {$portfolio["ent"]}" ?></a></li>
                <?php } ?>
            </ul>
        </section>
        <section id="contact">
            <h2 class="text-uppercase mb-5 pb-5"><?= $_contact ?></h2>
            <ul class="row w-100 fs-5 mb-3">
                <li class="col-12 col-md-6 text-end">
                    <a href="<?= $_linkedin ?>" target="_blank">atrujillomateus</a>
                    <i class="fab fa-linkedin"></i>
                </li>
                <li class="col-12 col-md-6 text-start">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?= $_mail ?>" target="_blank"><?= $_mail ?></a>
                </li>
            </ul>
            <?= $_goto ?>
        </section>
    </div>
</div>
<!-- BODY -->
<script>
    "use strict";
    $(() => {
        document.title = "[Mateus] byUwUr — <?= $_andim ?> [v1]";
        byCommon.init();
        if ($("#page-icon").length) $("#page-icon").attr("href", "<?= "{$HOME_PATH}/img/favicon.png" ?>");
        if ($("#shortcut-icon").length) $("#shortcut-icon").attr("href", "<?= "{$HOME_PATH}/img/favicon.png" ?>");
    });
</script>
<?php
// Always call due to /_var.php invoking ob_start();
ob_end_flush();
?>