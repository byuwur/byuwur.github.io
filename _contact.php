<?php
require_once "./_var.php";
require_once $to_home . "_config.php";
suppressErrors();
if (!isset($_POST["mail_submit"])) api_respond(400, true, "Invalid form.");
if (!isset($_POST["g-recaptcha-response"])) api_respond(400, true, "Invalid captcha.");
if (!json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $_ENV["RECAPTCHA_KEY"] . "&response=" . $_POST["g-recaptcha-response"]))->success) api_respond(403, true, "Invalid captcha.");
if (!isset($_POST["mail_name"]) || empty($_POST["mail_name"])) api_respond(400, true, "Invalid form: name required.");
if (!isset($_POST["mail_email"]) || empty($_POST["mail_email"]) || !filter_var($_POST["mail_email"], FILTER_VALIDATE_EMAIL)) api_respond(400, true, "Invalid form: email required.");
if (!isset($_POST["mail_subject"]) || empty($_POST["mail_subject"])) api_respond(400, true, "Invalid form: subject required.");
if (!isset($_POST["mail_message"]) || empty($_POST["mail_message"])) api_respond(400, true, "Invalid form: message required.");

$easter_name = isset($_POST["easter_name"]) && !empty($_POST["easter_name"]) ? $_POST["easter_name"] : "Mateus";
$message = "Soy <strong>" . $_POST["mail_name"] . "</strong>.<br>Pueden contactarme en: <strong>" . $_POST["mail_email"] . "</strong>";
$message .= isset($_POST["mail_phone"]) && !empty($_POST["mail_phone"]) ? ", o llamarme al: <strong>" . $_POST["mail_phone"] . "</strong>" : ".";
$message .= "<br><br>Asunto: <strong>" . $_POST["mail_subject"] . "</strong><br><br>Necesito decirles:<br>" . escape2html($_POST["mail_message"]);

$html = 'Hola, ' . $easter_name . '.<br>'. $message;
//echo $html;

$sg_email = new \SendGrid\Mail\Mail();
$sg_email->setFrom("mateus@byuwur.net", "[Mateus] byUwUr");
$sg_email->addTos([
    "atrujillomateus@gmail.com" => "Mateus"
]);
$sg_email->setSubject($_POST["mail_subject"]);
$sg_email->addContent("text/html", $html);

$sendgrid = new \SendGrid($_ENV["SENDGRID_API_KEY"]);
$sendgrid->client->setCurlOptions([
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_CAINFO => $system_root . "cacert.pem",
]);

try {
    $response = $sendgrid->send($sg_email);
    api_respond($response->statusCode(), false, isset(json_decode($response->body())->errors) ? json_decode($response->body())->errors[0]->message : "", $response->headers());
} catch (Exception $e) {
    api_respond(500, true, "Caught exception" . ($_ENV["APP_ENV"] == "DEV" ? ": " . $e->getCode() . " = " . $e->getMessage() : ""));
}
