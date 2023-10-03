<?php
session_start();
require('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин Косметики Регистрация</title>
    <link rel="stylesheet" href="/assets/css/reg.css">
</head>
<body>
    
    <div class="container">
        <h1>Регистрация</h1>
        <form method="post">
            <input type="name" name="name" placeholder="Имя">
            <input type="surname" name="surname" placeholder="Фамилия">
            <input type="number"  name="number" placeholder="Номер">
            <input type="login" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="submit" name="reg_btn" value="Зарегистрироваться" id="reg_btn">
            </form>
            <p id="login_reg_text">Есть уже аккаунт?<a href="Login.php" id="login_reg"> <span>Войти!</span></a></p>  
    </div>
    
    <?php
        if (isset($_POST['reg_btn'])) {
            $name = $_POST['name'];
            $sname = $_POST['surname'];
            $numb = $_POST['number'];
            $lgn = $_POST['login'];
            $pswrd = md5($_POST['password']);
            if (empty($name) || empty($sname) || empty($numb) || empty($lgn) || empty($pswrd)) {
                echo '<p id="reg_fulse">Заполните все данные!</p>';
            }else {
                $role = 1;
                $check = mysqli_query($link, "SELECT * FROM users where login='$lgn'");
                if (mysqli_num_rows($check)==0) {
                $addUser = mysqli_query($link, "INSERT INTO users (name, surname, number, login, password, role) 
                VAlUES ('$name', '$sname', '$numb', '$lgn', '$pswrd', '$role')");
                if($addUser){
                    echo '<p id="reg_true">Вы зарегистрировались!</p>';
                    header ('Location: LogIn.php');
                }
                }else{
                    echo '<p id="reg_fulse">Такой пользователь уже существует!</p>';
                }
            }
        }
    ?>
</body>
</html>