<?php
// require_once "../var.php"; before this file
?>
<div id="get-in-touch" class="mnm-bg-color">
    <div class="mnm-narrow-content">
        <div class="row">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <h2> <?= $_contact_title ?> </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <p class="mnm-lead"> <?= $_contact_desc ?> </p>
                <p><a href="<?= "/{$ROUTE_MNM}/{$ROUTE_MNM_CONTACT}" ?>" class="btn btn-primary btn-learn"> <?= $_contact_us ?> </a></p>
            </div>
        </div>
    </div>
</div>
<script>
    $(() => {
        $(".mnm-active").removeClass("mnm-active");
        if ($("body").hasClass("offcanvas")) {
            $("body").removeClass("offcanvas");
            $(".js-mnm-nav-toggle").removeClass("active");
        }
    });
</script>