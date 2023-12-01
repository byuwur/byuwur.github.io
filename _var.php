<?php
// require_once './_var.php' must be the first line of every file
// require_once $TO_HOME . '_config.php' should be the very next line if needed
$SYSTEM_ROOT = dirname(str_replace("\\", "/", __FILE__)) . "/";
$PROTOCOL = ((isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") ? "https://" : "http://");
$PATH_DIFF = count(explode("/", str_replace("\\", "/", $_SERVER["SCRIPT_FILENAME"]))) - count(explode("/", str_replace("\\", "/", __FILE__)));
$TO_HOME = $PATH_DIFF ? str_repeat("../", $PATH_DIFF) : "./";
$THIS_PATH = str_replace("\\", "/",  dirname($PROTOCOL . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"])) . "/";
$HOME_PATH = implode("/", array_slice(explode("/", $THIS_PATH), 0, -1 - $PATH_DIFF)) . "/";

// --- declarations ---
$DNI_TYPES = [
    (object)['name' => '--- Seleccionar ---', 'value' => '0'],
    (object)['name' => 'Número único de identificación personal (NUIP)', 'value' => '1'],
    (object)['name' => 'Registro civil (RC)', 'value' => '2'],
    (object)['name' => 'Tarjeta de identidad (TI)', 'value' => '3'],
    (object)['name' => 'Cédula de ciudadanía (CC)', 'value' => '4'],
    (object)['name' => 'Cédula de extranjería (CE)', 'value' => '5'],
    (object)['name' => 'Pasaporte (PS)', 'value' => '6'],
    (object)['name' => 'Otro...', 'value' => '9']
];

$DAYS_OF_WEEK = [
    (object)['name' => '--- Seleccionar ---', 'value' => '0'],
    (object)['name' => 'Lunes', 'value' => '1'],
    (object)['name' => 'Martes', 'value' => '2'],
    (object)['name' => 'Miércoles', 'value' => '3'],
    (object)['name' => 'Jueves', 'value' => '4'],
    (object)['name' => 'Viernes', 'value' => '5'],
    (object)['name' => 'Sábado', 'value' => '6'],
    (object)['name' => 'Domingo', 'value' => '7'],
];
