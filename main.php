<?php
require_once "./_var.php";
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
  <div class="social-icons light-links">
    <a href="<?= $LANG["social.linkedin.url"] ?>" target="_blank" title="<?= escape_html($LANG["social.linkedin"], false) ?>" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["social.linkedin"], false) ?>"
      aria-label="<?= escape_html($LANG["social.linkedin"], false) ?>">
      <i class="fab fa-linkedin"></i>
    </a>
    <a href="<?= $LANG["social.github.url"] ?>" target="_blank" title="<?= escape_html($LANG["social.github"], false) ?>" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["social.github"], false) ?>"
      aria-label="<?= escape_html($LANG["social.github"], false) ?>">
      <i class="fab fa-github"></i>
    </a>
    <a href="<?= $LANG["social.youtube.url"] ?>" target="_blank" title="<?= escape_html($LANG["social.youtube"], false) ?>" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($LANG["social.youtube"], false) ?>"
      aria-label="<?= escape_html($LANG["social.youtube"], false) ?>">
      <i class="fab fa-youtube"></i>
    </a>
  </div>
  <section id="about" class="px-0">
    <div class="mb-4 px-4 text-center">
      <span class="text-uppercase text-center fs-1 fw-bold"><?= "{$LANG["hero.im"]} {$LANG["profile.name_top"]}" ?></span>
      <span class="text-uppercase"><?= $LANG["profile.full_name"] ?></span>
    </div>
    <span class="mb-4 text-center fs-5">
      <?= $LANG["hero.and_i"] . " " . $LANG["hero.in"] ?><br>
      ✨
      <!--img class="inline-logo" src="<?= "{$HOME_PATH}/img/icons/sparkle.png" ?>" aria-hidden="true" /-->
      <span id="typed" data-strings="<?= escape_html(json_encode($typedSkills, JSON_UNESCAPED_UNICODE), false) ?>"></span>
      <!--img class="inline-logo" src="<?= "{$HOME_PATH}/img/icons/sparkle.png" ?>" aria-hidden="true" /-->
      ✨
    </span>
    <div class="mb-5 d-flex flex-column flex-md-row justify-content-center light-links">
      <a class="a-lang" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_EN}" ?>" title="<?= escape_html($LANG["resume.en.title"], false) ?>" aria-label="<?= escape_html($LANG["resume.en.title"], false) ?>">
        <img class="inline-logo" src="<?= "{$HOME_PATH}/img/gb.svg" ?>" alt="<?= escape_html($LANG["resume.en.alt"], false) ?>" />
        <span><?= $LANG["resume.en.title"] ?></span>
      </a>
      <a class="a-lang" href="<?= "/{$ROUTE_RESUME}.{$ROUTE_ES}" ?>" title="<?= escape_html($LANG["resume.es.title"], false) ?>" aria-label="<?= escape_html($LANG["resume.es.title"], false) ?>">
        <img class="inline-logo" src="<?= "{$HOME_PATH}/img/co.svg" ?>" alt="<?= escape_html($LANG["resume.es.alt"], false) ?>" />
        <span><?= $LANG["resume.es.title"] ?></span>
      </a>
    </div>
    <div class="row w-100 light-links">
      <?php foreach ($LANG["portfolio.items"] as $portfolio) { ?>
        <div class="col-md-6 col-xl-4 p-0 text-darker-shadow text-white <?= $portfolio["class"] ?>">
          <div class="project has-background-cover p-4"
            style="background-image: url(<?= "{$HOME_PATH}/{$portfolio["image"]}" ?>);">
            <h3 class="project-title"><?= $portfolio["title"] ?></h3>
            <div class="project-description p-4">
              <div class="flex-grow-1 d-flex flex-column">
                <h3><?= $portfolio["title"] ?></h3>
                <i><small><?= $portfolio["ent"] ?> (<?= $portfolio["year"] ?>)</small></i>
                <small class="fw-light"><?= $portfolio["desc"] ?></small>
              </div>
              <div class="flex-grow-0">
                <div class="mt-2">
                  <?php foreach ($portfolio["tech"] as $tech) { ?>
                    <span class="badge rounded-pill text-bg-dark"><i
                        class="<?= $tech["icon"] ?> ps-0"></i><?= $tech["text"] ?></span>
                  <?php } ?>
                </div>
                <div class="mt-3">
                  <?php foreach ($portfolio["link"] as $link) { ?>
                    <a href="<?= $link["link"] ?>" target="_blank"><i
                        class="<?= $link["icon"] ?>"></i><span><?= $link["text"] ?></span></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row mt-4 pt-4 px-5 uncolor-links">
      <div class="col-md-auto d-flex justify-content-center">
        <div class="has-background-contain rounded-circle mb-4"
          style="background-image:url('<?= "{$HOME_PATH}/img/profile.jpg" ?>');height:160px;width:160px;"></div>
      </div>
      <p class="col pe-5"><?= $LANG["about.description"] ?></p>
    </div>
  </section>
  <section id="resume">
    <h2 class="text-uppercase mb-5 pb-5"><?= $LANG["nav.resume"] ?></h2>
    <div class="row w-100">
      <?php foreach ($LANG["skills.sections"] as $skillsection) { ?>
        <div class="skill-section col-12 mb-5">
          <h4 class="text-uppercase mb-2">
            <i class="<?= escape_html($skillsection["icon"], false) ?>" aria-hidden="true"></i>
            <?= escape_html($skillsection["title"], false) ?>
          </h4>
          <ul class="d-flex flex-wrap gap-2 mb-0">
            <?php foreach ($skillsection["items"] as $skill) { ?>
              <li class="skill p-2 pb-0" data-bs-toggle="tooltip" data-bs-title="<?= escape_html($skill["years"], false) . "+ " . escape_html($LANG["years"], false) ?>">
                <h4 class="m-0"><i class="<?= escape_html($skill["icon"], false) ?>"></i><span class="mx-1"><?= escape_html($skill["text"], false) ?></span></h4>
                <div class="progress rounded-pill">
                  <div class="progress-bar" style="width: <?= escape_html($skill["progress"], false) ?>%"></div>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      <?php } ?>
      <div class="resume-row col-lg-7">
        <h4 class="text-uppercase"><i class="fas fa-briefcase"></i><?= $LANG["nav.experience"] ?></h4>
        <ul>
          <?php foreach ($LANG["experience.items"] as $experience) { ?>
            <li>
              <div class="resume-title p-2">
                <h4 class="m-0"><?= $experience["pos"] ?></h4>
                <span class="mt-1 uncolor-links"><?= $experience["ent"] ?></span>
                <span class="text-primary text-md-end"><i class="fas fa-clock"></i><?= $experience["time"] ?></span>
              </div>
              <div class="p-2">
                <small class="m-0"><i class="fas fa-list-check"></i><?= $experience["desc"] ?></small>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
      <div class="resume-row col-lg-5">
        <h4 class="text-uppercase"><i class="fas fa-graduation-cap"></i><?= $LANG["nav.education"] ?></h4>
        <ul>
          <?php foreach ($LANG["education.items"] as $education) { ?>
            <li>
              <div class="resume-title p-2">
                <h4 class="m-0"><?= $education["prog"] ?></h4>
                <span class="mt-1 uncolor-links"><?= $education["inst"] ?></span>
                <span class="text-primary text-md-end"><i class="fas fa-clock"></i><?= $education["year"] ?></span>
              </div>
              <div class="p-2">
                <small class="m-0"><i class="fas fa-list-check"></i><?= $education["prof"] ?></small>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </section>
  <section id="contact">
    <h2 class="text-uppercase"><?= $LANG["nav.contact"] ?></h2>
    <span class="mb-1 pb-1"><?= $LANG["contact.subtitle"] ?></span>
    <div class="row w-100">
      <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
      <div class="col-12 calendly-inline-widget" data-url="https://calendly.com/atrujillomateus/30min?embed_domain=byuwur.co" style="height:800px;"></div>
      <!--div class="col-12 col-md-6 mb-3">
        <h5 class="col-12">Business Card! :]</h5>
        <iframe class="col-12" src="<?= "{$HOME_PATH}/card.v2.html" ?>"
          title="<?= escape_html($LANG["card.title"], false) ?>" width="100%" height="128px"
          frameborder="0"></iframe>
      </div>
      <div class="col-12 col-md-6 mb-3 d-flex flex-column text-end text-md-start">
        <div>
          <i class="fab fa-linkedin d-none d-md-inline"></i>
          <a href="<?= $LANG["social.linkedin.url"] ?>" target="_blank">atrujillomateus</a>
          <i class="fab fa-linkedin d-inline d-md-none"></i>
        </div>
        <div>
          <i class="fas fa-envelope d-none d-md-inline"></i>
          <a href="mailto:<?= $LANG["contact.mail"] ?>" target="_blank"><?= $LANG["contact.mail"] ?></a>
          <i class="fas fa-envelope d-inline d-md-none"></i>
        </div>
      </div-->
      <!-- div id="twitch" class="col-12"></div -->
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
    /* const twitchEmbedScript = document.createElement("script"),
      twitchEmbedOnLoad = () => {
        new Twitch.Embed("twitch", { width: "100%", height: 480, channel: "byuwur", allowfullscreen: false, : true, muted: true, theme: "dark", parent: ["byuwur.co"] });
      };
    twitchEmbedScript.src = "https://embed.twitch.tv/embed/v1.js";
    twitchEmbedScript.onload = twitchEmbedOnLoad;
    document.head.appendChild(twitchEmbedScript); */
  });
</script>
<?php
while (ob_get_level() > 0)
  ob_end_flush();
?>