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
                <a href="index.php"><img src="./assets/img/logo.png" alt="logo" class="logo"></a>
                <nav>
                    <a href="#">АКЦИИ</a>
                    <a href="#">ОТЗЫВЫ</a>
                    <a href="#">ТОВАРЫ<img src="./assets/img/ВсплывающееМеню" alt=""></a>
                </nav>
                <a href="registration.php">ЗАРЕГИСТРИРОВАТЬСЯ</a>
            </div>
        </div>
    </div>
    <div class="hero">
        <div class="container">
            <div class="hero_content">
                <h1>МАГАЗИН КОСМЕТИКИ</h1>
                <p>Нет времени на поход в магазин? У нас все по хорошей цене!</p>
                <a href="#section_product">Посмотреть</a>
            </div>
        </div>
    </div>
    <section class="section_product">
        <div class="container">
            <div class="product_content">
                <div class="product_text">
                    <h2>Товары</h2>
                </div>
            </div>
        </div>
    </section>
</body>
</html>