<?php
/* 
 * File: _common.php
 * Desc: Handles common initializations such as language and theme; it also includes project-wide common variables
 * Deps: /_var.php
 * Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr
 */

// This is an example of how you can use SPA.php files along side yours.
require_once "{$TO_HOME}/spa.php/_common.php";
// Just call the SPA.php file and add whatever you need below
if (file_exists("{$TO_HOME}/lang/" . $APP_LANG . ".php")) require_once "{$TO_HOME}/lang/" . $APP_LANG . ".php";
