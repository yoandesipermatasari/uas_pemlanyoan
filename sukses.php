<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: register.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Register Succes</h2>
        <a href="login.php">Logout</a>

    </div>
</body>
</html>
