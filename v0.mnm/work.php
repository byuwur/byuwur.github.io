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
    <div class="mnm-work">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3">
                    <span class="heading-meta"><?= $_portfolio; ?></span>
                    <h2 class="mnm-heading animate-box" data-animate-effect="fadeInLeft"><?= $_mywork; ?></h2>
                    <h3 class="animate-box" data-animate-effect="fadeInLeft" style="font-size: 12px; margin-bottom: 4em;"><a href="#"></a></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(<?= $HOME_PATH; ?>/img/v0/work-3/0.jpg);">
                        <a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>reservelapp">
                            <div class="desc">
                                <div class="con">
                                    <h3><?= $_reserv; ?></h3>
                                    <span><?= $_reserv_desc_short; ?></span>
                                    <p class="icon">
                                        <span><?= $_year; ?><i>2018</i></span>
                                        <br>
                                        <span><?= $_devs; ?><i>Mateus</i></span>
                                        <br>
                                        <span><?= $_inst . $_fundby; ?><i>ITFIP</i></span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(<?= $HOME_PATH; ?>/img/v0/work-2/0.jpg);">
                        <a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>limontech">
                            <div class="desc">
                                <div class="con">
                                    <h3><?= $_lt; ?></h3>
                                    <span><?= $_lt_desc_short; ?></span>
                                    <p class="icon">
                                        <span><?= $_year; ?><i>2017</i></span>
                                        <br>
                                        <span><?= $_devs; ?><i>Mateus</i></span>
                                        <span><i>Nestux</i></span>
                                        <span><i>Marco</i></span>
                                        <br>
                                        <span><?= $_inst; ?><i>Unifrutol / SENA</i></span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(<?= $HOME_PATH; ?>/img/v0/work-1/0.jpg);">
                        <a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>renn">
                            <div class="desc">
                                <div class="con">
                                    <h3><?= $_renn; ?></h3>
                                    <span><?= $_renn_desc_short; ?></span>
                                    <p class="icon">
                                        <span><?= $_year; ?><i>2017</i></span>
                                        <br>
                                        <span><?= $_devs; ?><i>Mateus</i></span>
                                        <span><i>Nestux</i></span>
                                        <span><i>Marco</i></span>
                                        <br>
                                        <span><?= $_inst . $_fundby; ?>ITFIP. <i>Escuela Normal de Naucalpán (México)</i></span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(<?= $HOME_PATH; ?>/img/v0/work-0/0.jpg);">
                        <a href="<?= $ROOT_ROUTE . $MNM_ROUTE; ?>redi">
                            <div class="desc">
                                <div class="con">
                                    <h3><?= $_redi; ?></h3>
                                    <span><?= $_redi_desc_short; ?></span>
                                    <p class="icon">
                                        <span><?= $_year; ?><i>2017</i></span>
                                        <br>
                                        <span><?= $_devs; ?><i>Mateus</i></span>
                                        <span><i>Nestux</i></span>
                                        <span><i>Marco</i></span>
                                        <br>
                                        <span><?= $_inst . $_fundby; ?><i>ITFIP</i></span>
                                    </p>
                                </div>
                            </div>
                        </a>
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
            document.title = "<?= $_mywork; ?> | MNM.team();";
            $("#li_work").addClass("mnm-active");
        });
    </script>
</div>