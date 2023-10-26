<?php
require_once "./header.php";
?>
<div id="mnm-main">
    <div id="mnm-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image:url(../img/bg.jpg);background-size:cover;background-repeat:no-repeat;background-position:center;">
                    <div class="container-fluid js-fullheight slider-text">
                        <div class="row" style="max-height:44vh;margin:1.5em;"><a href="<?= $_project; ?>">
                                <div class="about-desc">
                                    <h3 class="desc" style="padding:1em 1em 0 1em;"><?= $_kproject; ?><video class="video-home" style="max-height:33vh;" autoplay muted loop>
                                            <source src="../img/mnmp.mp4" type="video/mp4" />
                                        </video></h3>
                                </div>
                            </a></div>
                        <div class="row" style="max-height:44vh;margin:1.5em;"><a href="<?= $_service; ?>">
                                <div class="about-desc">
                                    <h3 class="desc" style="padding:1em 1em 0 1em;"><?= $_kservice; ?><video class="video-home" style="max-height:33vh;" autoplay muted loop>
                                            <source src="../img/mnms.mp4" type="video/mp4" />
                                        </video></h3>
                                </div>
                            </a></div>
                    </div>
                </li>
                <!--li style="background-image:url(../img/bg_1.jpg);background-size:cover;background-repeat:no-repeat;background-position:center;">
                    <div class="container-fluid js-fullheight">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1><?= $_mnm; ?></h1>
                                        <h2><?= $_mnm_desc; ?></h2>
                                        <p><a href="<?= $_contact; ?>" class="btn btn-primary btn-learn"><?= $_mnm_p; ?><i class="icon-arrow-right3"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li-->
                <li style="background-image:url(../img/bg_mateus.jpg);background-size:cover;background-repeat:no-repeat;background-position:center;">
                    <div class="container-fluid js-fullheight">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1><?= $_mateus; ?></h1>
                                        <h2><?= $_mateus_desc; ?></h2>
                                        <p><a class="btn btn-primary btn-learn" href="../"><?= $_mateus_p; ?><i class="icon-arrow-right3"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image:url(../img/bg_nestux.jpg);background-size:cover;background-repeat:no-repeat;background-position:center;">
                    <div class="container-fluid js-fullheight">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1><?= $_nestux; ?></h1>
                                        <h2><?= $_nestux_desc; ?></h2>
                                        <p><a class="btn btn-primary btn-learn" href="../nestux"><?= $_nestux_p; ?><i class="icon-arrow-right3"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image:url(../img/bg_marco.jpg);background-size:cover;background-repeat:no-repeat;background-position:center;">
                    <div class="container-fluid js-fullheight">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1><?= $_marco; ?></h1>
                                        <h2><?= $_marco_desc; ?></h2>
                                        <p><a class="btn btn-primary btn-learn" href="../marco"><?= $_marco_p; ?><i class="icon-arrow-right3"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            active_home();
        });
    </script>
    <?php
    require_once "./footer.php";
    ?>