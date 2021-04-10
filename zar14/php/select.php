<?php
session_start();
require "db.php";

$text = trim($_POST['text']);
$date = date("Y-m-d");
{
    $sql = 'INSERT INTO `answer`(`text`, `date`) VALUES (:text, :date)';
    $params = ['text' => $text, 'date' => $date];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

}
?>

<a href="../index.php">на главную</a>

