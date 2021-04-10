<?php
require "db.php";
?>

<div class="asks">
    <h2>Коментарий</h2>
    <form action="select.php" method="post">
        <input name="name" placeholder="имя человека">
        <br>
        <textarea name="text" placeholder="коммент" rows="15" cols="63" style="resize: none;" ></textarea>
        <br>
        <button>Оставить коментарий</button>
        <a href="../index.php">Вернуться</a>
    </form>
</div>


