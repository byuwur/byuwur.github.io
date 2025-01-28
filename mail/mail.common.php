<?php
// Define all the possible values
$MAIL_BASE = [
    "head_img" => "http://byuwur.net/mail/byuwur64.png",
    "head_url" => "https://byuwur.net",
    "head_top" => "[Mateus] byUwUr",
    "head_bot" => "Desarrollo bien hecho a tu alcance.",
    "topic_txt" => "EMAIL DE CONTACTO",
    "topic_img" => "http://byuwur.net/mail/env64.png",
    "msg_top" => "¡Hola!",
    "msg_bot" => "Hola mundo.",
    "cta_col" => "#700",
    "cta_url" => "https://byuwur.net",
    "cta_txt" => "¡Clic aquí!",
    "cta_msg" => "Si el botón no funciona, puedes dar clic",
    "cta_bak_txt" => "aquí",
    "foot_top" => "Con gratitud,",
    "foot_bot" => "Andrés Trujillo [Mateus] byUwUr",
    "aid_img" => "http://byuwur.net/mail/aid64.png",
    "aid_msg" => "Este es un mensaje automatizado, si surge alguna duda, podemos ayudar desde",
    "aid_url" => "https://byuwur.net",
    "aid_txt" => "aquí",
    "brand_top" => "byUwUr es una marca de:",
    "brand_bot" => "© " . date("Y") . " [Mateus] byUwUr",
    "brand_img" => "http://byuwur.net/mail/byuwur64.png",
    "brand_url" => "https://byuwur.net",
    "in_img" => "https://byuwur.net/mail/in32.png",
    "in_url" => "https://linkedin.com/in/atrujillomateus",
    "gh_img" => "https://byuwur.net/mail/gh32.png",
    "gh_url" => "https://github.com/byuwur",
    "yt_img" => "https://byuwur.net/mail/yt32.png",
    "yt_url" => "https://youtube.com/byuwur",
    "ig_img" => "https://byuwur.net/mail/ig32.png",
    "ig_url" => "https://instagram.com/byuwur",
    "fb_img" => "https://byuwur.net/mail/fb32.png",
    "fb_url" => "https://facebook.com/byuwur",
    "privacy_txt" => "Política de privacidad",
    "privacy_url" => "https://byuwur.net",
    "drop_txt" => "Darse de baja",
    "drop_url" => "https://byuwur.net",
];
// Define the possible contexts
$MAIL_RES = [
    "byuwur" => [
        ...$MAIL_BASE,
    ],
];
// Check if context is specified
$mail_res = validate_value($_POST["resource"] ?? null) ?? "byuwur";
// Handle the context
switch ($mail_res) {
    case "byuwur":
        $mail_resources = $MAIL_RES[$mail_res];
        break;
    default:
        $mail_resources = $MAIL_RES["byuwur"];
        break;
}
// Check if values need to be changed
$topic_txt = validate_value($_POST["topic_txt"] ?? null);
if ($topic_txt !== null) $mail_resources["topic_txt"] = $topic_txt;
$msg_top = validate_value($_POST["msg_top"] ?? null);
if ($msg_top !== null) $mail_resources["msg_top"] = $msg_top;
$msg_bot = validate_value($_POST["msg_bot"] ?? null, "string", ["allowed_tags" => ["p", "strong", "br"]]);
if ($msg_bot !== null) $mail_resources["msg_bot"] = $msg_bot;
$cta_url = validate_value($_POST["cta_url"] ?? null);
if ($cta_url !== null) $mail_resources["cta_url"] = $cta_url;
$cta_txt = validate_value($_POST["cta_txt"] ?? null);
if ($cta_txt !== null) $mail_resources["cta_txt"] = $cta_txt;
// Create the email based on the template
$mail_html = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="telephone=no" name="format-detection" />
    <title>' . $mail_res . '</title>
