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
$_GET['title'] = $_titleproject;
require_once "./header.php";
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
                    <div class="project" style="background-image: url(../img/work-3/0.jpg);">
                        <a href="reservelapp">
                            <div class="desc">
                                <div class="con">
                                    <h3><?= $_reserv; ?></h3>
                                    <span><?= $_reserv_desc_short; ?></span>
                                    <p class="icon">
                                        <span><?= $_year; ?><i>2018</i></span>
                                        <br>
                                        <span><?= $_devs; ?><i>Mateus</i></span>
                                        <br>
                                        <span><?= $_inst; ?><?= $_fundby; ?><i>ITFIP</i></span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(../img/work-2/0.jpg);">
                        <a href="limontech">
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
                    <div class="project" style="background-image: url(../img/work-1/0.jpg);">
                        <a href="renn">
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
                                        <span><?= $_inst; ?><?= $_fundby; ?>ITFIP. <i>Escuela Normal de Naucalpán (México)</i></span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="project" style="background-image: url(../img/work-0/0.jpg);">
                        <a href="redi">
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
                                        <span><?= $_inst; ?><?= $_fundby; ?><i>ITFIP</i></span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
                    -->
        </div>
    </div>
<?php
require_once "./footer.php";
echo '<script type="text/javascript"> active_work(); </script>';
?>