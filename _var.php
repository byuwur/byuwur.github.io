<?php
// require_once './_var.php' must be the first line of every file
// require_once $to_home . '_config.php' should be the very next line if needed
$system_root = dirname(str_replace("\\", "/", __FILE__)) . "/";
$protocol = ((isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") ? "https://" : "http://");
$path_diff = count(explode("/", str_replace("\\", "/", $_SERVER["SCRIPT_FILENAME"]))) - count(explode("/", str_replace("\\", "/", __FILE__)));
$to_home = $path_diff ? str_repeat("../", $path_diff) : "./";
$this_path = str_replace("\\", "/",  dirname($protocol . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"])) . "/";
$home_path = implode("/", array_slice(explode("/", $this_path), 0, -1 - $path_diff)) . "/";

// --- declarations ---
$dniTypes = [
    (object)['name' => '--- Seleccionar ---', 'value' => '0'],
    (object)['name' => 'Número único de identificación personal (NUIP)', 'value' => '1'],
    (object)['name' => 'Registro civil (RC)', 'value' => '2'],
    (object)['name' => 'Tarjeta de identidad (TI)', 'value' => '3'],
    (object)['name' => 'Cédula de ciudadanía (CC)', 'value' => '4'],
    (object)['name' => 'Cédula de extranjería (CE)', 'value' => '5'],
    (object)['name' => 'Pasaporte (PS)', 'value' => '6'],
    (object)['name' => 'Otro...', 'value' => '9']
];

$days = [
    (object)['name' => '--- Seleccionar ---', 'value' => '0'],
    (object)['name' => 'Lunes', 'value' => '1'],
    (object)['name' => 'Martes', 'value' => '2'],
    (object)['name' => 'Miércoles', 'value' => '3'],
    (object)['name' => 'Jueves', 'value' => '4'],
    (object)['name' => 'Viernes', 'value' => '5'],
    (object)['name' => 'Sábado', 'value' => '6'],
    (object)['name' => 'Domingo', 'value' => '7'],
];
