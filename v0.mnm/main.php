<?php
require_once "../_var.php";
require_once $TO_HOME . "_common.php";
//require_once $TO_HOME . "_functions.php";
//require_once $TO_HOME . "_plugins.php";
//require_once $TO_HOME . "_config.php";
require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "_router.php";
//require_once $TO_HOME . "_auth.php";
// --- PHP ---
require_once $TO_HOME . "v0.mnm/lang/" . $app_lang . ".php";
require_once $TO_HOME . "v0.mnm/common.head.php";
?>
<div id="mnm-main">
    <div id="mnm-hero">
        <div class="mnm-slider">
            <div class="fullscreen" style="background-image:url(<?= $HOME_PATH; ?>/img/v0/bg.jpg);background-size:cover;background-repeat:no-repeat;background-position:center;">
                <div class="container-fluid slider-text">
                    <div class="row" style="max-height:44vh;margin:1.5em;"><a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>work">
                            <div class="about-desc">
                                <h3 class="desc" style="padding:1em 1em 0 1em;"><?= $_kproject; ?><video class="video-home" style="max-height:33vh;" autoplay muted loop>
                                        <source src="<?= $HOME_PATH; ?>/img/v0/mnmp.mp4" type="video/mp4" />
                                    </video></h3>
                            </div>
                        </a></div>
                    <div class="row" style="max-height:44vh;margin:1.5em;"><a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>services">
                            <div class="about-desc">
                                <h3 class="desc" style="padding:1em 1em 0 1em;"><?= $_kservice; ?><video class="video-home" style="max-height:33vh;" autoplay muted loop>
                                        <source src="<?= $HOME_PATH; ?>/img/v0/mnms.mp4" type="video/mp4" />
                                    </video></h3>
                            </div>
                        </a></div>
                </div>
            </div>
            <div class="fullscreen" style="background-image:url(<?= $HOME_PATH; ?>/img/v0/bg_mateus.jpg);background-size:cover;background-repeat:no-repeat;background-position:center;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1><?= $_mateus; ?></h1>
                                    <h2><?= $_mateus_desc; ?></h2>
                                    <p><a class="btn btn-primary btn-learn" href="<?= $ROOT_ROUTE; ?>"><?= $_mateus_p; ?><i class="icon-arrow-right3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullscreen" style="background-image:url(<?= $HOME_PATH; ?>/img/v0/bg_nestux.jpg);background-size:cover;background-repeat:no-repeat;background-position:center;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1><?= $_nestux; ?></h1>
                                    <h2><?= $_nestux_desc; ?></h2>
                                    <p><a class="btn btn-primary btn-learn" href="<?= $ROOT_ROUTE; ?>nestux"><?= $_nestux_p; ?><i class="icon-arrow-right3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullscreen" style="background-image:url(<?= $HOME_PATH; ?>/img/v0/bg_marco.jpg);background-size:cover;background-repeat:no-repeat;background-position:center;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1><?= $_marco; ?></h1>
                                    <h2><?= $_marco_desc; ?></h2>
                                    <p><a class="btn btn-primary btn-learn" href="<?= $ROOT_ROUTE; ?>marco"><?= $_marco_p; ?><i class="icon-arrow-right3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once $TO_HOME . "v0.mnm/common.foot.php";
    ?>
    <script>
        $(() => {
            document.title = "MNM.team();";
            $("#li_home").addClass("mnm-active");
        });
    </script>
</div>