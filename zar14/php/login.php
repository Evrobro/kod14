<?php
require "db.php";
?>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h2>Форма авторизации</h2>
            <form action="aut.php" method="post">
                <input type="text" class="form-control" name="email" id="email" placeholder="Введите логин" required><br>
                <input type="password" class="form-control" name="password" id="pass" placeholder="Введите пароль" required><br>
                <button class="btn btn-success" name="do_login" type="submit">Авторизоваться</button>
            </form>
            <br>
            <p>Если вы не зареганы,то нажмите <a href="signup.php">здесь</a>.</p>
            <p>Вернуться на <a href="../index.php">Главную</a>.</p>
        </div>
    </div>
</div>
