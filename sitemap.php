<?php
require_once "./_init.php";
require_once "{$TO_HOME}/spa.php/_functions.php";
require_once "{$TO_HOME}/spa.php/_common.php";
require_once "{$TO_HOME}/_routes.php";
require_once "{$TO_HOME}/_common.php";
// === PHP ===

$xml = file_get_contents(__DIR__ . "/sitemap.xml");
$sitemap = $xml === false ? false : simplexml_load_string($xml);
if ($sitemap === false) http_response_code(500);
$languages = [
  "es" => ["language.spanish", "co.svg"],
  "en" => ["language.english", "gb.svg"],
  "ja" => ["language.japanese", "jp.svg"],
];
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/byuwur/xml.view@latest/xml.min.css" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/gh/byuwur/xml.view@latest/xml.min.js" referrerpolicy="no-referrer" defer></script>
<style>
  body:has(.sitemap-page) :is(.site-policy-links, .side-video, #bywr-accessibility) {
    display: none;
  }
</style>
<section class="sitemap-page min-vh-100 bg-body text-body border-top border-3 border-danger" lang="<?= escape_html($APP_LANG) ?>" data-bs-theme="<?= escape_html($APP_THEME) ?>">
  <header class="bg-body-tertiary border-bottom">
    <div class="container col-lg-10 col-xl-9 col-xxl-8 d-flex flex-wrap align-items-center justify-content-between gap-2 py-3">
      <h1 class="h6 fw-bold mb-0"><?= escape_html($LANG["sitemap.title"]) ?></h1>
      <nav class="d-flex align-items-center gap-1 mw-100 overflow-x-auto text-nowrap small">
        <a class="link-body-emphasis link-offset-2" href="<?= "{$HOME_PATH}/sitemap.xml" ?>" target="_blank" rel="noopener"><?= escape_html($LANG["policy.read_source"]) ?></a>
        <?php foreach ($languages as $language => [$label, $flag]): ?>
          <span aria-hidden="true"> | </span>
          <?php if ($language === $APP_LANG): ?>
            <span class="fw-bold" lang="<?= $language ?>" aria-current="page">
              <img class="me-1" width="16" height="12" src="<?= "{$HOME_PATH}/img/{$flag}" ?>" alt="" /><?= escape_html($LANG[$label]) ?>
            </span>
          <?php else: ?>
            <a class="link-body-emphasis link-offset-2" lang="<?= $language ?>" hreflang="<?= $language ?>" href="<?= "{$HOME_PATH}/sitemap?lang={$language}" ?>" custom-folder="true">
              <img class="me-1" width="16" height="12" src="<?= "{$HOME_PATH}/img/{$flag}" ?>" alt="" /><?= escape_html($LANG[$label]) ?>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </nav>
    </div>
  </header>
  <div class="container col-lg-10 col-xl-9 col-xxl-8 py-3 py-md-4">
    <?php if ($sitemap !== false): ?>
      <details class="mb-3">
        <summary><?= escape_html($LANG["sitemap.links"]) ?></summary>
        <ul class="mt-2">
          <?php foreach ($sitemap->url as $entry): ?>
            <li><a href="<?= escape_html((string) $entry->loc) ?>"><?= escape_html((string) $entry->loc) ?></a></li>
          <?php endforeach; ?>
          <li><a href="https://controller.byuwur.co/">controller.byuwur.co</a></li>
          <li><a href="https://discord.byuwur.co/">discord.byuwur.co</a></li>
        </ul>
      </details>
    <?php endif; ?>
    <article id="sitemap-document" class="rounded-1">
      <pre><?= escape_html($xml === false ? $LANG["sitemap.unavailable"] : $xml) ?></pre>
    </article>
  </div>
</section>
<script>
  (() => {
    document.title = <?= js_encode($LANG["sitemap.title"]) ?>;
    const article = document.getElementById("sitemap-document");
    <?php if ($sitemap !== false): ?>
      const viewer = window.byXMLviewer?.(article, article.querySelector("pre").textContent, {
        theme: "light",
        search: true
      });
      document.addEventListener("bySPA:before-unload", () => viewer?.destroy(), {
        once: true
      });
    <?php endif; ?>
  })();
</script>