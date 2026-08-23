<?php
require_once "../_var.php";
require_once "{$TO_HOME}/spa.php/_common.php";
require_once "{$TO_HOME}/spa.php/_functions.php";
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
$LANG = [];
$work_id = filter_var($_GET["work"] ?? 0, FILTER_VALIDATE_INT);
if ($work_id === false) $work_id = 0;
if (file_exists("{$TO_HOME}/v0.mnm/lang/{$APP_LANG}.php")) {
	require_once "{$TO_HOME}/v0.mnm/lang/{$APP_LANG}.php";
	require_once "{$TO_HOME}/v0.mnm/lang/{$APP_LANG}_work-{$work_id}.php";
}
// Language fallbacks if lang is supported but file doesn't exist
$preferred_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"] ?? "es", 0, 2);
if (!$LANG && file_exists("{$TO_HOME}/v0.mnm/lang/{$preferred_lang}.php")) {
	require_once "{$TO_HOME}/v0.mnm/lang/{$preferred_lang}.php";
	require_once "{$TO_HOME}/v0.mnm/lang/{$preferred_lang}_work-{$work_id}.php";
}
if (!$LANG && file_exists("{$TO_HOME}/v0.mnm/lang/en.php")) {
	require_once "{$TO_HOME}/v0.mnm/lang/en.php";
	require_once "{$TO_HOME}/v0.mnm/lang/en_work-{$work_id}.php";
}
// ---
require_once "{$TO_HOME}/v0.mnm/common.head.php";
?>
<div id="mnm-main">
  <div class="mnm-work">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-md-pull-3">
          <span class="heading-meta"><?= escape_html($_portfolio) ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 sticky-parent">
          <div id="sticky_item">
            <h1 class="mnm-heading animate-box"><a href="<?= escape_html("/{$ROUTE_MNM}/{$ROUTE_MNM_PROJECTS}") ?>" class="btn btn-primary" style="margin: 0 25px 10px 0;"><?= escape_html($_back) ?></a>
              <font size="6"><?= escape_html($_wtitle) ?></font>
            </h1>
            <div class="project-desc" style="margin-top: 0.25em;">
              <h2 class="animate-box">
                <font size="5"><?= escape_html($_wsubtitle) ?></font>
              </h2>
              <span class="animate-box"><?= escape_html($_wkeywords) ?></span>
              <p class="animate-box">
                <font size="4"><?= escape_html($_wdesc) ?></font>
              </p>
              <p class="icon animate-box">
                <?= $_wyear ?>
                <?= $_wdevs ?>
                <?= $_winst ?>
              </p>
              <p><a target="_blank" href="<?= escape_html($_wlink) ?>" class="btn btn-primary animate-box" style="margin-bottom: 2.5em;"><?= escape_html($_wmore) ?></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 image-content">
          <img class="img-responsive" src="<?= escape_html("{$HOME_PATH}/img/v0/work-{$work_id}/1.jpg") ?>" alt="Image 1" />
          <img class="img-responsive" src="<?= escape_html("{$HOME_PATH}/img/v0/work-{$work_id}/2.jpg") ?>" alt="Image 2" />
          <img class="img-responsive" src="<?= escape_html("{$HOME_PATH}/img/v0/work-{$work_id}/3.jpg") ?>" alt="Image 3" />
          <img class="img-responsive" src="<?= escape_html("{$HOME_PATH}/img/v0/work-{$work_id}/4.jpg") ?>" alt="Image 4" />
        </div>
      </div>
    </div>
  </div>
  <?php require_once "{$TO_HOME}/v0.mnm/common.foot.php"; ?>
  <script>
    $(() => {
      document.title = <?= js_encode($_wtitle . " | MNM.team();") ?>;
      $("#li_work").addClass("mnm-active");
    });
  </script>
</div>
