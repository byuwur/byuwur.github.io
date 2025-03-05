<?php
/* 
 * File: _common.php
 * Desc: Handles common initializations such as language and theme; it also includes project-wide common variables
 * Deps: /_var.php
 * Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr
 */

require_once $TO_HOME . "spa.php/_common.php";

if (file_exists($TO_HOME . "lang/" . $app_lang . ".php")) require_once $TO_HOME . "lang/" . $app_lang . ".php";
