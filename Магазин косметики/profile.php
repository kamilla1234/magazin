<?php
session_start();
require('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин Косметики</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header_content">
                <a href="profile.php"><img src="./assets/img/logo.png" alt="logo" class="logo"></a>
                <nav>
                    <a href="#">АКЦИИ</a>
                    <a href="#">ОТЗЫВЫ</a>
                    <a href="#">ТОВАРЫ<img src="./assets/img/ВсплывающееМеню" alt=""></a>
                </nav>
                <a href="profile_users.php">ПРОФИЛЬ</a>
            </div>
        </div>
    </div>
</body>
</html>