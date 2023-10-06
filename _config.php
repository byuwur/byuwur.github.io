<?php
// You must include ./_var.php to get the relative/absolute paths
require_once $to_home . "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable($to_home);
$dotenv->load();

//$mysqli = new mysqli($_ENV["DB_HOST"], $_ENV["DB_USER"], $_ENV["DB_PASS"], $_ENV["DB_NAME"], $_ENV["DB_PORT"]);
//if ($mysqli->connect_errno) die("Connection failed: " . $mysqli->connect_errno . " = " . $mysqli->connect_error);

// You must include ./_functions.php to use common functions
require_once $to_home . "_functions.php";
