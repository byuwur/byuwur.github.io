<?php
require_once "../_var.php";
require_once $TO_HOME . "spa.php/_common.php";
//require_once $TO_HOME . "spa.php/_functions.php";
//require_once $TO_HOME . "spa.php/_plugins.php";
//require_once $TO_HOME . "_config.php";
require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "spa.php/_router.php";
//require_once $TO_HOME . "spa.php/_auth.php";

// --- IMPORTS ---
require_once $TO_HOME . "_common.php";
//require_once $TO_HOME . "_functions.php";
//require_once $TO_HOME . "_plugins.php";
//require_once $TO_HOME . "_auth.php";

// --- PHP ---
// --- PHP ---
require_once $TO_HOME . "v0.mnm/lang/" . $app_lang . ".php";
require_once $TO_HOME . "v0.mnm/common.head.php";
?>
<div id="mnm-main">
    <div class="mnm-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="about-desc">
                        <span class="heading-meta" style="margin-left: 1.75em; margin-top: 1em;"> <?= $_welcome; ?> </span>
                        <h3 style="margin-left: 1em;"> <?= $_hola; ?> </h3>
                    </div>
                    <p class="panel-body"><?= $_mnm_intro; ?></p>
                    <div class="fancy-collapse-panel">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><?= $_whatwedo; ?></a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body"><?= $_whatwedo_desc; ?></div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="fañse" aria-controls="collapseOne"><?= $_whyus; ?></a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body"><?= $_whyus_desc; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-desc animate-box" data-animate-effect="fadeInLeft" style="text-align:center;"><?= $_we; ?></div>
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft" style="height:30vh;">
                        <div class="project" style="height:99%; background-image: url(<?= $HOME_PATH; ?>/img/v0/port_mateus.jpg);">
                            <a href="<?= "{$ROUTE_ROOT}"; ?>">
                                <div class="desc" style="padding:1em;">
                                    <h3>MATEUS' <small>PORTFOLIO</small>
                                    </h3><span style="position:absolute;bottom:1.5em;"><small>MNM.team(mateus);</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft" style="height:30vh;">
                        <div class="project" style="height:99%; background-image: url(<?= $HOME_PATH; ?>/img/v0/port_nestux.jpg);">
                            <a href="<?= "{$ROUTE_ROOT}{$ROUTE_NESTUX}"; ?>">
                                <div class="desc" style="padding:1em;">
                                    <h3>NESTUX' <small>PORTFOLIO</small>
                                    </h3><span style="position:absolute;bottom:1.5em;"><small>MNM.team(nestux);</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft" style="height:30vh;">
                        <div class="project" style="height:99%; background-image: url(<?= $HOME_PATH; ?>/img/v0/port_marco.jpg);">
                            <a href="<?= "{$ROUTE_ROOT}{$ROUTE_MARCO}"; ?>">
                                <div class="desc" style="padding:1em;">
                                    <h3>MARCO'<small>s PORTFOLIO</small>
                                    </h3><span style="position:absolute;bottom:1.5em;"><small>MNM.team(marco);</small></span>
                                </div>
                            </a>
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
            document.title = "<?= $_hola; ?> | MNM.team();";
            $("#li_about").addClass("mnm-active");
        });
    </script>
</div>