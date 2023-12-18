<?php
require_once "./_var.php";
$routes = [
    "/" => ["URI" => "home.v2.php", "GET" => [], "POST" => []],
    "/es" => ["URI" => "home.v2.php", "GET" => ["lang" => "es"], "POST" => []],
    "/en" => ["URI" => "home.v2.php", "GET" => ["lang" => "en"], "POST" => []],
    "/dark" => ["URI" => "home.v2.php", "GET" => ["theme" => "dark", "lang" => "en"], "POST" => []],
    "/light" => ["URI" => "home.v2.php", "GET" => ["theme" => "light", "lang" => "en"], "POST" => []],
    "/oscuro" => ["URI" => "home.v2.php", "GET" => ["theme" => "dark", "lang" => "es"], "POST" => []],
    "/claro" => ["URI" => "home.v2.php", "GET" => ["theme" => "light", "lang" => "es"], "POST" => []],
    "/old" => ["URI" => "home.v1.php", "GET" => [], "POST" => []],
    "/v1" => ["URI" => "home.v1.php", "GET" => [], "POST" => []],
    "/v1.es" => ["URI" => "home.v1.php", "GET" => ["lang" => "es"], "POST" => []],
    "/v1.en" => ["URI" => "home.v1.php", "GET" => ["lang" => "en"], "POST" => []],
    "/resume" => ["FILE" => "resume.es.pdf"],
    "/resume.es" => ["FILE" => "resume.es.pdf"],
    "/resume.en" => ["FILE" => "resume.en.pdf"]
];
require_once $TO_HOME . "_functions.php";
require_once $TO_HOME . "_router.php";
