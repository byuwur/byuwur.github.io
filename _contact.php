<?php
require_once "./_var.php";
require_once $TO_HOME . "_functions.php";
require_once $TO_HOME . "_config.php";
//require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "_router.php";
//require_once $TO_HOME . "_auth.php";
//require_once $TO_HOME . "common.php";
// --- PHP ---
if (!validate_value($_POST["mail_submit"] ?? null)) api_respond(400, true, "Invalid form.");
if (!validate_value($_POST["g-recaptcha-response"] ?? null)) api_respond(400, true, "Invalid captcha.");
if (!json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $_ENV["RECAPTCHA_KEY"] . "&response=" . $_POST["g-recaptcha-response"]))->success) api_respond(403, true, "Invalid captcha.");
if (!validate_value($_POST["mail_name"] ?? null)) api_respond(400, true, "Invalid form: name required.");
if (!validate_value($_POST["mail_email"] ?? null, "email")) api_respond(400, true, "Invalid form: email required.");
if (!validate_value($_POST["mail_subject"] ?? null)) api_respond(400, true, "Invalid form: subject required.");
if (!validate_value($_POST["mail_message"] ?? null)) api_respond(400, true, "Invalid form: message required.");
$easter_name = validate_value($_POST["easter_name"] ?? null) ? sanitize_value($_POST["easter_name"]) : "Mateus";
$message = "Soy <strong>" . sanitize_value($_POST["mail_name"]) . "</strong>.<br>Pueden contactarme en: <strong>" . sanitize_value($_POST["mail_email"], "email") . "</strong>";
$message .= validate_value($_POST["mail_phone"] ?? null) ? ", o llamarme al: <strong>" . sanitize_value($_POST["mail_phone"]) . "</strong>" : ".";
$message .= "<br><br>Asunto: <strong>" . sanitize_value($_POST["mail_subject"]) . "</strong><br><br>Necesito decirles:<br>" . escape_html(sanitize_value($_POST["mail_message"]));
$html = 'Hola, ' . $easter_name . '.<br>'. $message;
//echo $html;
$sg_email = new \SendGrid\Mail\Mail();
$sg_email->setFrom("mateus@byuwur.net", "[Mateus] byUwUr");
$sg_email->addTos([
    "atrujillomateus@gmail.com" => "Mateus"
]);
$sg_email->setSubject(sanitize_value($_POST["mail_subject"]));
$sg_email->addContent("text/html", $html);
$sendgrid = new \SendGrid($_ENV["SENDGRID_API_KEY"]);
$sendgrid->client->setCurlOptions([
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_CAINFO => "${SYSTEM_ROOT}/cacert.pem",
]);
try {
    $response = $sendgrid->send($sg_email);
    api_respond($response->statusCode(), false, isset(json_decode($response->body())->errors) ? json_decode($response->body())->errors[0]->message : "", $response->headers());
} catch (Exception $e) {
    api_respond(500, true, "Caught exception" . ($_ENV["APP_ENV"] == "DEV" ? ": " . $e->getCode() . " = " . $e->getMessage() : ""));
}
