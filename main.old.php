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
      <h1 class="text-uppercase text-center"><?= $LANG["profile.name_top"] ?></h1>
      <span class="text-uppercase mb-5"><?= $LANG["profile.full_name"] ?></span>
      <div class="row mt-4 pt-4">
        <div class="col-sm-auto d-flex justify-content-center">
          <div class="has-background-contain rounded-circle mb-4" style="background-image:url('<?= "{$HOME_PATH}/img/profile.jpg" ?>');height:128px;width:128px;"></div>
        </div>
        <p class="col"><?= $LANG["about.description"] ?></p>
      </div>
      <div class="social-icons mt-4">
        <a href="<?= $LANG["social.linkedin.url"] ?>" target="_blank" title="<?= htmlspecialchars($LANG["social.linkedin"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["social.linkedin"], ENT_QUOTES, "UTF-8") ?>"><i class="fab fa-linkedin"></i></a>
        <a href="<?= $LANG["social.github.url"] ?>" target="_blank" title="<?= htmlspecialchars($LANG["social.github"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["social.github"], ENT_QUOTES, "UTF-8") ?>"><i class="fab fa-github"></i></a>
        <a href="<?= $LANG["social.youtube.url"] ?>" target="_blank" title="<?= htmlspecialchars($LANG["social.youtube"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["social.youtube"], ENT_QUOTES, "UTF-8") ?>"><i class="fab fa-youtube"></i></a>
      </div>
      <div class="mt-4 d-flex flex-column flex-sm-row">
        <a class="a-lang" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_ES}" ?>" target="_blank" title="<?= htmlspecialchars($LANG["resume.es.title"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["resume.es.title"], ENT_QUOTES, "UTF-8") ?>">
          <i class="fas fa-file-invoice"></i><span><?= $LANG["resume.es.title"] ?></span><i class="fas fa-download ms-auto"></i>
        </a>
        <a class="a-lang" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_EN}" ?>" target="_blank" title="<?= htmlspecialchars($LANG["resume.en.title"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["resume.en.title"], ENT_QUOTES, "UTF-8") ?>">
          <i class="fas fa-file-invoice"></i><span><?= $LANG["resume.en.title"] ?></span><i class="fas fa-download ms-auto"></i>
        </a>

      </div>
      <div class="row mt-4">
        <div class="col-12 col-md-5">
          <h6><?= $LANG["card.title"] ?> v2 :]</h6>
          <iframe src="<?= "{$HOME_PATH}/card.v2.html" ?>" title="<?= htmlspecialchars($LANG["card.title"], ENT_QUOTES, "UTF-8") ?> v2" width="100%" height="128px" frameborder="0"></iframe>
        </div>
        <div class="col-12 col-md-7">
          <h6><?= $LANG["card.title"] ?> v1 :)</h6>
          <iframe src="<?= "{$HOME_PATH}/card.v1.html" ?>" title="<?= htmlspecialchars($LANG["card.title"], ENT_QUOTES, "UTF-8") ?> v1" width="100%" height="128px" frameborder="0"></iframe>
        </div>
      </div>
    </section>
    <section id="skills">
      <h2 class="text-uppercase mb-5 pb-3"><?= $LANG["nav.skills"] ?></h2>
      <div class="my-4"><?= $LANG["skills.code.title"] ?></div>
      <ul class="d-flex flex-row flex-wrap gap-2 fs-1 mb-4">
        <?php foreach ($LANG["skills.code.items"] as $codeskill) { ?>
          <li><i class="<?= $codeskill["icon"] ?>" data-bs-toggle="tooltip" data-bs-title="<?= "{$codeskill["text"]} = {$codeskill["level"]}" ?>"></i></li>
        <?php } ?>
      </ul>
      <div class="my-2"><?= $LANG["skills.software.title"] ?></div>
      <ul class="row mb-4 w-100">
        <?php foreach ($LANG["skills.software.items"] as $otherskill) { ?>
          <li class="col-12 col-md-6"><i class="<?= $otherskill["icon"] ?>"></i><?= "{$otherskill["text"]} = {$otherskill["level"]}" ?></li>
        <?php } ?>
      </ul>
      <div class="my-2"><?= $LANG["skills.other.title"] ?></div>
      <ul class="row mb-4 w-100">
        <?php foreach ($LANG["skills.other.items"] as $thingy) { ?>
          <li class="col-12 col-md-6"><i class="fas fa-check"></i><?= $thingy ?></li>
        <?php } ?>
      </ul>
    </section>
    <section id="experience">
      <h2 class="text-uppercase mb-5 pb-5"><?= $LANG["nav.experience"] ?></h2>
      <ul class="w-100">
        <?php foreach ($LANG["experience.items"] as $experience) { ?>
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
      <h2 class="text-uppercase mb-5 pb-5"><?= $LANG["nav.education"] ?></h2>
      <ul class="w-100">
        <?php foreach ($LANG["education.items"] as $education) { ?>
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
      <h2 class="text-uppercase mb-5 pb-5"><?= $LANG["nav.portfolio"] ?></h2>
      <ul class="w-100">
        <?php foreach ($LANG["portfolio.items"] as $portfolio) { ?>
          <li><a href="<?= "/" ?>"><i class="fas fa-trophy"></i><?= "{$portfolio["title"]}, {$portfolio["year"]}. {$portfolio["ent"]}" ?></a></li>
        <?php } ?>
      </ul>
    </section>
    <section id="contact">
      <h2 class="text-uppercase mb-5 pb-5"><?= $LANG["nav.contact"] ?></h2>
      <ul class="row w-100 fs-5 mb-3">
        <li class="col-12 col-md-6 text-end">
          <a href="<?= $LANG["social.linkedin.url"] ?>" target="_blank">atrujillomateus</a>
          <i class="fab fa-linkedin"></i>
        </li>
        <li class="col-12 col-md-6 text-start">
          <i class="fas fa-envelope"></i>
          <a href="mailto:<?= $LANG["contact.mail"] ?>" target="_blank"><?= $LANG["contact.mail"] ?></a>
        </li>
      </ul>
      <?= $LANG["contact.goto_mnm.html"] ?>
    </section>
  </div>
</div>
<!-- BODY -->
<script>
  "use strict";
  $(() => {
    document.title = <?= json_encode($LANG["title.default"] . " [v1]") ?>;
    byCommon.init();
    if ($("#page-icon").length) $("#page-icon").attr("href", "<?= "{$HOME_PATH}/img/favicon.png" ?>");
    if ($("#shortcut-icon").length) $("#shortcut-icon").attr("href", "<?= "{$HOME_PATH}/img/favicon.png" ?>");
  });
</script>
<?php
while (ob_get_level() > 0) ob_end_flush();
?>