</head>
<body style="width: 100%; height: 100%; padding: 0; margin: 0">
    <table cellpadding="0" cellspacing="0" align="center" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: separate; border-spacing: 0px; background-color: #ffffff; width: 600px; padding: 15px 40px">
        <td valign="top" align="left" style="padding: 0; margin: 0; width: 100px">
            <a target="_blank" href="' . $mail_resources["head_url"] . '" style="mso-line-height-rule: exactly; text-decoration: underline; color: #333333; font-size: 14px">
                <img   
                    src="' . $mail_resources["head_img"] . '"
                    alt=""
                    height="80"
                    width="80"
                    style="display: block; font-size: 18px; border: 0; outline: none; text-decoration: none"
                />
            </a>
        </td>
        <td style="padding: 0; margin: 0; width: 20px"></td>
        <td valign="top" align="right" style="padding: 0; margin: 0">
            <h3 style="margin: 0; font-family: Imprima, Arial, sans-serif; mso-line-height-rule: exactly; letter-spacing: 0; font-size: 28px; font-style: normal; font-weight: bold; line-height: 48px !important; color: #333333">' . $mail_resources["head_top"] . '</h3> 
            <p style="margin: 0; mso-line-height-rule: exactly; font-family: Imprima, Arial, sans-serif; line-height: 21px; letter-spacing: 0; color: #333333; font-size: 14px">' . $mail_resources["head_bot"] . '</p>
        </td>
    </table>
    <table cellpadding="0" cellspacing="0" align="center" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: separate; border-spacing: 0px; background-color: #efefef; width: 600px; padding: 20px 40px; border-radius: 20px 20px 0 0">
        <td valign="center" align="left" style="padding: 0; margin: 0; font-size: 20px !important">
            <h3 style="margin: 0; font-family: Imprima, Arial, sans-serif; mso-line-height-rule: exactly; letter-spacing: 0; font-size: 20px !important; font-style: normal; font-weight: bold; line-height: 24px !important; color: #333333">' . $mail_resources["topic_txt"] . '</h3>
        </td>
        <td style="padding: 0; margin: 0; width: 20px"></td>
        <td valign="top" align="right" style="padding: 0; margin: 0">
            <img
                src="' . $mail_resources["topic_img"] . '"
                alt="Confirm email"
                style="display: block; font-size: 18px; border: 0; outline: none; text-decoration: none; border-radius: 15px"
                width="50"
                height="50"
            />
        </td>
    </table>
    <table cellpadding="0" cellspacing="0" align="center" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: separate; border-spacing: 0px; background-color: #efefef; width: 600px; padding: 5px 40px">
        <tr>
            <td valign="center" align="left" style="padding: 20px; margin: 0; border-radius: 10px; background-color: #fafafa">
                <h3 style="margin: 0; font-family: Imprima, Arial, sans-serif; mso-line-height-rule: exactly; letter-spacing: 0; font-size: 24px; font-style: normal; font-weight: bold; line-height: 36px !important; color: #333333">' . $mail_resources["msg_top"] . '</h3>
                <p style="margin: 0; mso-line-height-rule: exactly; font-family: Imprima, Arial, sans-serif; line-height: 27px; letter-spacing: 0; color: #333333; font-size: 18px">​</p>
                <p style="margin: 0; mso-line-height-rule: exactly; font-family: Imprima, Arial, sans-serif; line-height: 27px; letter-spacing: 0; color: #333333; font-size: 18px">' . $mail_resources["msg_bot"] . '</p>
            </td>
        </tr>
        <tr>
            <td valign="center" align="left" style="padding: 20px 0; margin: 0">';
