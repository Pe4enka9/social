<?php
session_start();
require_once '../connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);
$lastName = $_POST['lastName'];
$name = $_POST['name'];
$surname = $_POST['surname'];

try {
    $sql = "INSERT INTO `user` (`id`, `login`, `password`, `lastName`, `name`, `surname`) VALUES (NULL, :login, :password, :lastName, :name, :surname)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'login' => $login,
        'password' => $password,
        'lastName' => $lastName,
        'name' => $name,
        'surname' => $surname
    ]);
} catch (PDOException $e) {
    $_SESSION['errorLogin'] = '<span class="error error_login">Пользователь с таким логином уже существует!</span>';

    header('Location: ../pages/register.php');
}


if ($stmt->rowCount() > 0) {
    header('Location: /');
}
