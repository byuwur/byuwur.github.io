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
$typedSkills = [];
foreach ($LANG["skills.sections"] as $skillSection) 
  foreach ($skillSection["items"] as $skill) 
    $typedSkills[] = "<i class=\"{$skill["icon"]}\"></i> {$skill["text"]}";
?>
<link rel="stylesheet" href="<?= "{$HOME_PATH}/css/v2.css" ?>" />
<script src="<?= "{$HOME_PATH}/js/v2.js" ?>" defer></script>
<link id="themesheet" rel="stylesheet" href="<?= "{$HOME_PATH}/css/v2.{$APP_THEME}.css" ?>" />
<!-- BODY -->
<div class="app-container">
  <div class="social-icons">
    <a href="<?= $LANG["social.linkedin.url"] ?>" target="_blank" title="<?= htmlspecialchars($LANG["social.linkedin"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["social.linkedin"], ENT_QUOTES, "UTF-8") ?>"><i class="fab fa-linkedin"></i></a>
    <a href="<?= $LANG["social.github.url"] ?>" target="_blank" title="<?= htmlspecialchars($LANG["social.github"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["social.github"], ENT_QUOTES, "UTF-8") ?>"><i class="fab fa-github"></i></a>
    <a href="<?= $LANG["social.youtube.url"] ?>" target="_blank" title="<?= htmlspecialchars($LANG["social.youtube"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["social.youtube"], ENT_QUOTES, "UTF-8") ?>"><i class="fab fa-youtube"></i></a>
  </div>
  <section id="about" class="px-0">
    <div class="mb-3 px-4 text-center">
      <span class="text-uppercase text-center fs-1 fw-bold"><?= "{$LANG["hero.im"]} {$LANG["profile.name_top"]}" ?></span>
      <span class="text-uppercase"><?= $LANG["profile.full_name"] ?></span>
    </div>
    <span class="mb-5 text-center fs-5"><?= $LANG["hero.and_i"] . " " . $LANG["hero.in"] ?><br>✨<span id="typed" data-strings="<?= htmlspecialchars(json_encode($typedSkills, JSON_UNESCAPED_UNICODE), ENT_QUOTES, "UTF-8") ?>"></span>✨</span>
    <div class="row w-100">
      <?php foreach ($LANG["portfolio.items"] as $portfolio) { ?>
        <div class="col-md-6 col-xl-4 p-0 text-dark-shadow text-white <?= $portfolio["class"] ?>">
          <div class="project has-background-cover p-4" style="background-image: url(<?= "{$HOME_PATH}/{$portfolio["image"]}" ?>);">
            <h3 class="project-title"><?= $portfolio["title"] ?></h3>
            <div class="project-description p-4">
              <div class="flex-grow-1 d-flex flex-column">
                <h3><?= $portfolio["title"] ?></h3>
                <small><?= $portfolio["ent"] ?> (<?= $portfolio["year"] ?>)</small>
                <small class="fw-light"><?= $portfolio["desc"] ?></small>
              </div>
              <div class="flex-grow-0">
                <div class="mt-2">
                  <?php foreach ($portfolio["tech"] as $tech) { ?>
                    <span class="badge rounded-pill text-bg-dark"><i class="<?= $tech["icon"] ?> ps-0"></i><?= $tech["text"] ?></span>
                  <?php } ?>
                </div>
                <div class="mt-3">
                  <?php foreach ($portfolio["link"] as $link) { ?>
                    <a href="<?= $link["link"] ?>" target="_blank"><i class="<?= $link["icon"] ?>"></i><span><?= $link["text"] ?></span></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row mt-4 pt-4 px-4">
      <div class="col-sm-auto d-flex justify-content-center">
        <div class="has-background-contain rounded-circle mb-4" style="background-image:url('<?= "{$HOME_PATH}/img/profile.jpg" ?>');height:128px;width:128px;"></div>
      </div>
      <p class="col"><?= $LANG["about.description"] ?></p>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-center">
      <a class="a-lang" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_ES}" ?>" title="<?= htmlspecialchars($LANG["resume.es.title"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["resume.es.title"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-file-invoice"></i><img src="<?= "{$HOME_PATH}/img/co.svg" ?>" width="16px" height="12px" style="margin: 4px;" alt="<?= htmlspecialchars($LANG["resume.es.alt"], ENT_QUOTES, "UTF-8") ?>" /><span><?= $LANG["resume.es.title"] ?></span><i class="fas fa-download ms-auto"></i>
      </a>
      <a class="a-lang" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_EN}" ?>" title="<?= htmlspecialchars($LANG["resume.en.title"], ENT_QUOTES, "UTF-8") ?>" aria-label="<?= htmlspecialchars($LANG["resume.en.title"], ENT_QUOTES, "UTF-8") ?>">
        <i class="fas fa-file-invoice"></i><img src="<?= "{$HOME_PATH}/img/gb.svg" ?>" width="16px" height="12px" style="margin: 4px;" alt="<?= htmlspecialchars($LANG["resume.en.alt"], ENT_QUOTES, "UTF-8") ?>" /><span><?= $LANG["resume.en.title"] ?></span><i class="fas fa-download ms-auto"></i>
      </a>
    </div>
  </section>
  <section id="resume">
    <h2 class="text-uppercase mb-5 pb-5"><?= $LANG["nav.resume"] ?></h2>
    <div class="row w-100">
      <?php foreach ($LANG["skills.sections"] as $skillsection) { ?>
        <div class="skill-section col-12 mb-4">
          <h4 class="text-uppercase mb-2">
            <i class="<?= htmlspecialchars($skillsection["icon"], ENT_QUOTES, "UTF-8") ?>" aria-hidden="true"></i><?= htmlspecialchars($skillsection["title"], ENT_QUOTES, "UTF-8") ?>
          </h4>
          <ul class="d-flex flex-wrap gap-2 mb-0">
            <?php foreach ($skillsection["items"] as $skill) { ?>
              <li class="skill p-2 pb-0" data-bs-toggle="tooltip" data-bs-title="<?= htmlspecialchars($skill["years"], ENT_QUOTES, "UTF-8") . "+ " . htmlspecialchars($LANG["years"], ENT_QUOTES, "UTF-8")?>">
                <h4 class="m-0"><i class="<?= htmlspecialchars($skill["icon"], ENT_QUOTES, "UTF-8") ?>"></i><?= htmlspecialchars($skill["text"], ENT_QUOTES, "UTF-8") ?></h4>
                <div class="progress rounded-pill"><div class="progress-bar" style="width: <?= htmlspecialchars($skill["progress"], ENT_QUOTES, "UTF-8") ?>%"></div></div>
              </li>
            <?php } ?>
          </ul>
        </div>
      <?php } ?>
      <div class="resume-row col-md-6">
        <h4 class="text-uppercase"><i class="fas fa-briefcase"></i><?= $LANG["nav.experience"] ?></h4>
        <ul>
          <?php foreach ($LANG["experience.items"] as $experience) { ?>
            <li>
              <div class="resume-title p-2">
                <h4 class="m-0"><i class="fas fa-check"></i><?= $experience["pos"] ?></h4>
                <span class="mt-1"><i class="fas fa-building"></i><?= $experience["ent"] ?></span>
                <span class="text-primary text-md-end"><i class="fas fa-clock"></i><?= $experience["time"] ?></span>
              </div>
              <div class="p-2">
                <span class="m-0"><i class="fas fa-list-check"></i><?= $experience["desc"] ?></span>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
      <div class="resume-row col-md-6">
        <h4 class="text-uppercase"><i class="fas fa-graduation-cap"></i><?= $LANG["nav.education"] ?></h4>
        <ul>
          <?php foreach ($LANG["education.items"] as $education) { ?>
            <li>
              <div class="resume-title p-2">
                <h4 class="m-0"><i class="fas fa-graduation-cap"></i><?= $education["prog"] ?></h4>
                <span class="mt-1"><i class="fas fa-building"></i><?= $education["inst"] ?></span>
                <span class="text-primary text-md-end"><i class="fas fa-clock"></i><?= $education["year"] ?></span>
              </div>
              <div class="p-2">
                <span class="m-0"><i class="fas fa-list-check"></i><?= $education["prof"] ?></span>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </section>
  <section id="contact">
    <h2 class="text-uppercase"><?= $LANG["nav.contact"] ?></h2>
    <span class="mb-5 pb-5"><?= $LANG["contact.subtitle"] ?></span>
    <div class="row w-100">
      <div class="col-12 col-md-4 mb-3 ">
        <h5 class="col-12">Business Card! :]</h5>
        <iframe class="col-12" src="<?= "{$HOME_PATH}/card.v2.html" ?>" title="<?= htmlspecialchars($LANG["card.title"], ENT_QUOTES, "UTF-8") ?>" width="100%" height="128px" frameborder="0"></iframe>
      </div>
      <div class="col-12 col-md-4 mb-3 text-md-end">
        <i class="fab fa-linkedin d-md-none"></i>
        <a href="<?= $LANG["social.linkedin.url"] ?>" target="_blank">atrujillomateus</a>
        <i class="fab fa-linkedin d-none d-md-inline-block"></i>
      </div>
      <div class="col-12 col-md-4 mb-3">
        <i class="fas fa-envelope"></i>
        <a href="mailto:<?= $LANG["contact.mail"] ?>" target="_blank"><?= $LANG["contact.mail"] ?></a>
      </div>
      <div id="twitch" class="col-12"></div>
    </div>
  </section>
</div>
<!-- BODY -->
<script>
  "use strict";
  $(() => {
    document.title = <?= json_encode($LANG["title.default"]) ?>;
    byCommon.init();
    if ($("#page-icon").length) $("#page-icon").attr("href", "<?= "{$HOME_PATH}/img/favicon.png" ?>");
    if ($("#shortcut-icon").length) $("#shortcut-icon").attr("href", "<?= "{$HOME_PATH}/img/favicon.png" ?>");
    const twitchEmbedScript = document.createElement("script"),
      twitchEmbedOnLoad = () => {
        new Twitch.Embed("twitch", {
          width: "100%",
          height: 480,
          channel: "byuwur",
          allowfullscreen: false,
          autoplay: true,
          muted: true,
          theme: "dark",
          parent: ["byuwur.co"]
        });
      };
    twitchEmbedScript.src = "https://embed.twitch.tv/embed/v1.js";
    twitchEmbedScript.onload = twitchEmbedOnLoad;
    document.head.appendChild(twitchEmbedScript);
  });
</script>
<?php
while (ob_get_level() > 0) ob_end_flush();
?>
