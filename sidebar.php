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
  <div class="overlay" style="opacity:0.2;"></div>
  <div class="bywr-sidebar-content accordion-item flex-grow-1">
    <div class="bywr-sidebar-option p-2o5">
      <div class="navbar-brand has-background-contain" role="img" aria-label="<?= htmlspecialchars($LANG["sidebar.logo_alt"], ENT_QUOTES, "UTF-8") ?>" style="height:48px;width:48px;background-image:url('<?= "{$HOME_PATH}/img/logo.png" ?>');"></div>
      <span class="ms-2 me-4 pe-5">[Mateus] byUwUr</span>
    </div>
    <a class="bywr-sidebar-option" href="#about" title="<?= htmlspecialchars($LANG["nav.about"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["nav.about"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-house"></i><span><?= $LANG["nav.about"] ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
    <a class="bywr-sidebar-option" href="#resume" title="<?= htmlspecialchars($LANG["nav.resume"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["nav.resume"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-file-contract"></i><span><?= $LANG["nav.resume"] ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
    <a class="bywr-sidebar-option" href="#contact" title="<?= htmlspecialchars($LANG["nav.contact"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["nav.contact"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-paper-plane"></i><span><?= $LANG["nav.contact"] ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
  </div>
  <div class="bywr-sidebar-content accordion-item flex-grow-0">
    <button class="accordion-header accordion-button p-2o5 collapsed" data-bs-toggle="collapse" data-bs-target="#lang-drop" aria-expanded="false" aria-controls="lang-drop" title="<?= htmlspecialchars($LANG["language.selector"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["language.selector"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-earth-americas"></i><span><?= $LANG["language.selector"] ?></span>
    </button>
    <div id="lang-drop" class="accordion-collapse collapse bg-dark-transparent" data-bs-parent="#bywr-sidebar">
      <div class="d-flex flex-row">
        <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_ES}" ?>" title="<?= htmlspecialchars($LANG["language.spanish"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["language.spanish"], ENT_QUOTES, "UTF-8") ?>"><img src="<?= "{$HOME_PATH}/img/co.png" ?>" width="16px" height="12px" style="margin: 4px;" alt="<?= htmlspecialchars($LANG["resume.es.alt"], ENT_QUOTES, "UTF-8") ?>" /> <?= $LANG["language.spanish"] ?><i class="fas fa-angle-right ms-auto"></i></a>
        <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_EN}" ?>" title="<?= htmlspecialchars($LANG["language.english"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["language.english"], ENT_QUOTES, "UTF-8") ?>"><img src="<?= "{$HOME_PATH}/img/uk.png" ?>" width="16px" height="12px" style="margin: 4px;" alt="<?= htmlspecialchars($LANG["resume.en.alt"], ENT_QUOTES, "UTF-8") ?>" /> <?= $LANG["language.english"] ?><i class="fas fa-angle-right ms-auto"></i></a>
      </div>
    </div>
    <button class="accordion-header accordion-button p-2o5 collapsed" data-bs-toggle="collapse" data-bs-target="#theme-drop" aria-expanded="false" aria-controls="theme-drop" title="<?= htmlspecialchars($LANG["theme.selector"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["theme.selector"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-palette"></i><span><?= $LANG["theme.selector"] ?></span>
    </button>
    <div id="theme-drop" class="accordion-collapse collapse bg-dark-transparent" data-bs-parent="#bywr-sidebar">
      <div class="d-flex flex-row">
        <a class="bywr-sidebar-option" href="javascript:document.getElementById('themesheet').setAttribute('href','css/v2.light.css');set_cookie('theme','light');" role="button" title="<?= htmlspecialchars($LANG["theme.light.title"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["theme.light.title"], ENT_QUOTES, "UTF-8") ?>"><i class="fas fa-sun"></i><?= $LANG["theme.light"] ?><i class="fas fa-angle-right ms-auto"></i></a>
        <a class="bywr-sidebar-option" href="javascript:document.getElementById('themesheet').setAttribute('href','css/v2.dark.css');set_cookie('theme','dark');" role="button" title="<?= htmlspecialchars($LANG["theme.dark.title"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["theme.dark.title"], ENT_QUOTES, "UTF-8") ?>"><i class="fas fa-moon"></i><?= $LANG["theme.dark"] ?><i class="fas fa-angle-right ms-auto"></i></a>
      </div>
    </div>
    <p class="m-0 p-2 border-top" style="font-size: 0.75rem;"><?= $LANG["footer.html"] ?></p>
  </div>
  <a id="bywr-sidebar-toggle" class="bywr-sidebar-toggle" href="javascript:;" title="<?= htmlspecialchars($LANG["sidebar.toggle"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["sidebar.toggle"], ENT_QUOTES, "UTF-8") ?>" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($LANG["sidebar.toggle"], ENT_QUOTES, "UTF-8") ?>"><i class="fas fa-bars"></i><span><?= $LANG["sidebar.menu"] ?></span></a>
  <div id="bywr-sidebar-hidden" class="bywr-sidebar-hidden">
    <div class="navbar-brand has-background-contain mt-auto" role="img" aria-label="<?= htmlspecialchars($LANG["sidebar.logo_alt"], ENT_QUOTES, "UTF-8") ?>" style="height:48px;width:48px;background-image:url('<?= "{$HOME_PATH}/img/logo.png" ?>');"></div>
  </div>
</nav>
<?php
while (ob_get_level() > 0) ob_end_flush();
?>