if ($mail_resources["cta_url"]) {
    $mail_html .= '<span style="border-style: solid; border-color: #fafafa; background: ' . $mail_resources["cta_col"] . '; border-width: 3px; display: block; border-radius: 3px; width: auto; mso-hide: all; mso-border-alt: 10px">
                    <a href="' . $mail_resources["cta_url"] . '" target="_blank" style="
                        mso-style-priority: 100 !important;
                        text-decoration: none !important;
                        mso-line-height-rule: exactly;
                        color: #fefefe;
                        font-size: 22px;
                        padding: 15px 20px 15px 20px;
                        display: block;
                        background: ' . $mail_resources["cta_col"] . ';
                        border-radius: 3px;
                        font-family: helvetica, arial, verdana, sans-serif;
                        font-weight: bold;
                        font-style: normal;
                        line-height: 26px !important;
                        width: auto;
                        text-align: center;
                        letter-spacing: 0;
                        mso-padding-alt: 0;
                        mso-border-alt: 10px solid ' . $mail_resources["cta_col"] . ';
                        mso-hide: all;
                        padding-left: 5px;
                        padding-right: 5px;"
                    >' . $mail_resources["cta_txt"] . '</a>
                </span>
                <p style="margin: 0; mso-line-height-rule: exactly; font-family: Imprima, Arial, sans-serif; line-height: 27px !important; letter-spacing: 0; color: #333333; font-size: 12px; text-align: center">' . $mail_resources["cta_msg"] . ' <a href="' . $mail_resources["cta_url"] . '" target="_blank">' . $mail_resources["cta_bak_txt"] . '</a>.​</p>
                <p></p>';
}
$mail_html .= '<p style="margin: 0; mso-line-height-rule: exactly; font-family: Imprima, Arial, sans-serif; line-height: 27px !important; letter-spacing: 0; color: #333333; font-size: 16px">' . $mail_resources["foot_top"] . '<br>' . $mail_resources["foot_bot"] . '</p>
            </td>
        </tr>
        <tr>
            <td style="padding: 0; margin: 0; border-bottom: 1px solid #666666; background: unset; height: 1px; width: 100%; margin: 0px"></td>
        </tr>
    </table>
    <table cellpadding="0" cellspacing="0" align="center" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: separate; border-spacing: 0px; background-color: #efefef; width: 600px; padding: 5px 40px 20px; border-radius: 0 0 20px 20px">
        <td align="center" style="padding: 0; margin: 0; font-size: 0px; padding-right: 20px">
            <img
                src="' . $mail_resources["aid_img"] . '"
                style="display: block; font-size: 18px; border: 0; outline: none; text-decoration: none"
                alt="Ayuda"
                title="Ayuda"
                height="40"
                width="40"
            />
        </td>
        <td align="left" style="padding: 0; margin: 0; font-size: 16px !important">
            <p style="margin: 0; mso-line-height-rule: exactly; font-family: Imprima, Arial, sans-serif; line-height: 24px; letter-spacing: 0; color: #333333; font-size: 16px">
                ​<span>' . $mail_resources["aid_msg"] . '</span>
                <a target="_blank" href="' . $mail_resources["aid_url"] . '" style="mso-line-height-rule: exactly; text-decoration: underline; color: #123456; font-size: 16px !important">' . $mail_resources["aid_txt"] . '</a>.
            </p>
        </td>
    </table>
    <table cellpadding="0" cellspacing="0" align="center" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: separate; border-spacing: 0px; background-color: #ffffff; width: 600px; padding: 20px 40px">
        <td align="left" style="padding: 0; margin: 0; padding: 0">
            <p style="margin: 0; mso-line-height-rule: exactly; font-family: Imprima, Arial, sans-serif; line-height: 18px !important; letter-spacing: 0; color: #333333; font-size: 12px">' . $mail_resources["brand_top"] . '</p>
            <p style="margin: 0; mso-line-height-rule: exactly; font-family: Imprima, Arial, sans-serif; line-height: 18px !important; letter-spacing: 0; color: #333333; font-size: 12px"><strong>' . $mail_resources["brand_bot"] . '​</strong></p>
        </td>
        <td align="center" style="padding: 0 20px; margin: 0; font-size: 0px">
            <a target="_blank" href="' . $mail_resources["brand_url"] . '" style="mso-line-height-rule: exactly; text-decoration: underline; color: #333333; font-size: 14px">
                <img
                    src="' . $mail_resources["brand_img"] . '"
                    alt="[Mateus] byUwUr"
                    style="display: block; font-size: 12px; border: 0; outline: none; text-decoration: none"
                    title="[Mateus] byUwUr"
                    height="60"
                    width="60"
                />
            </a>
        </td>
        <td align="right" valign="center" style="padding: 0; margin: 0; height: 60px; display: flex; gap: 2px; justify-content: end; align-items: center">
            <a target="_blank" href="' . $mail_resources["in_url"] . '" style="mso-line-height-rule: exactly; text-decoration: underline; color: #333333; font-size: 14px"><img src="' . $mail_resources["in_img"] . '" alt="In" title="Linkedin" height="24" width="24" style="display: block; font-size: 18px; border: 0; outline: none; text-decoration: none" /></a>
            <a target="_blank" href="' . $mail_resources["gh_url"] . '" style="mso-line-height-rule: exactly; text-decoration: underline; color: #333333; font-size: 14px"><img src="' . $mail_resources["gh_img"] . '" alt="GitHub" title="GitHub" height="24" width="24" style="display: block; font-size: 18px; border: 0; outline: none; text-decoration: none" /></a>
            <a target="_blank" href="' . $mail_resources["yt_url"] . '" style="mso-line-height-rule: exactly; text-decoration: underline; color: #333333; font-size: 14px"><img src="' . $mail_resources["yt_img"] . '" alt="Yt" title="Youtube" height="24" width="24" style="display: block; font-size: 18px; border: 0; outline: none; text-decoration: none" /></a>
            <a target="_blank" href="' . $mail_resources["ig_url"] . '" style="mso-line-height-rule: exactly; text-decoration: underline; color: #333333; font-size: 14px"><img src="' . $mail_resources["ig_img"] . '" alt="Ig" title="Instagram" height="24" width="24" style="display: block; font-size: 18px; border: 0; outline: none; text-decoration: none" /></a>
            <a target="_blank" href="' . $mail_resources["fb_url"] . '" style="mso-line-height-rule: exactly; text-decoration: underline; color: #333333; font-size: 14px"><img src="' . $mail_resources["fb_img"] . '" alt="Fb" title="Facebook" height="24" width="24" style="display: block; font-size: 18px; border: 0; outline: none; text-decoration: none" /></a>
        </td>
    </table>
    <table cellpadding="0" cellspacing="0" align="center" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: separate; border-spacing: 0px; background-color: #ffffff; width: 600px; padding: 0 40px 20px">
        <td align="center" style="padding: 0; margin: 0">
            <p style="margin: 0; mso-line-height-rule: exactly; font-family: Imprima, Arial, sans-serif; line-height: 21px; letter-spacing: 0; color: #333333; font-size: 13px">
                <a target="_blank" style="mso-line-height-rule: exactly; text-decoration: none; color: #333333; font-size: 14px" href="' . $mail_resources["privacy_url"] . '">' . $mail_resources["privacy_txt"] . '</a>
                &nbsp;•&nbsp;
                <a target="_blank" style="mso-line-height-rule: exactly; text-decoration: none; color: #333333; font-size: 14px" href="' . $mail_resources["drop_url"] . '">' . $mail_resources["drop_txt"] . '</a>
            </p>
        </td>
    </table>
</body>
</html>
';
