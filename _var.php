<?php
$system_root = dirname(str_replace("\\", "/", __FILE__)) . "/";
$protocol = ((isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") ? "https://" : "http://");
$path_diff = count(explode("/", str_replace("\\", "/", $_SERVER["SCRIPT_FILENAME"]))) - count(explode("/", str_replace("\\", "/", __FILE__)));
$to_home = $path_diff != 0 ? str_repeat("../", $path_diff) : "./";
$this_path = str_replace("\\", "/",  dirname($protocol . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"])) . "/";
$home_path = implode("/", array_slice(explode("/", $this_path), 0, -1 - $path_diff)) . "/";
// You must include ./_config.php to connect to DB using these relative/absolute paths
//var_dump(get_defined_vars());
