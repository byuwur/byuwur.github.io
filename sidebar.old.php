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
      <div class="navbar-brand has-background-contain" role="img" aria-label="<?= htmlspecialchars($LANG["sidebar.logo_alt"], ENT_QUOTES, "UTF-8") ?>" style="height:48px;width:48px;background-image:url('<?= "{$HOME_PATH}/img/logo.png" ?>');"></div>
      <span class="ms-2 me-4 pe-5">[Mateus] byUwUr v1</span>
    </div>
    <a class="bywr-sidebar-option" href="#about" title="<?= htmlspecialchars($LANG["nav.about"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["nav.about"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-house"></i><span><?= $LANG["nav.about"] ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
    <a class="bywr-sidebar-option" href="#skills" title="<?= htmlspecialchars($LANG["nav.skills"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["nav.skills"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-screwdriver-wrench"></i><span><?= $LANG["nav.skills"] ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
    <a class="bywr-sidebar-option" href="#experience" title="<?= htmlspecialchars($LANG["nav.experience"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["nav.experience"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-briefcase"></i><span><?= $LANG["nav.experience"] ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
    <a class="bywr-sidebar-option" href="#education" title="<?= htmlspecialchars($LANG["nav.education"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["nav.education"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-graduation-cap"></i><span><?= $LANG["nav.education"] ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
    <a class="bywr-sidebar-option" href="#awards" title="<?= htmlspecialchars($LANG["nav.portfolio"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["nav.portfolio"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-folder-tree"></i><span><?= $LANG["nav.portfolio"] ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
    <a class="bywr-sidebar-option" href="#contact" title="<?= htmlspecialchars($LANG["nav.contact"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["nav.contact"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-envelope"></i><span><?= $LANG["nav.contact"] ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
  </div>
  <div class="bywr-sidebar-content accordion-item flex-grow-0">
    <div class="d-flex flex-row">
      <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_ES}" ?>" title="<?= htmlspecialchars($LANG["resume.es.title"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["resume.es.title"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-file-invoice"></i><img src="<?= "{$HOME_PATH}/img/co.svg" ?>" width="16px" height="12px" style="margin: 4px;" alt="<?= htmlspecialchars($LANG["resume.es.alt"], ENT_QUOTES, "UTF-8") ?>" /><span>HDV</span><i class="fas fa-download ms-auto"></i>
      </a>
      <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_EN}" ?>" title="<?= htmlspecialchars($LANG["resume.en.title"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["resume.en.title"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-file-invoice"></i><img src="<?= "{$HOME_PATH}/img/gb.svg" ?>" width="16px" height="12px" style="margin: 4px;" alt="<?= htmlspecialchars($LANG["resume.en.alt"], ENT_QUOTES, "UTF-8") ?>" /><span>CV</span><i class="fas fa-download ms-auto"></i>
      </a>
    </div>
    <button class="accordion-header accordion-button p-2o5 collapsed" data-bs-toggle="collapse" data-bs-target="#lang-drop" aria-expanded="false" aria-controls="lang-drop" title="<?= htmlspecialchars($LANG["language.selector"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["language.selector"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-earth-americas"></i><span><?= $LANG["language.selector"] ?></span>
    </button>
    <div id="lang-drop" class="accordion-collapse collapse bg-dark-transparent" data-bs-parent="#bywr-sidebar">
      <div class="d-flex flex-row">
        <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_V1}/{$ROUTE_ES}" ?>" title="<?= htmlspecialchars($LANG["language.spanish"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["language.spanish"], ENT_QUOTES, "UTF-8") ?>"><img src="<?= "{$HOME_PATH}/img/co.svg" ?>" width="16px" height="12px" style="margin: 4px;" alt="<?= htmlspecialchars($LANG["resume.es.alt"], ENT_QUOTES, "UTF-8") ?>" /> <?= $LANG["language.spanish"] ?><i class="fas fa-angle-right ms-auto"></i></a>
        <a class="bywr-sidebar-option" href="<?= "/{$ROUTE_V1}/{$ROUTE_EN}" ?>" title="<?= htmlspecialchars($LANG["language.english"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["language.english"], ENT_QUOTES, "UTF-8") ?>"><img src="<?= "{$HOME_PATH}/img/gb.svg" ?>" width="16px" height="12px" style="margin: 4px;" alt="<?= htmlspecialchars($LANG["resume.en.alt"], ENT_QUOTES, "UTF-8") ?>" /> <?= $LANG["language.english"] ?><i class="fas fa-angle-right ms-auto"></i></a>
      </div>
      <!--a class="bywr-sidebar-option" href="javascript:;"><i class="fas fa-home"></i>Home<i class="fas fa-angle-right ms-auto"></i></a-->
    </div>
    <a class="bywr-sidebar-option" href="<?= "/" ?>" title="<?= htmlspecialchars($LANG["view.modern.title"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["view.modern.title"], ENT_QUOTES, "UTF-8") ?>">
      <i class="fas fa-wand-magic-sparkles"></i><span><?= $LANG["view.modern.title"] ?></span><i class="fas fa-angle-right ms-auto"></i>
    </a>
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
