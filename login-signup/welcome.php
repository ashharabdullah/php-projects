<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <h2>Welcome to the site!</h2>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
