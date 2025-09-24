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
<nav id="bywr-sidebar" class="bywr-sidebar accordion bywr-accordion bg-dark-transparent bg-blurred text-white">
    <div class="overlay"></div>
    <div class="bywr-sidebar-content accordion-item flex-grow-1">
        <div class="bywr-sidebar-option p-2o5">
            <div class="navbar-brand has-background-contain" style="height:48px;width:48px;background-image:url('<?= "{$HOME_PATH}/img/logo.png" ?>');"></div>
            <span class="ms-2 me-4 pe-5">[Mateus] byUwUr v1</span>
        </div>
        <a class="bywr-sidebar-option" href="#about">
            <i class="fas fa-house"></i><span><?= $_helloworld ?></span><i class="fas fa-angle-right ms-auto"></i>
        </a>
        <a class="bywr-sidebar-option" href="#skills">
            <i class="fas fa-screwdriver-wrench"></i><span><?= $_skills ?></span><i class="fas fa-angle-right ms-auto"></i>
        </a>
        <a class="bywr-sidebar-option" href="#experience">
            <i class="fas fa-briefcase"></i><span><?= $_experience ?></span><i class="fas fa-angle-right ms-auto"></i>
        </a>
        <a class="bywr-sidebar-option" href="#education">
            <i class="fas fa-graduation-cap"></i><span><?= $_education ?></span><i class="fas fa-angle-right ms-auto"></i>
        </a>
        <a class="bywr-sidebar-option" href="#awards">
            <i class="fas fa-folder-tree"></i><span><?= $_portfolio ?></span><i class="fas fa-angle-right ms-auto"></i>
        </a>
        <a class="bywr-sidebar-option" href="#contact">
            <i class="fas fa-envelope"></i><span><?= $_contact ?></span><i class="fas fa-angle-right ms-auto"></i>
        </a>
    </div>
    <div class="bywr-sidebar-content accordion-item flex-grow-0">
        <div class="d-flex flex-row">
            <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_ES}" ?>">
                <i class="fas fa-file-invoice"></i><img src="img/co.png" width="16px" height="12px" style="margin: 4px;" alt="" /><span>HDV</span><i class="fas fa-download ms-auto"></i>
            </a>
            <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_EN}" ?>">
                <i class="fas fa-file-invoice"></i><img src="img/uk.png" width="16px" height="12px" style="margin: 4px;" alt="" /><span>CV</span><i class="fas fa-download ms-auto"></i>
            </a>
        </div>
        <button class="accordion-header accordion-button p-2o5 collapsed" data-bs-toggle="collapse" data-bs-target="#lang-drop" aria-expanded="false" aria-controls="lang-drop">
            <i class="fas fa-earth-americas"></i><span><?= $_langs ?></span>
        </button>
        <div id="lang-drop" class="accordion-collapse collapse bg-dark-transparent" data-bs-parent="#bywr-sidebar">
            <div class="d-flex flex-row">
                <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_V1}/{$ROUTE_ES}" ?>" title="Español"><img src="<?= "{$HOME_PATH}/img/co.png" ?>" width="16px" height="12px" style="margin: 4px;" alt="" /> ESPAÑOL<i class="fas fa-angle-right ms-auto"></i></a>
                <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_V1}/{$ROUTE_EN}" ?>" title="English"><img src="<?= "{$HOME_PATH}/img/uk.png" ?>" width="16px" height="12px" style="margin: 4px;" alt="" /> ENGLISH<i class="fas fa-angle-right ms-auto"></i></a>
            </div>
            <!--a class="bywr-sidebar-option" href="javascript:;"><i class="fas fa-home"></i>Home<i class="fas fa-angle-right ms-auto"></i></a-->
        </div>
        <a class="bywr-sidebar-option" href="<?= "/" ?>">
            <i class="fas fa-wand-magic-sparkles"></i><span><?= $_new ?> (v2)</span><i class="fas fa-angle-right ms-auto"></i>
        </a>
        <p class="m-0 p-2 border-top" style="font-size: 0.75rem;"><?= $_footer ?></p>
    </div>
    <a id="bywr-sidebar-toggle" class="bywr-sidebar-toggle" href="javascript:;" title="Alternar menu lateral"><i class="fas fa-bars"></i><span>menu</span></a>
    <div id="bywr-sidebar-hidden" class="bywr-sidebar-hidden">
        <div class="navbar-brand has-background-contain mt-auto" style="height:48px;width:48px;background-image:url('<?= "{$HOME_PATH}/img/logo.png" ?>');"></div>
    </div>
</nav>
<?php
// Progressive output by calling ob_flush(); flush();
while (ob_get_level() > 0) ob_end_flush();
?>