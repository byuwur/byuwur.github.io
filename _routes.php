<?php
/*
 * File: _routes.php
 * Desc: Defines the routing map for the application, including URIs, GET/POST parameters, and associated components.
 * Deps: none
 * Copyright (c) 2023 Andrés Trujillo [Mateus] byUwUr
 */

// Hierarchy
$ROOT_ROUTE = "/";

// Default components to include on each route
$ROOT_COMPONENTS = ["COMPONENT" => ["#header" => "/header.php", "#footer" => "/footer.php"]];

// Route definitions
$routes = [
    // Format: "/uri" => ["URI" => "/file.php", "GET" => [...], "POST" => [...], "COMPONENT" => [...]]

    // "/"
    $ROOT_ROUTE => ["URI" => "/home.v2.php"],
    $ROOT_ROUTE . "new" => ["URI" => "/home.v2.php"],
    $ROOT_ROUTE . "v2" => ["URI" => "/home.v2.php"],
    $ROOT_ROUTE . "es" => ["URI" => "/home.v2.php", "GET" => ["lang" => "es"]],
    $ROOT_ROUTE . "en" => ["URI" => "/home.v2.php", "GET" => ["lang" => "en"]],
    $ROOT_ROUTE . "dark" => ["URI" => "/home.v2.php", "GET" => ["theme" => "dark", "lang" => "en"]],
    $ROOT_ROUTE . "light" => ["URI" => "/home.v2.php", "GET" => ["theme" => "light", "lang" => "en"]],
    $ROOT_ROUTE . "oscuro" => ["URI" => "/home.v2.php", "GET" => ["theme" => "dark", "lang" => "es"]],
    $ROOT_ROUTE . "claro" => ["URI" => "/home.v2.php", "GET" => ["theme" => "light", "lang" => "es"]],
    $ROOT_ROUTE . "old" => ["URI" => "/home.v1.php"],
    $ROOT_ROUTE . "v1" => ["URI" => "/home.v1.php"],
    $ROOT_ROUTE . "v1.es" => ["URI" => "/home.v1.php", "GET" => ["lang" => "es"]],
    $ROOT_ROUTE . "v1.en" => ["URI" => "/home.v1.php", "GET" => ["lang" => "en"]],
    $ROOT_ROUTE . "resume" => ["FILE" => "resume.es.pdf"],
    $ROOT_ROUTE . "resume.es" => ["FILE" => "resume.es.pdf"],
    $ROOT_ROUTE . "resume.en" => ["FILE" => "resume.en.pdf"]
];
