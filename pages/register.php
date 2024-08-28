<?php
session_start();
require_once '../connect.php';

if (isset($_SESSION['user'])) {
    header('Location: ./profile.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../css/main.css" />
    <title>Регистрация</title>
</head>

<body>
    <form action="../vendor/create.php" method="post" id="form">
        <h1>Регистрация</h1>

        <div class="input_wrapper">
            <div class="wrapper login_wrapper">
                <label for="login">Логин</label>
                <input type="text" name="login" id="login" autocomplete="off" />
                <?php
                if (isset($_SESSION['errorLogin'])) {
                    echo $_SESSION['errorLogin'];
                    unset($_SESSION['errorLogin']);
                }
                ?>
                <span class="error error_login_length"></span>
            </div>

            <div class="wrapper lastName_wrapper">
                <label for="lastName">Фамилия</label>
                <input type="text" name="lastName" id="lastName" autocomplete="off">
                <span class="error error_lastName_length"></span>
            </div>

            <div class="wrapper name_wrapper">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" autocomplete="off">
                <span class="error error_name_length"></span>
            </div>

            <div class="wrapper password_wrapper">
                <label for="password">Пароль</label>
                <div class="password_hide_wrapper">
                    <div class="password_eye password_hide"></div>
                    <input type="password" name="password" id="password" autocomplete="off" />
                </div>
                <span class="error error_password"></span>
            </div>

            <div class="wrapper password_repeat_wrapper">
                <label for="password_repeat">Повторите пароль</label>
                <input type="password" id="password_repeat" autocomplete="off" />
                <span class="error error_password_repeat"></span>
            </div>
        </div>

        <div class="btn_wrapper">
            <input type="submit" value="Зарегистрироваться" id="btn" />
        </div>

        <div id="reg">Уже есть аккаунт? <a href="/">Авторизуйся!</a></div id="reg">
    </form>

    <script src="../js/register.js"></script>
    <script src="../js/error.js"></script>
</body>

</html>