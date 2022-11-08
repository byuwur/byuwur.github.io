<?php
if (isset($_GET['work'])) {
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == 'es') {
            require("./lang/es_work-" . $_GET['work'] . ".php");
        } else if ($_GET['lang'] == 'en') {
            require("./lang/en_work-" . $_GET['work'] . ".php");
        }
    } else if (isset($_COOKIE['lang'])) {
        require("./lang/" . $_COOKIE['lang'] . "_work-" . $_GET['work'] . ".php");
    } else {
        require("./lang/es_work-" . $_GET['work'] . ".php");
    }
} else {
    echo '<script type="text/javascript"> window.location.replace("/"); </script>';
}
$_GET['title'] = $_wtitle;
require("./header.php");
?>
<div id="mnm-main">
    <div class="mnm-work">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3">
                    <span class="heading-meta"><?= $_portfolio; ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 sticky-parent">
                    <div id="sticky_item">
                        <h1 class="mnm-heading animate-box"><a href="<?= $_project; ?>" class="btn btn-primary" style="margin: 0 25px 10px 0;"><?= $_back ?></a>
                            <font size="6"><?= $_wtitle; ?></font>
                        </h1>
                        <div class="project-desc" style="margin-top: 0.25em;">
                            <h2 class="animate-box">
                                <font size="5"><?= $_wsubtitle; ?></font>
                            </h2>
                            <span class="animate-box"><?= $_wkeywords; ?></span>
                            <p class="animate-box">
                                <font size="4"><?= $_wdesc; ?></font>
                            </p>
                            <p class="icon animate-box">
                                <?= $_wyear; ?>
                                <?= $_wdevs; ?>
                                <?= $_winst; ?>
                            </p>
                            <p><a target="_blank" href="<?= $_wlink; ?>" class="btn btn-primary animate-box" style="margin-bottom: 2.5em;"><?= $_wmore; ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 image-content">
                    <img class="img-responsive" src="../img/work-<?= $_GET['work']; ?>/1.jpg" alt="Image 1" />
                    <img class="img-responsive" src="../img/work-<?= $_GET['work']; ?>/2.jpg" alt="Image 2" />
                    <img class="img-responsive" src="../img/work-<?= $_GET['work']; ?>/3.jpg" alt="Image 3" />
                    <img class="img-responsive" src="../img/work-<?= $_GET['work']; ?>/4.jpg" alt="Image 4" />
                </div>
            </div>
        </div>
    </div>
<?php
require("./footer.php");
echo '<script type="text/javascript"> active_work(); </script>';
?>