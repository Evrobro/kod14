<?php
session_start();
require "db.php";

$title = trim($_POST['title']);
$text = trim($_POST['text']);
$time = date("H:i:s");
$date = date("Y-m-d");

{
    $stmp = $pdo->prepare('INSERT INTO `them`(`title`, `text`, `date`, `id_them`) VALUES (:title,:text, :date, :id_them)');
    $stmp->bindParam(':title', $title);
    $stmp->bindParam(':text', $text);
    $stmp->bindParam(':date', $date);
    $null = 0;
    $stmp->bindParam(':id_them', $null);
    $stmp->execute();
}
?>

<a href="../index.php">на главную</a>

