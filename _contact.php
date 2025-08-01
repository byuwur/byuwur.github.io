<?php
require_once "./_var.php";
require_once "{$TO_HOME}/spa.php/_common.php";
require_once "{$TO_HOME}/spa.php/_functions.php";
//require_once "{$TO_HOME}/_functions.php";
require_once "{$TO_HOME}/spa.php/_plugins.php";
require_once "{$TO_HOME}/_plugins.php";
//require_once "{$TO_HOME}/_config.php";
require_once "{$TO_HOME}/_routes.php";
//require_once "{$TO_HOME}/spa.php/_router.php";
//require_once "{$TO_HOME}/spa.php/_auth.php";
//require_once "{$TO_HOME}/_auth.php";
require_once "{$TO_HOME}/_common.php";
// --- PHP ---
if (validate_value($_POST["mail_submit"] ?? null) === null) api_respond(400, true, "Invalid form.");
if (validate_value($_POST["g-recaptcha-response"] ?? null) === null) api_respond(400, true, "Invalid captcha.");
if ($_ENV["APP_ENV"] != "DEV")
    if (!json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$_ENV["RECAPTCHA_KEY"]}&response={$_POST["g-recaptcha-response"]}"))->success)
        api_respond(403, true, "Invalid captcha.");

$mail_name = validate_value($_POST["mail_name"] ?? null);
if ($mail_name === null) api_respond(400, true, "Invalid form: name required.");
$mail_email = validate_value($_POST["mail_email"] ?? null, "email");
if ($mail_email === null) api_respond(400, true, "Invalid form: email required.");
$mail_subject = validate_value($_POST["mail_subject"] ?? null);
if ($mail_subject === null) api_respond(400, true, "Invalid form: subject required.");
$mail_message = validate_value($_POST["mail_message"] ?? null);
if ($mail_message === null) api_respond(400, true, "Invalid form: message required.");
$mail_phone = validate_value($_POST["mail_phone"] ?? null);
$easter_name = validate_value($_POST["easter_name"] ?? null);

$_POST["resource"] = "byuwur";
$_POST["topic_txt"] = "CORREO DE CONTACTO";
$_POST["msg_top"] = "Hola, " . ($easter_name ?? "Mateus");
$_POST["msg_bot"] = "Soy"
    . "<strong>{$mail_name}</strong>."
    . "<br>Pueden contactarme en: "
    . "<strong>{$mail_email}</strong>"
    . ($mail_phone !== null ? ", o llamarme al: <strong>{$mail_phone}</strong>" : ".")
    . "<br><br>Asunto: "
    . "<strong>{$mail_subject}</strong>"
    . "<br><br>Necesito decirles:<br>" . escape_html($mail_message);
$_POST["cta_url"] = false;
$_POST["cta_txt"] = "";
require_once "{$TO_HOME}/mail/mail.common.php";

$sg_email = new \SendGrid\Mail\Mail();
$sg_email->setFrom("mateus@byuwur.co", "Andrés Trujillo [Mateus] byUwUr");
$sg_email->addTos([
    "atrujillomateus@gmail.com" => "Mateus"
]);
$sg_email->setSubject($mail_subject);
$sg_email->addContent("text/html", $mail_html);
$sendgrid = new \SendGrid($_ENV["SENDGRID_API_KEY"]);
$cert_file = file_exists("{$TO_HOME}/spa.php/cacert.pem") ? "{$SYSTEM_ROOT}/spa.php/cacert.pem" : "{$SYSTEM_ROOT}/cacert.pem";
$sendgrid->client->setCurlOptions([
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_CAINFO => $cert_file,
]);

try {
    $response = $sendgrid->send($sg_email);
    api_respond($response->statusCode(), false, isset(json_decode($response->body())->errors) ? json_decode($response->body())->errors[0]->message : "", $response->headers());
} catch (Exception $e) {
    api_respond(500, true, "Caught exception" . ($_ENV["APP_ENV"] === "DEV" ? ": {$e->getCode()} = {$e->getMessage()}" : ""));
}
