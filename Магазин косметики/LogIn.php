<?php
session_start();
require('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин Косметики Вход</title>
    <link rel="stylesheet" href="/assets/css/log.css">
</head>
<body>
    <div class="container">
        <h1>Вход</h1>
        <form method="post">
            <input type="login" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="submit" name="log_btn" value="Войти" id="log_btn">
        </form>
        <p id="login_reg_text">Еще не зарегистрировались?<a href="registration.php" id="login_reg"> <span>Регистрация!</span></a></p>
    </div>

    <?php
        if(isset($_POST['log_btn'])){
            $lgn = $_POST['login'];
            $pswrd = md5($_POST['password']);
            $check = mysqli_query($link, "SELECT * FROM users,role WHERE users.role=role.role_name AND users.login='$lgn' and users.password='$pswrd'");
            if (mysqli_num_rows($check)==1){
                foreach($check as $el){
                    $_SESSION['user_id']=$el['id'];
                    $_SESSION['name']=$el['name'];
                    $_SESSION['sname']=$el['surname'];
                    $_SESSION['numb']=$el['number'];
                    $_SESSION['lgn']=$el['login'];
                    $_SESSION['pswrd']=$el['password'];
                    $_SESSION['role']=$el['role'];
                }
                switch($_SESSION['role']){
                    case 1:
                        header('Location: profile.php');
                        break;
                }
            }else{
                echo '<p id="log_fulse">Неправильный логин или пароль</p>';
            }
        }
    ?>

</body>
</html>