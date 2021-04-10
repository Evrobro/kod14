<?php
session_start();
include "db.php";
$email = trim($_POST['email']);
$password = trim($_POST['password']);

$result = $pdo->prepare("SELECT  `password`, `root`,`id_user` FROM user WHERE `email` = :email");
$params = [':email' => $email];
$result->execute($params);
if ($result->rowCount() > 0) {
    while ($res = $result->fetch(PDO::FETCH_ASSOC)) {
        if ($res['password'] === $password) {
            if ($res['root'] == '1') {
                $_SESSION['id_user'] = $res['id_user'];
                $_SESSION['root'] = $res['root'];
                header('Location: ../index.php');

            } elseif ($res['root'] == '0') {
                $_SESSION['root'] = $res['root'];
                header('Location: ../index.php');
            }

        } else {
            echo '
            <h2>Неверный пароль</h2>';
        }
    }
} else {
    echo '
    <h2>Логин не существует</h2>';
}