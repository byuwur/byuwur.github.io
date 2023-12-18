<?php
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es') {
        require_once "./lang/es.php";
    } else if ($_GET['lang'] == 'en') {
        require_once "./lang/en.php";
    }
} else if (isset($_COOKIE['lang'])) {
    require_once "./lang/" . $_COOKIE['lang'] . ".php";
} else {
    require_once "./lang/es.php";
}
$_GET['title'] = $_titlecontact;
require_once "./header.php";
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
                <div class="col-md-7 col-md-push-5">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" name="s_name" class="form-control" placeholder="* <?= $_name; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="s_email" class="form-control" placeholder="* <?= $_email; ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="s_phone" class="form-control" placeholder="<?= $_phone; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="s_subject" class="form-control" placeholder="* <?= $_subject; ?>" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="s_message" id="message" cols="30" rows="7" class="form-control" placeholder="* <?= $_msg; ?>" required></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LcgdbwUAAAAAMjsRwvIR08sluNH9GBfzEHQ5JTe"></div><br>
                                <div class="form-group">
                                    <input type="submit" name="s_enviar" class="btn btn-primary btn-send-message" style="margin-bottom: 5em;" value="<?= $_send; ?>">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            active_contact();
        });
    </script>
    <?php
    require_once "./footer.php";
    if (isset($_POST['s_enviar'])) {
        $captcha = $_POST['g-recaptcha-response'];
        if (!$captcha) {
            echo '<script>alert("reCaptcha inválido. / Invalid reCaptcha.");</script>';
        } else {
            $secret = "";
            $rescaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
            $arrcaptcha = json_decode($rescaptcha, true);
            if ($arrcaptcha['success']) {
                $s_name = $_POST['s_name'];
                $s_email = $_POST['s_email'];
                $s_phone = $_POST['s_phone'];
                $s_subject = $_POST['s_subject'];
                $s_message = $_POST['s_message'];
                $arr_mnm = [$_mateus_mail, $_nestux_mail, $_marco_mail];
                $mail_mnm = implode(",", $arr_mnm);
                $mail_asunto = $_subject . " | MNM, " . $s_name . $_s_wants;
                $mail_header = "From: info@mnm.team\r\n"
                    . "MIME-Version: 1.0\r\n"
                    . "Content-type: text/html; charset=iso-8859-1\r\n";
                $mail_msg = ' <html> <head> <title> Contactar a MNM </title> </head> <body>
                <p>Hola, equipo de MNM:<br><br>Soy <strong>' . $s_name . '</strong>.</p>
                <p>Pueden contactarme en: <strong>' . $s_email . '</strong> o llamarme al: <strong>' . $s_phone . '</strong>.</p>
                Necesito decirles:<br>
                ' . $s_message . '
                <br><br><br>Gracias.<br><br>Atentamente, ' . $s_name . '.
            </body> </html> ';
                $sendmail = @mail($mail_mnm, $mail_asunto, $mail_msg, $mail_header);
                if ($sendmail) {
                    echo '<script>alert("' . $_s_thanks . '");</script>';
                } else {
                    echo '<script>alert("' . $_s_wrong . '");</script>';
                }
            } else {
                echo '<script>alert("reCaptcha inválido. Lamentamos las molestias. / Invalid reCaptcha. Sorry for the bother.");</script>';
            }
        }
    }
    ?>