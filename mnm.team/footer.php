        <div id="get-in-touch" class="mnm-bg-color">
            <div class="mnm-narrow-content">
                <div class="row">
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <h2> <?= $_contact_title; ?> </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <p class="mnm-lead"> <?= $_contact_desc; ?> </p>
                        <p><a href="<?= $_contact; ?>" class="btn btn-primary btn-learn"> <?= $_contact_us; ?> </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JS plugins -->
<script type="text/javascript" src="../plugin/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../plugin/easing/easing.min.js"></script>
<script type="text/javascript" src="../plugin/bootstrap/js/bootstrap.mnm.min.js"></script>
<!--script type="text/javascript" src="../plugin/particles/particles.min.js"></script-->
<script type="text/javascript" src="../plugin/waypoints/waypoints.min.js"></script>
<script type="text/javascript" src="../plugin/flexslider/js/flexslider.min.js"></script>
<script type="text/javascript" src="../plugin/sticky-kit/sticky-kit.min.js"></script>
<!-- MAIN JS -->
<script type="text/javascript" src="../js/mnm.js"></script>
<!-- Cookie consent -->
<script type="text/javascript" src="../js/cookies.js"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        cookieconsent.run({
            "notice_banner_type": "simple",
            "consent_type": "express",
            "palette": <?= '"' . $theme . '"'; ?>,
            "language": <?= '"' . $lang . '"'; ?>,
            "website_name": "mnm.team",
            "change_preferences_selector": "#cookiePrefs"
        });
    });
</script>
<!-- End cookie consent -->
</body>

</html>