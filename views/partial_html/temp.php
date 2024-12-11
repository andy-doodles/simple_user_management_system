<a href="home" class="rounded-md px-3 py-2 text-sm font-medium <?= navbarHighlight("/simple_user_management_system/home") ?>" aria-current="page">Home</a>
<a href="users" class="rounded-md px-3 py-2 text-sm font-medium <?= navbarHighlight("/simple_user_management_system/users") ?>" aria-current="page">Users</a>
<a href="about" class="rounded-md px-3 py-2 text-sm font-medium <?= navbarHighlight("/simple_user_management_system/about") ?>" aria-current="page">About</a>



<a href="home" class="
<?php
    if ( $currentURL === "/simple_user_management_system/home" ) {
        echo "rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white";
    } else {
        echo "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white";
    }
    ?>" aria-current="page">Home</a>
<a href="about" class="
    <?php
    if ( $currentURL === "/simple_user_management_system/about" ) {
        echo "rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white";
    } else {
        echo "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white";
    }
    ?>" aria-current="page">About</a>
<a href="users" class="
    <?php
    if ( $currentURL === "/simple_user_management_system/users" ) {
        echo "rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white";
    } else {
        echo "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white";
    }
    ?>" aria-current="page">Users</a>

<?php
$linkTargetArray = [
    "Home" => "home",
    "Users" => "users",
    "About" => "about"
];

/* 
* Outputs the <a> tags that make up each navbar element.
* Adds conditional Tailwind CSS styles and the "aria-current" attribute if the target
URL corresponds to the current page */
function buildNavbar($targetArray, $currentURL) {
    foreach (array_values($targetArray) as $value) {
        if ("/simple_user_management_system/{$value}" === $currentURL) {
            return "<a href=\"/simple_user_management_system/{$value}\" class=\"rounded-md px-3 py-2 text-sm font-medium bg-gray-900 text-white\" aria-current=¿'\"page\">" . ucfirst($value) . "</a><br>";
        } else {
            return "<a href=\"/simple_user_management_system/{$value}\" class=\"rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white\>" . ucfirst($value) . "</a><br>";
        }
        return "$value";
    }
}
?>