<?php
/*
 * File: _routes.php
 * Desc: Defines the routing map for the application, including URIs, GET/POST parameters, and associated components.
 * Deps: none
 * Copyright (c) 2024 Andrés Trujillo [Mateus] byUwUr
 */

// Hierarchy
$ROOT_ROUTE = "/";

// Default components to include on each route
$V1_COMPONENTS = ["COMPONENT" => ["nav#header" => "/sidebar.v1.php",]];
$V2_COMPONENTS = ["COMPONENT" => ["nav#header" => "",]];

// Route definitions
$routes = [
    // Format: "/uri" => ["URI" => "/file.php", "GET" => [...], "POST" => [...], "COMPONENT" => [...]]

    // "/"
    $ROOT_ROUTE => ["URI" => "/home.v2.php"],
    $ROOT_ROUTE . "es" => ["URI" => "", "GET" => ["lang" => "es"]],
    $ROOT_ROUTE . "en" => ["URI" => "", "GET" => ["lang" => "en"]],
    $ROOT_ROUTE . "v2" => ["URI" => "/home.v2.php", ...$V2_COMPONENTS],
    $ROOT_ROUTE . "v1" => ["URI" => "/home.v1.php", ...$V1_COMPONENTS],
    $ROOT_ROUTE . "resume" => ["FILE" => "resume.es.pdf"],
    $ROOT_ROUTE . "resume.es" => ["FILE" => "resume.es.pdf"],
    $ROOT_ROUTE . "resume.en" => ["FILE" => "resume.en.pdf"],
    $ROOT_ROUTE . "nestux" => ["URI" => "/v1.nestux/home.php"],
    $ROOT_ROUTE . "marco" => ["URI" => "/v1.marco/home.php"],
];
