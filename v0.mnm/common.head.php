<?php
// require_once "../var.php"; before this file
?>
<link rel="stylesheet" href="<?= $HOME_PATH; ?>/css/v0.css" />
<script src="<?= $HOME_PATH; ?>/js/v0.js" defer></script>
<script>
    localStorage.setItem("APP_LANG", "<?= $app_lang; ?>");
    localStorage.setItem("APP_THEME", "<?= $app_theme; ?>");
    "use strict";
    $(() => {
        document.title = "MNM.team();";
        byCommon.init();
        if ($("#page-icon").length) $("#page-icon").attr("href", "<?= $HOME_PATH; ?>/img/v0/favicon.png");
        if ($("#shortcut-icon").length) $("#shortcut-icon").attr("href", "<?= $HOME_PATH; ?>/img/v0/favicon.png");
    });
</script>