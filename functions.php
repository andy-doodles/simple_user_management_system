<?php

function dumpAndDie (
    string $value
): string
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}


# Checks if the current URL is the specified URL
function urlIs(
    $pageName) {
    return $_SERVER["REQUEST_URI"] === $pageName;
}


/* Conditionally applies Tailwind CSS styles to highlight navbar elements when the current URL
corresponds to the link in the element's <href> tag */
function navbarHighlight(
    string $uri
): string
{
    if ($_SERVER["REQUEST_URI"] === $uri) {
        return "bg-gray-900 text-white";
    } else {
        return "text-gray-300 hover:bg-gray-700 hover:text-white";
    }
}