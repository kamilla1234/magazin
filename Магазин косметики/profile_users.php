<?php
session_start();
require('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин Косметики Профиль</title>
    <link rel="stylesheet" href="/assets/css/profile_users.css">
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
                    <a href="#">КОРЗИНА</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="hero">
        <div class="container">
            <div class="profile_user">
                <p id="profile_img">Профиль</p>
                <?php
                echo '<p id="SName">'.$_SESSION['name'].' '.$_SESSION['sname'].'</p>';
                ?>
                <button id="favourit_profile">
                    <p>Избранное</p>
                    <img src="./assets/img/heart.svg" alt="Избранное">
                </button>
            </div>
        </div>
    </div>
    <div class="data">
        <div class="container">
            <div class="data_user">
                <h3 class="data">Ваши данные:</h3>
                <ul class="data_ul_one">
                    <li>Номер:</li>
                    <li>E-mail:</li>
                    <li>Login:</li>
                    <li>Пароль:</li>
                </ul>
                <ul class="data_ul_two">
                    <li>+79872199811</li>
                    <li>-</li>
                    <li>login</li>
                    <li>
                        <?php
                            echo
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>