<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Привет</h1>
    <a href="../vendor/exit.php">Выйти</a>
</body>

</html>