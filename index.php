<?php
session_start();
require_once './connect.php';

if (isset($_SESSION['user'])) {
  header('Location: ./pages/profile.php');
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
  <link rel="stylesheet" href="./css/main.css" />
  <title>Авторизация</title>
</head>

<body>
  <form action="./vendor/auth.php" method="post">
    <h1>Авторизация</h1>

    <div class="input_wrapper">
      <div class="wrapper login_wrapper">
        <label for="login">Логин</label>
        <input type="text" name="login" id="login" autocomplete="off" />
      </div>

      <div class="wrapper password_wrapper">
        <label for="password">Пароль</label>
        <div class="password_hide_wrapper">
          <div class="password_eye password_hide"></div>
          <input type="password" name="password" id="password" autocomplete="off" />
        </div>
        <span class="error error_login_or_password">
          <?php
          if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
          }
          ?>
        </span>
      </div>
    </div>

    <div class="btn_wrapper">
      <input type="submit" value="Войти" id="btn" />
    </div>

    <div id="reg">Ещё нет аккаунта? <a href="./pages/register.php">Зарегистрируйся!</a></div id="reg">
  </form>

  <script src="./js/main.js"></script>
</body>

</html>