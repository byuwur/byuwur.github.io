<?php
/*
 * File: _routes.php
 * Desc: Defines the routing map for the application, including URIs, GET/POST parameters, and associated components.
 * Deps: none
 * Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr
 */

// URIs
$ROUTE_ROOT = "/";
$ROUTE_V1 = "v1";
$ROUTE_RESUME = "resume";
$ROUTE_NESTUX = "nestux";
$ROUTE_MARCO = "marco";
$ROUTE_MNM = "mnm.team";
$ROUTE_MNM_PROJECTS_ES = "proyectos";
$ROUTE_MNM_SERVICES_ES = "servicios";
$ROUTE_MNM_CONTACT_ES = "contacto";
$ROUTE_MNM_PROJECTS_EN = "projects";
$ROUTE_MNM_SERVICES_EN = "services";
$ROUTE_MNM_CONTACT_EN = "contact";
$ROUTE_MNM_RESERVELAPP = "reservelapp";
$ROUTE_MNM_LIMONTECH = "limontech";
$ROUTE_MNM_RENN = "renn";
$ROUTE_MNM_REDI = "redi";

switch ($app_lang) {
    case "es":
    default:
        $ROUTE_HOME = "inicio";
        $ROUTE_MNM_PROJECTS = "proyectos";
        $ROUTE_MNM_SERVICES = "servicios";
        $ROUTE_MNM_CONTACT = "contacto";
        break;
    case "en":
        $ROUTE_HOME = "home";
        $ROUTE_MNM_PROJECTS = "projects";
        $ROUTE_MNM_SERVICES = "services";
        $ROUTE_MNM_CONTACT = "contact";
        break;
}

$ROUTE_ES = "es";
$ROUTE_EN = "en";
$ROUTE_ERROR = "error";
$ROUTE_LOGIN = "login";
$ROUTE_LOGOUT = "logout";
$ROUTE_DEMO = "demo";
$ROUTE_COOKIES = "cookies";

// Default components to include on each route
$COMPONENTS_EMPTY = ["COMPONENT" => ["nav#spa-nav" => "", "footer#spa-foot" => ""]];
$V0_COMPONENTS = ["COMPONENT" => ["nav#spa-nav" => "/v0.mnm/sidebar.php"]];
$V1_COMPONENTS = ["COMPONENT" => ["nav#spa-nav" => "/sidebar.old.php"]];
$V2_COMPONENTS = ["COMPONENT" => ["nav#spa-nav" => "/sidebar.php"]];

// Route definitions
$routes = [
    // Format: "/uri" => ["URI" => "/file.php", "GET" => [...], "POST" => [...], "COMPONENT" => [...]]

    // "/"
    "{$ROUTE_ROOT}" => ["URI" => "/main.php", ...$V2_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_ES}" => ["URI" => "", "GET" => ["lang" => "es"], ...$V2_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_EN}" => ["URI" => "", "GET" => ["lang" => "en"], ...$V2_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_V1}" => ["URI" => "/main.old.php", ...$V1_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_V1}/{$ROUTE_ES}" => ["URI" => "/main.old.php", "GET" => ["lang" => "es"], ...$V1_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_V1}/{$ROUTE_EN}" => ["URI" => "/main.old.php", "GET" => ["lang" => "en"], ...$V1_COMPONENTS],
    // files
    "{$ROUTE_ROOT}{$ROUTE_RESUME}" => ["FILE" => "Mateus.es.pdf"],
    "{$ROUTE_ROOT}{$ROUTE_RESUME}.{$ROUTE_ES}" => ["FILE" => "Mateus.es.pdf"],
    "{$ROUTE_ROOT}{$ROUTE_RESUME}.{$ROUTE_EN}" => ["FILE" => "Mateus.en.pdf"],
    // "v1"
    "{$ROUTE_ROOT}{$ROUTE_NESTUX}" => ["URI" => "/v1.nestux/home.php", ...$COMPONENTS_EMPTY],
    "{$ROUTE_ROOT}{$ROUTE_NESTUX}/{$ROUTE_ES}" => ["URI" => "/v1.nestux/home.php", "GET" => ["lang" => "es"], ...$COMPONENTS_EMPTY],
    "{$ROUTE_ROOT}{$ROUTE_NESTUX}/{$ROUTE_EN}" => ["URI" => "/v1.nestux/home.php", "GET" => ["lang" => "en"], ...$COMPONENTS_EMPTY],

    "{$ROUTE_ROOT}{$ROUTE_MARCO}" => ["URI" => "/v1.marco/home.php", ...$COMPONENTS_EMPTY],
    "{$ROUTE_ROOT}{$ROUTE_MARCO}/{$ROUTE_ES}" => ["URI" => "/v1.marco/home.php", "GET" => ["lang" => "es"], ...$COMPONENTS_EMPTY],
    "{$ROUTE_ROOT}{$ROUTE_MARCO}/{$ROUTE_EN}" => ["URI" => "/v1.marco/home.php", "GET" => ["lang" => "en"], ...$COMPONENTS_EMPTY],
    // "mnm.team/"
    "{$ROUTE_ROOT}{$ROUTE_MNM}" => ["URI" => "/v0.mnm/about.php", ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_ES}" => ["URI" => "/v0.mnm/about.php", "GET" => ["lang" => "es"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_EN}" => ["URI" => "/v0.mnm/about.php", "GET" => ["lang" => "en"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_PROJECTS_ES}" => ["URI" => "/v0.mnm/work.php", "GET" => ["lang" => "es"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_SERVICES_ES}" => ["URI" => "/v0.mnm/services.php", "GET" => ["lang" => "es"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_CONTACT_ES}" => ["URI" => "/v0.mnm/contact.php", "GET" => ["lang" => "es"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_PROJECTS_EN}" => ["URI" => "/v0.mnm/work.php", "GET" => ["lang" => "en"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_SERVICES_EN}" => ["URI" => "/v0.mnm/services.php", "GET" => ["lang" => "en"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_CONTACT_EN}" => ["URI" => "/v0.mnm/contact.php", "GET" => ["lang" => "en"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_RESERVELAPP}" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "3"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_LIMONTECH}" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "2"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_RENN}" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "1"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_MNM_REDI}" => ["URI" => "/v0.mnm/work_single.php", "GET" => ["work" => "0"], ...$V0_COMPONENTS],
    "{$ROUTE_ROOT}{$ROUTE_MNM}/{$ROUTE_COOKIES}" => ["URI" => "/v0.mnm/cookies.php", "GET" => ["work" => "0"], ...$COMPONENTS_EMPTY],
];
