<?php


require_once "functions.php";


$requestedURL = $_SERVER["REQUEST_URI"];

$routes = [
    "/simple_user_management_system/" =>            "views/home_view.php",
    "/simple_user_management_system/index" =>       "views/home_view.php",
    "/simple_user_management_system/home" =>        "views/home_view.php",
    "/simple_user_management_system/index.php" =>   "views/home_view.php",
    "/simple_user_management_system/about" =>       "views/about_view.php",
    "/simple_user_management_system/about.php" =>   "views/about_view.php",
    "/simple_user_management_system/users" =>       "views/about_view.php",
    "/simple_user_management_system/users.php" =>   "views/about_view.php",
];

if (array_key_exists($requestedURL, $routes)) {
    require $routes[$requestedURL];
} else {
    http_response_code(404);
    require "views/404.php";
    die();
}

// switch($requestedURL) {
//     case "/simple_user_management_system/":
//     case "/simple_user_management_system/index.php":
//     case "":
//         require "views/home_view.php";
//         break;
//     case "/simple_user_management_system/about.php":
//         require "views/about_view.php";
//     case "/simple_user_management_system/users.php":
//         require "views/about_view.php";
//     default:
//         http_response_code(404);
//         require "views/404.php";
//         die();
// }

// $currentURL = parse_url($_SERVER["REQUEST_URI"])["path"];