<?php
/* 
 * File: _plugins.php
 * Desc: Handles invokation and initialization of the composer libraries
 * Deps: /_var.php
 * Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr
 */

// This is an example of how you can use SPA.php files along side yours.
require_once $TO_HOME . "spa.php/_plugins.php";
// Just call the SPA.php file and add whatever you need below
$dotenv = Dotenv\Dotenv::createImmutable($TO_HOME);
$dotenv->load();
/*
Now, if you're certain that everything is installed, you can just do:
    require_once $TO_HOME . "vendor/autoload.php";
or
    if (file_exists($TO_HOME . "vendor/autoload.php")) require_once $TO_HOME . "vendor/autoload.php";
*/
