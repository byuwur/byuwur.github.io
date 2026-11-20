<?php
require_once "./_init.php";
require_once "{$TO_HOME}/spa.php/_functions.php";
require_once "{$TO_HOME}/spa.php/_common.php";
require_once "{$TO_HOME}/_routes.php";
require_once "{$TO_HOME}/_common.php";
// === PHP ===

// ===== LOCALIZED MARKDOWN SOURCE =====
$notice = $_GET["notice"] ?? "privacy";
if (!in_array($notice, $policyNotices, true)) $notice = "privacy";
$policyPath = array_search($notice, $policyNotices, true);
$projectSuffix = strstr(substr($policyPath, 1), "/") ?: "";
$hasAnalyticsSettings = $projectSuffix !== "/files.host";
$sourceRoute = $policySourceRoutes[$notice][$APP_LANG];
$sourceFile = $TO_HOME . $routes[$sourceRoute]["FILE"];
$markdown = is_readable($sourceFile) ? file_get_contents($sourceFile) : false;
if ($markdown === false) {
  http_response_code(500);
  $markdown = $LANG["policy.unavailable"];
}
$title = ltrim(strtok($markdown, "\r\n"), "# ");
$languages = [
  "es" => ["language.spanish", "co.svg"],
  "en" => ["language.english", "gb.svg"],
  "ja" => ["language.japanese", "jp.svg"]
];
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/byuwur/md.view@latest/md.min.css" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/gh/byuwur/md.view@latest/md.min.js" referrerpolicy="no-referrer" defer></script>
<style>
  .policy-source {
    white-space: pre-wrap;
  }
  #policy-document ol.byMDlist {
    list-style-type: decimal;
  }
  #policy-document .byMDlink {
    white-space: normal !important;
    overflow-wrap: anywhere;
  }
  body:has(.policy-page) :is(.site-policy-links, .side-video, #bywr-accessibility) {
    display: none;
  }
</style>
<section class="policy-page min-vh-100 bg-body text-body border-top border-3 border-danger" lang="<?= escape_html($APP_LANG) ?>" data-bs-theme="<?= escape_html($APP_THEME) ?>">
  <header class="bg-body-tertiary border-bottom">
    <div class="container col-lg-10 col-xl-9 col-xxl-8 d-flex flex-wrap align-items-center justify-content-between gap-2 py-3">
      <strong><?= escape_html($title) ?></strong>
      <nav class="d-flex align-items-center gap-1 mw-100 overflow-x-auto text-nowrap small">
        <?php if ($hasAnalyticsSettings): ?>
          <a id="settings-link" class="link-body-emphasis text-decoration-underline link-offset-2" href="#privacy-controls" hidden><?= escape_html($LANG["policy.settings"]) ?></a>
          <span data-settings-divider aria-hidden="true" hidden> | </span>
        <?php endif; ?>
        <a data-legal-source class="link-body-emphasis text-decoration-underline link-offset-2" href="<?= escape_html($HOME_PATH . $sourceRoute) ?>" target="_blank" rel="noopener"><?= escape_html($LANG["policy.read_source"]) ?></a>
        <?php foreach ($languages as $language => [$label, $flag]): ?>
          <span aria-hidden="true"> | </span>
          <?php if ($language === $APP_LANG): ?>
            <span class="fw-bold" lang="<?= $language ?>" aria-current="page">
              <img class="me-1" width="16" height="12" src="<?= "{$HOME_PATH}/img/{$flag}" ?>" alt="" /><?= escape_html($LANG[$label]) ?>
            </span>
          <?php else: ?>
            <a class="link-body-emphasis text-decoration-underline link-offset-2" lang="<?= $language ?>" hreflang="<?= $language ?>" href="<?= escape_html($HOME_PATH . $policyPath) ?>?lang=<?= $language ?>" custom-folder="true">
              <img class="me-1" width="16" height="12" src="<?= "{$HOME_PATH}/img/{$flag}" ?>" alt="" /><?= escape_html($LANG[$label]) ?>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </nav>
    </div>
  </header>
  <div class="container col-lg-10 col-xl-9 col-xxl-8 py-3 py-md-4">
    <?php if ($hasAnalyticsSettings): ?>
      <div data-privacy-inline="on-load" data-project-suffix="<?= escape_html($projectSuffix) ?>"></div>
    <?php endif; ?>
    <article id="policy-document" class="rounded-1">
      <pre class="policy-source text-break"><?= htmlspecialchars($markdown, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?></pre>
    </article>
  </div>
</section>
<script>
  (() => {
    document.title = <?= js_encode($title) ?>;
    const canonical = document.querySelector('link[rel="canonical"]');
    canonical.href = <?= js_encode("https://byuwur.co" . $policyPath) ?>;
    document.addEventListener("bySPA:before-unload", () => {
      canonical.href = <?= js_encode($LANG["meta.url"]) ?>;
    }, {
      once: true
    });

    const article = document.getElementById("policy-document");
    window.byMDviewer?.(article, article.querySelector("pre").textContent, {
      theme: "light",
      toolbar: true,
      credits: true,
      controlsCompact: true,
      fontSizeControls: true,
      themeToggle: true,
      copyButton: true,
      withImages: false
    });
  })();
</script>