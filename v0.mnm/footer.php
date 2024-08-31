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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                cookieconsent.run({
                    "notice_banner_type": "simple",
                    "consent_type": "express",
                    "palette": <?= '"' . $app_theme . '"'; ?>,
                    "language": <?= '"' . $app_lang . '"'; ?>,
                    "website_name": "mnm.team",
                    "change_preferences_selector": "#cookiePrefs"
                });
            });
        </script>
        </body>

        </html>