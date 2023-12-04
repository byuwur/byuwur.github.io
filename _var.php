<?php
// require_once './_var.php' must be the first line of every file
// require_once $TO_HOME . '_config.php' should be the very next line if needed
$SYSTEM_ROOT = dirname(str_replace("\\", "/", __FILE__)) . "/";
$PROTOCOL = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on" ? "https://" : "http://";
$PATH_DIFF = count(explode("/", str_replace("\\", "/", $_SERVER["SCRIPT_FILENAME"]))) - count(explode("/", str_replace("\\", "/", __FILE__)));
$TO_HOME = $PATH_DIFF ? str_repeat("../", $PATH_DIFF) : "./";
$THIS_PATH = str_replace("\\", "/",  dirname($PROTOCOL . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"])) . "/";
$HOME_PATH = implode("/", array_slice(explode("/", $THIS_PATH), 0, -1 - $PATH_DIFF)) . "/";

// --- declarations ---
$DNI_TYPES = [
    1 => "Número único de identificación personal (NUIP)",
    2 => "Registro civil (RC)",
    3 => "Tarjeta de identidad (TI)",
    4 => "Cédula de ciudadanía (CC)",
    5 => "Cédula de extranjería (CE)",
    6 => "Pasaporte (PS)",
    9 => "Otro..."
];
$BLOOD_TYPES = ["O+", "O-", "A+", "A-", "B+", "B-", "AB+", "AB-"];
$DAYS_OF_WEEK = ["--- Seleccionar día de la semana ---", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
