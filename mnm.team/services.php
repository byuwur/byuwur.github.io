<?php
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es') {
        require_once "./lang/lang_es.php";
    } else if ($_GET['lang'] == 'en') {
        require_once "./lang/lang_en.php";
    }
} else if (isset($_COOKIE['lang'])) {
    require_once "./lang/lang_" . $_COOKIE['lang'] . ".php";
} else {
    require_once "./lang/lang_es.php";
}
$_GET['title'] = $_titleservice;
require_once "./header.php";
?>
<div id="mnm-main">
    <div class="mnm-services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3">
                    <span class="heading-meta"><?= $_portfolio; ?></span>
                    <h2 class="mnm-heading animate-box" data-animate-effect="fadeInLeft"><?= $_expertise; ?></h2>
                    <h3 class="animate-box" data-animate-effect="fadeInLeft" style="font-size: 12px; margin-bottom: 4em;"><a href="javascript:;">DISPUESTOS A LO QUE NECESITES.</a></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mnm-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="mnm-icon">
                            <i class="fab fa-aws"></i>
                        </div>
                        <div class="mnm-text">
                            <h3><?= $_aws; ?></h3>
                            <p><?= $_aws_desc; ?></p>
                        </div>
                    </div>
                    <div class="mnm-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="mnm-icon">
                            <i class="far fa-file-code"></i>
                        </div>
                        <div class="mnm-text">
                            <h3><?= $_devweb; ?></h3>
                            <p><?= $_devweb_desc; ?></p>
                        </div>
                    </div>
                    <div class="mnm-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="mnm-icon">
                            <i class="fas fa-terminal"></i>
                        </div>
                        <div class="mnm-text">
                            <h3><?= $_advice; ?></h3>
                            <p><?= $_advice_desc; ?></p>
                        </div>
                    </div>
                    <div class="mnm-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="mnm-icon">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <div class="mnm-text">
                            <h3><?= $_multimedia; ?></h3>
                            <p><?= $_multimedia_desc; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mnm-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="mnm-icon">
                            <i class="far fa-copyright"></i>
                        </div>
                        <div class="mnm-text">
                            <h3><?= $_branding; ?></h3>
                            <p><?= $_branding_desc; ?></p>
                        </div>
                    </div>
                    <div class="mnm-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="mnm-icon">
                            <i class="fab fa-android"></i>
                            <i class="fab fa-apple"></i>
                        </div>
                        <div class="mnm-text">
                            <h3><?= $_devapp; ?></h3>
                            <p><?= $_devapp_desc; ?></p>
                        </div>
                    </div>
                    <div class="mnm-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="mnm-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="mnm-text">
                            <h3><?= $_platweb; ?></h3>
                            <p><?= $_platweb_desc; ?></p>
                        </div>
                    </div>
                    <div class="mnm-feature animate-box" data-animate-effect="fadeInLeft">
                        <div class="mnm-icon">
                            <i class="far fa-life-ring"></i>
                        </div>
                        <div class="mnm-text">
                            <h3><?= $_help; ?></h3>
                            <p><?= $_help_desc; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once "./footer.php";
    echo '<script type="text/javascript"> active_services(); </script>';
    ?>