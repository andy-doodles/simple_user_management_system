<?php
require "partial_html/header.php";
require "partial_html/navbar.php";
$heading = "Users";
require "partial_html/banner.php";
?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>Welcome. This is the list of users on this platform.</p>

<?php
# Connect to "JupiterMailUserDB" MySQL table

$dsn = "mysql:host=localhost;port=3306;dbname=jupitermailuserdb;charset=utf8mb4";

try {
    $connection = new PDO($dsn, "root");
    echo "<p><br><strong>Connection established successfully</strong></p>";
} catch(Exception $e) {
    echo "Error connecting to the database ======> " . $e;
}


$preparedStatement = $connection->prepare("SELECT * FROM users");
$preparedStatement->execute();

$users = $preparedStatement->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// var_dump($users);
// echo "</pre>";

// echo "<li> Username: {$user['username']} </li>";
// echo "<li> Email: {$user['email']} </li>";

?>

<table class="border-solid border-4 border-pink">
    <thead>
        <tr>
            <th class="border-solid border-4">User ID</th>
            <th class="border-solid border-4">Username</th>
            <th class="border-solid border-4">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
            echo "
                <tr>
                    <td class='border-solid border-4'>{$user['user_id']}</td>
                    <td class='border-solid border-4'>{$user['username']}</td>
                    <td class='border-solid border-4'>{$user['email']}</td>
                </tr>";
        }
        ?>
    </tbody>
    
</table>

</div>
</main>

<?php require "partial_html/footer.php"; ?>