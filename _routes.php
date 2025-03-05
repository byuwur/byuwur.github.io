<?php
/*
 * File: _routes.php
 * Desc: Defines the routing map for the application, including URIs, GET/POST parameters, and associated components.
 * Deps: none
 * Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr
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
    $ROOT_ROUTE . "es" => ["URI" => "", "GET" => ["lang" => "es"], ...$V2_COMPONENTS],
    $ROOT_ROUTE . "en" => ["URI" => "", "GET" => ["lang" => "en"], ...$V2_COMPONENTS],
    $ROOT_ROUTE . "v1" => ["URI" => "/main.old.php", ...$V1_COMPONENTS],
    $ROOT_ROUTE . "v1/es" => ["URI" => "/main.old.php", "GET" => ["lang" => "es"], ...$V1_COMPONENTS],
    $ROOT_ROUTE . "v1/en" => ["URI" => "/main.old.php", "GET" => ["lang" => "en"], ...$V1_COMPONENTS],
    // files
    $ROOT_ROUTE . "resume" => ["FILE" => "Mateus.es.pdf"],
    $ROOT_ROUTE . "resume.es" => ["FILE" => "Mateus.es.pdf"],
    $ROOT_ROUTE . "resume.en" => ["FILE" => "Mateus.en.pdf"],
    // "v1"
    $ROOT_ROUTE . "nestux" => ["URI" => "/v1.nestux/home.php", ...$V1_COMPONENTS_EMPTY],
    $ROOT_ROUTE . "nestux/es" => ["URI" => "/v1.nestux/home.php", "GET" => ["lang" => "es"], ...$V1_COMPONENTS_EMPTY],
    $ROOT_ROUTE . "nestux/en" => ["URI" => "/v1.nestux/home.php", "GET" => ["lang" => "en"], ...$V1_COMPONENTS_EMPTY],
    $ROOT_ROUTE . "marco" => ["URI" => "/v1.marco/home.php", ...$V1_COMPONENTS_EMPTY],
    $ROOT_ROUTE . "marco/es" => ["URI" => "/v1.marco/home.php", "GET" => ["lang" => "es"], ...$V1_COMPONENTS_EMPTY],
    $ROOT_ROUTE . "marco/en" => ["URI" => "/v1.marco/home.php", "GET" => ["lang" => "en"], ...$V1_COMPONENTS_EMPTY],
    // "mnm.team/"
    $ROOT_ROUTE . "mnm.team" => ["URI" => "/v0.mnm/about.php", ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "es" => ["URI" => "/v0.mnm/about.php", "GET" => ["lang" => "es"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "en" => ["URI" => "/v0.mnm/about.php", "GET" => ["lang" => "en"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "projects" => ["URI" => "/v0.mnm/work.php", "GET" => ["lang" => "es"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "services" => ["URI" => "/v0.mnm/services.php", "GET" => ["lang" => "es"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "contact" => ["URI" => "/v0.mnm/contact.php", "GET" => ["lang" => "es"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "proyectos" => ["URI" => "/v0.mnm/work.php", "GET" => ["lang" => "en"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "servicios" => ["URI" => "/v0.mnm/services.php", "GET" => ["lang" => "en"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "contacto" => ["URI" => "/v0.mnm/contact.php", "GET" => ["lang" => "en"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "reservelapp" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "3"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "limontech" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "2"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "renn" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "1"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "redi" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "0"], ...$V0_COMPONENTS],
    $ROOT_ROUTE . $MNM_ROUTE . "cookies" => ["URI" => "/v0.mnm/cookies.php", "GET" => ["work" => "0"]],
];
