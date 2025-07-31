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
require_once $TO_HOME . "v0.mnm/lang/" . $app_lang . ".php";
require_once $TO_HOME . "v0.mnm/common.head.php";
?>
<div id="mnm-main">
    <div class="mnm-contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <span class="heading-meta"><?= $_read; ?></span>
                    <h2 class="mnm-heading animate-box" data-animate-effect="fadeInLeft" style="margin-bottom: 2em;"><?= $_chead; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-md-pull-7">
                    <div class="mnm-feature mnm-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="mnm-icon">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div class="mnm-text">
                            <p>
                                <small>Mateus: </small><a href="<?= $_mateus_mail; ?>">atrujillomateus</a><br>
                                <small>Nestux: </small><a href="<?= $_nestux_mail; ?>">nestux091</a><br>
                                <small>Marco: </small><a href="<?= $_marco_mail; ?>">marco-josé-cortés-guzman-1b0453222</a>
                            </p>
                        </div>
                    </div>
                    <div class="mnm-feature mnm-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="mnm-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="mnm-text">
                            <p><?= $_location; ?><br><br></p>
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
            document.title = "<?= $_chead; ?> | MNM.team();";
            $("#li_contact").addClass("mnm-active");
        });
    </script>
</div>