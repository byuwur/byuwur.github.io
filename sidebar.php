<?php
require_once "./_init.php";
require_once "{$TO_HOME}/spa.php/_functions.php";
require_once "{$TO_HOME}/spa.php/_common.php";
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
  <div class="overlay-inverted" style="opacity:0.25;"></div>
  <div class="bywr-sidebar-content accordion-item flex-grow-1">
    <div class="bywr-sidebar-option p-2o5">
      <div class="navbar-brand has-background-contain" role="img" aria-label="<?= escape_html($LANG["sidebar.logo_alt"]) ?>"
        style="height:48px;width:48px;background-image:url('<?= "{$HOME_PATH}/img/logo.png" ?>');"></div>
      <span class="ms-2 me-4 pe-5">[Mateus] byUwUr</span>
    </div>
    <a class="bywr-sidebar-option" href="#about" title="<?= escape_html($LANG["nav.about"]) ?>" aria-label="<?= escape_html($LANG["nav.about"]) ?>">
      <i class="fas fa-house"></i><span><?= escape_html($LANG["nav.about"]) ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
    <a class="bywr-sidebar-option" href="#resume" title="<?= escape_html($LANG["nav.resume"]) ?>" aria-label="<?= escape_html($LANG["nav.resume"]) ?>">
      <i class="fas fa-file-contract"></i><span><?= escape_html($LANG["nav.resume"]) ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
    <a class="bywr-sidebar-option" href="#contact" title="<?= escape_html($LANG["nav.contact"]) ?>" aria-label="<?= escape_html($LANG["nav.contact"]) ?>">
      <i class="fas fa-paper-plane"></i><span><?= escape_html($LANG["nav.contact"]) ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
  </div>
  <div class="bywr-sidebar-content accordion-item flex-grow-0">
    <!--button class="accordion-header accordion-button p-2o5 collapsed" data-bs-toggle="collapse" data-bs-target="#lang-drop" aria-expanded="false" aria-controls="lang-drop"
      title="<?= escape_html($LANG["language.selector"]) ?>" aria-label="<?= escape_html($LANG["language.selector"]) ?>">
      <i class="fas fa-earth-americas"></i><span><?= escape_html($LANG["language.selector"]) ?></span>
    </button>
    <div id="lang-drop" class="accordion-collapse collapse bg-dark-transparent" data-bs-parent="#bywr-sidebar">
    </div-->
    <div class="d-flex flex-row">
      <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_ES}" ?>" title="<?= escape_html($LANG["language.spanish"]) ?>" aria-label="<?= escape_html($LANG["language.spanish"]) ?>"><img
          class="inline-logo" src="<?= "{$HOME_PATH}/img/co.svg" ?>" alt="<?= escape_html($LANG["resume.es.alt"]) ?>" /> <?= escape_html($LANG["language.spanish"]) ?><i class="fas fa-angle-right ms-auto"></i></a>
      <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_EN}" ?>" title="<?= escape_html($LANG["language.english"]) ?>" aria-label="<?= escape_html($LANG["language.english"]) ?>"><img
          class="inline-logo" src="<?= "{$HOME_PATH}/img/gb.svg" ?>" alt="<?= escape_html($LANG["resume.en.alt"]) ?>" /> <?= escape_html($LANG["language.english"]) ?><i class="fas fa-angle-right ms-auto"></i></a>
    </div>
    <!--button class="accordion-header accordion-button p-2o5 collapsed" data-bs-toggle="collapse" data-bs-target="#theme-drop" aria-expanded="false" aria-controls="theme-drop"
      title="<?= escape_html($LANG["theme.selector"]) ?>" aria-label="<?= escape_html($LANG["theme.selector"]) ?>">
      <i class="fas fa-palette"></i><span><?= escape_html($LANG["theme.selector"]) ?></span>
    </button>
    <div id="theme-drop" class="accordion-collapse collapse bg-dark-transparent" data-bs-parent="#bywr-sidebar">
    </div-->
    <div class="d-flex flex-row">
      <a class="bywr-sidebar-option" href="javascript:document.getElementById('themesheet').setAttribute('href','css/v2.light.css');set_cookie('theme','light');" role="button"
        title="<?= escape_html($LANG["theme.light.title"]) ?>" aria-label="<?= escape_html($LANG["theme.light.title"]) ?>"><i class="fas fa-sun"></i><?= escape_html($LANG["theme.light"]) ?><i
          class="fas fa-angle-right ms-auto"></i></a>
      <a class="bywr-sidebar-option" href="javascript:document.getElementById('themesheet').setAttribute('href','css/v2.dark.css');set_cookie('theme','dark');" role="button"
        title="<?= escape_html($LANG["theme.dark.title"]) ?>" aria-label="<?= escape_html($LANG["theme.dark.title"]) ?>"><i class="fas fa-moon"></i><?= escape_html($LANG["theme.dark"]) ?><i
          class="fas fa-angle-right ms-auto"></i></a>
    </div>
    <p class="m-0 p-2 border-top" style="font-size: 0.75rem;"><?= $LANG["footer.html"] ?></p>
  </div>
  <a id="bywr-sidebar-toggle" class="bywr-sidebar-toggle" href="javascript:;" title="<?= escape_html($LANG["sidebar.toggle"]) ?>" aria-label="<?= escape_html($LANG["sidebar.toggle"]) ?>"
    data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["sidebar.toggle"]) ?>"><i class="fas fa-bars"></i><span><?= escape_html($LANG["sidebar.menu"]) ?></span></a>
  <div id="bywr-sidebar-hidden" class="bywr-sidebar-hidden">
    <div class="navbar-brand has-background-contain mt-auto" role="img" aria-label="<?= escape_html($LANG["sidebar.logo_alt"]) ?>"
      style="height:48px;width:48px;background-image:url('<?= "{$HOME_PATH}/img/logo.png" ?>');"></div>
  </div>
</nav>
<?php
while (ob_get_level() > 0)
  ob_end_flush();
?>