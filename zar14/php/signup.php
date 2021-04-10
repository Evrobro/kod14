<?php
require "db.php";
$login = trim($_POST['login']);
$email = trim($_POST['email']);
$name = trim($_POST['name']);
$password = trim($_POST['password']);


if (!empty($name) && !empty($email) && !empty($password)){
    $result = $pdo->prepare("SELECT `email` FROM user WHERE `email` = :email");
    $params = [':email' => $email];
    $result->execute($params);
    if ($result->rowCount() > 0) {
        while ($res = $result->fetch(PDO::FETCH_ASSOC)) {
            if ($res['email'] === $login){
                echo 'Такой mail уже существует';
            }
        }
    }
    else{
        $sql = 'INSERT INTO user(`password`, `email`, `name`,`root`,`status`) VALUES(:password, :email, :name,:root,:status)';
        $params = [':name' => $name,':password' => $password, ':email' => $email,':root' => '1' ,':status'=>'active'];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        session_start();
        $_SESSION["profil"] = $pdo->lastInsertId();
        echo '<a href="../index.php">На главную</a> ';
    }
}
else{
    echo 'Не все поля заполнены';
}
