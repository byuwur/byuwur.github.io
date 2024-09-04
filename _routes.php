<?php
/*
 * File: _routes.php
 * Desc: Defines the routing map for the application, including URIs, GET/POST parameters, and associated components.
 * Deps: none
 * Copyright (c) 2024 Andrés Trujillo [Mateus] byUwUr
 */

// Hierarchy
$ROOT_ROUTE = "/";
$MNM_ROUTE = "mnm.team/";

// Default components to include on each route
$V0_COMPONENTS = ["COMPONENT" => ["nav#header" => "/v0.mnm/sidebar.php",]];
$V1_COMPONENTS = ["COMPONENT" => ["nav#header" => "/sidebar.old.php",]];
$V1_COMPONENTS_EMPTY = ["COMPONENT" => ["nav#header" => "",]];
$V2_COMPONENTS = ["COMPONENT" => ["nav#header" => "/sidebar.php",]];

// Route definitions
$routes = [
    // Format: "/uri" => ["URI" => "/file.php", "GET" => [...], "POST" => [...], "COMPONENT" => [...]]

    // "/"
    $ROOT_ROUTE => ["URI" => "/main.php", ...$V2_COMPONENTS],
    $ROOT_ROUTE . "v1" => ["URI" => "/main.old.php", ...$V1_COMPONENTS],
    $ROOT_ROUTE . "es" => ["URI" => "", "GET" => ["lang" => "es"]],
    $ROOT_ROUTE . "en" => ["URI" => "", "GET" => ["lang" => "en"]],
    //$ROOT_ROUTE . "v2" => ["URI" => "/home.v2.php", ...$V2_COMPONENTS],
    //$ROOT_ROUTE . "v1" => ["URI" => "/home.v1.php", ...$V1_COMPONENTS],
    $ROOT_ROUTE . "resume" => ["FILE" => "resume.es.pdf"],
    $ROOT_ROUTE . "resume.es" => ["FILE" => "resume.es.pdf"],
    $ROOT_ROUTE . "resume.en" => ["FILE" => "resume.en.pdf"],
    // "v1"
    $ROOT_ROUTE . "nestux" => ["URI" => "/v1.nestux/home.php", ...$V1_COMPONENTS_EMPTY],
    $ROOT_ROUTE . "marco" => ["URI" => "/v1.marco/home.php", ...$V1_COMPONENTS_EMPTY],
    // "mnm.team/"
    $ROOT_ROUTE . "mnm.team" => ["URI" => "/v0.mnm/main.php", ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "work" => ["URI" => "/v0.mnm/work.php", ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "about" => ["URI" => "/v0.mnm/about.php", ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "services" => ["URI" => "/v0.mnm/services.php", ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "contact" => ["URI" => "/v0.mnm/contact.php", ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "reservelapp" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "3"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "limontech" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "2"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "renn" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "1"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "redi" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "0"], ...$V0_COMPONENTS],
];
