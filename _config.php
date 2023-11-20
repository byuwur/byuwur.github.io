<?php
// You must require_once './_var.php' before this file to get the relative/absolute paths
require_once $to_home . "_functions.php";
require_once $to_home . "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable($to_home);
$dotenv->load();

/*try {
    $mysqli = new mysqli($_ENV["DB_HOST"], $_ENV["DB_USER"], $_ENV["DB_PASS"], $_ENV["DB_NAME"], $_ENV["DB_PORT"]);
} catch (Exception $e) {
    api_respond(500, true, "Connection failed" . ($_ENV["APP_ENV"] == "DEV" ? ": " . $e->getCode() . " = " . $e->getMessage() : ""));
}*/

require_once $to_home . "_auth.php";
