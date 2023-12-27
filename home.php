<!DOCTYPE html>
<?php
require_once "./_var.php";
$routes = [
    "/" => ["URI" => "home.v2.php", "GET" => [], "POST" => [], "COMPONENT" => ["head" => "v2.head.php"]],
    "/new" => ["URI" => "home.v2.php", "GET" => [], "POST" => [], "COMPONENT" => ["head" => "v2.head.php"]],
    "/v2" => ["URI" => "home.v2.php", "GET" => [], "POST" => [], "COMPONENT" => ["head" => "v2.head.php"]],
    "/es" => ["URI" => "home.v2.php", "GET" => ["lang" => "es"], "POST" => [], "COMPONENT" => ["head" => "v2.head.php"]],
    "/en" => ["URI" => "home.v2.php", "GET" => ["lang" => "en"], "POST" => [], "COMPONENT" => ["head" => "v2.head.php"]],
    "/dark" => ["URI" => "home.v2.php", "GET" => ["theme" => "dark", "lang" => "en"], "POST" => [], "COMPONENT" => ["head" => "v2.head.php"]],
    "/light" => ["URI" => "home.v2.php", "GET" => ["theme" => "light", "lang" => "en"], "POST" => [], "COMPONENT" => ["head" => "v2.head.php"]],
    "/oscuro" => ["URI" => "home.v2.php", "GET" => ["theme" => "dark", "lang" => "es"], "POST" => [], "COMPONENT" => ["head" => "v2.head.php"]],
    "/claro" => ["URI" => "home.v2.php", "GET" => ["theme" => "light", "lang" => "es"], "POST" => [], "COMPONENT" => ["head" => "v2.head.php"]],
    "/old" => ["URI" => "home.v1.php", "GET" => [], "POST" => [], "COMPONENT" => ["head" => "v1.head.php"]],
    "/v1" => ["URI" => "home.v1.php", "GET" => [], "POST" => [], "COMPONENT" => ["head" => "v1.head.php"]],
    "/v1.es" => ["URI" => "home.v1.php", "GET" => ["lang" => "es"], "POST" => [], "COMPONENT" => ["head" => "v1.head.php"]],
    "/v1.en" => ["URI" => "home.v1.php", "GET" => ["lang" => "en"], "POST" => [], "COMPONENT" => ["head" => "v1.head.php"]],
    "/resume" => ["FILE" => "resume.es.pdf"],
    "/resume.es" => ["FILE" => "resume.es.pdf"],
    "/resume.en" => ["FILE" => "resume.en.pdf"]
];
require_once $TO_HOME . "_functions.php";
require_once $TO_HOME . "_router.php";
require_once $TO_HOME . "common.php";
?>

<head>
    <?php require_once $TO_HOME . "v2.head.php"; ?>
</head>

<body>
    <div class="loading">
        <div class="load-circle-back"></div>
        <div class="load-circle-fore"></div>
        <div class="load-text"><?= $_load; ?></div>
    </div>
    <div id="particles"></div>
    <div class="side-video" style="animation: float 5s infinite;"></div>
    <div id="spa-page-content-container"></div>
</body>

</html>