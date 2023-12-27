<?php
require_once "./_var.php";
if (isset($_GET['lang'])) {
    switch ($_GET['lang']) {
        case 'es':
        case 'en':
            setcookie('lang', $_GET['lang'], time() + 31536000, '/', '', false, false);
            require_once $TO_HOME . "lang/" . $_GET['lang'] . ".php";
            echo "<html lang='" . $_GET['lang'] . "'>";
            $lang = $_GET['lang'];
            break;
    }
} else if (isset($_COOKIE['lang'])) {
    switch ($_COOKIE['lang']) {
        case 'es':
        case 'en':
            require_once $TO_HOME . "lang/" . $_COOKIE['lang'] . ".php";
            echo "<html lang='" . $_COOKIE['lang'] . "'>";
            $lang = $_COOKIE['lang'];
            break;
    }
} else {
    setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
    require_once $TO_HOME . "lang/es.php";
    echo "<html lang='es'>";
    $lang = 'es';
}
if (isset($_GET['theme']))
    switch ($_GET['theme']) {
        case 'dark':
        case 'light':
            setcookie('theme', $_GET['theme'], time() + 31536000, '/', '', false, false);
            $_theme = $_GET['theme'];
            break;
    }
else if (isset($_COOKIE['theme']))
    switch ($_COOKIE['theme']) {
        case 'dark':
        case 'light':
            $_theme = $_COOKIE['theme'];
            break;
    }
else {
    setcookie('theme', 'dark', time() + 31536000, '/', '', false, false);
    $_theme = "dark";
}
$title_index = $_GET["title"] ?? 0;
$titles = [];
