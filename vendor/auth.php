<?php
session_start();
require_once '../connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM `user` WHERE BINARY `login` = :login AND BINARY `password` = :password";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'login' => $login,
    'password' => $password
]);

if ($stmt->rowCount() > 0) {
    $_SESSION['user'] = [
        'login' => $login
    ];

    header('Location: ../pages/profile.php');
} else {
    $_SESSION['error'] = 'Неверный логин или пароль!';

    header('Location: /');
}
