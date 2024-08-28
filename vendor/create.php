<?php
session_start();
require_once '../connect.php';

$login = trim($_POST['login']);
$lastName = trim($_POST['lastName']);
$name = trim($_POST['name']);
$password = md5($_POST['password']);

try {
    $sql = "INSERT INTO `user` (`id`, `login`, `password`, `lastName`, `name`) VALUES (NULL, :login, :password, :lastName, :name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'login' => $login,
        'password' => $password,
        'lastName' => $lastName,
        'name' => $name
    ]);
} catch (PDOException $e) {
    $_SESSION['errorLogin'] = '<span class="error error_login">Пользователь с таким логином уже существует!</span>';

    header('Location: ../pages/register.php');
}


if ($stmt->rowCount() > 0) {
    header('Location: /');
}
