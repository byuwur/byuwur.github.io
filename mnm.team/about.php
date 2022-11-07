<?php
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es') {
        require("./lang/lang_es.php");
    } else if ($_GET['lang'] == 'en') {
        require("./lang/lang_en.php");
    }
} else if (isset($_COOKIE['lang'])) {
    require("./lang/lang_" . $_COOKIE['lang'] . ".php");
} else {
    require("./lang/lang_es.php");
}
$_GET['title'] = $_titleabout;
require("./header.php");
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
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><?= $_whatwedo; ?></a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body"><?= $_whatwedo_desc; ?></div>
                                </div>
                            </div>
                            <!--div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"></a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body"></div>
                                </div>
                            </div-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?= $_whyus; ?></a>
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
                        <div class="project" style="height:99%; background-image: url(img/port_mateus.jpg);">
                            <a href="mateus" target="_blank">
                                <div class="desc" style="padding:1em;">
                                    <h3>MATEUS' <small>PORTFOLIO</small>
                                    </h3><span style="position:absolute;bottom:1.5em;"><small>MNM.team(mateus);</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft" style="height:30vh;">
                        <div class="project" style="height:99%; background-image: url(img/port_nestux.jpg);">
                            <a href="nestux" target="_blank">
                                <div class="desc" style="padding:1em;">
                                    <h3>NESTUX' <small>PORTFOLIO</small>
                                    </h3><span style="position:absolute;bottom:1.5em;"><small>MNM.team(nestux);</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft" style="height:30vh;">
                        <div class="project" style="height:99%; background-image: url(img/port_marco.jpg);">
                            <a href="marco" target="_blank">
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
require("./footer.php");
echo '<script type="text/javascript"> active_about(); </script>';
?>