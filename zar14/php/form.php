<?php
require "db.php";
?>

<div class="forma">
    <h2>Форма статьи</h2>
    <form action="insert.php" method="post">
        <br>
        <input name="title" placeholder="введите название статьи">
        <br>
       <textarea name="text" placeholder="введите статью" rows="15" cols="63" style="resize: none;" ></textarea>
        <br>
        <button>Опубликовать<a href="../index.php"></a></button>
        <a href="../index.php">Вернуться</a>
    </form>
</div>


