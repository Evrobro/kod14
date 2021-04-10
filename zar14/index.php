<?php
session_start();
require "php/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <div class="poloska">
        <div class="logo">
            <img src="image/1234.png" height="50px">
        </div>
        <?php if (empty($_SESSION)) {
            echo '
        <div class="texthead">
            <p><a href="#">Главная страница</a></p>
        <p><a href="php/reg.html"> Личный кабинет</a></p>

        </div>';
        } ?>
        <?php if (!empty($_SESSION)) {
            echo '
        <div class="texthead">
            <p><a href="#">Главная страница</a></p>
        <p><a href="php/reg.html"> Личный кабинет</a></p>
        <p><a href="php/form.php"> Добавить статью</a></p>

        </div>';
        } ?>
    </div>
</header>
<body>
<div class="mainpic">
    <img src="image/city.jpg" width="100%" height="800px">
</div>
<div class="span">
    <span>Свежие проблемы</span>
</div>
<div class="products">
    <div class="product-wrap" data-category="new">
        <div class="product-item">
            <p><a href="#" class="rollover1"></a></p>
            <div class="product-buttons">
                <a href="" class="button">Исправляем</a>
            </div>
        </div>
        <div class="product-title">
            <a href="">Детская площадка<br>(Улица Пушкина)</a>
            <span class="product-price"><s>Заявка принята</s><br><p style="color:#fbbb43">23.04.21</p></span>
        </div>
    </div>
    <div class="product-wrap" data-category="new">
        <div class="product-item">
            <p><a href="#" class="rollover2"></a></p>
            <div class="product-buttons">
                <a href="" class="button">Исправляем</a>
            </div>
        </div>
        <div class="product-title">
            <a href="">Ветхий дом<br>(Улица Пушкина)</a>
            <span class="product-price"><s>Заявка принята</s><br><p style="color:#fbbb43">23.04.21</p></span>
        </div>
    </div>
    <div class="product-wrap" data-category="new">
        <div class="product-item">
            <p><a href="#" class="rollover3"></a></p>
            <div class="product-buttons">
                <a href="" class="button">Исправляем</a>
            </div>
        </div>
        <div class="product-title">
            <a href="">Ямы на дорогах<br>(Улица Пушкина)</a>
            <span class="product-price"><s>Заявка принята</s><br><p style="color:#fbbb43">23.04.21</p></span>
        </div>
    </div>
    <div class="product-wrap" data-category="new">
        <div class="product-item">
            <p><a href="#" class="rollover"></a></p>
            <div class="product-buttons">
                <a href="" class="button">Исправляем</a>
            </div>
        </div>
        <div class="product-title">
            <a href="">Загрязнение реки<br>(Улица Пушкина)</a>
            <span class="product-price"><s>Заявка принята</s><br><p style="color:#fbbb43">23.04.21</p></span>
        </div>
    </div>
    <div class="product-wrap" data-category="new">
        <div class="product-item">
            <p><a href="#" class="rollover4"></a></p>
            <div class="product-buttons">
                <a href="" class="button">Исправляем</a>
            </div>
        </div>
        <div class="product-title">
            <a href="">Бездомные собаки<br>(Улица Пушкина)</a>
            <span class="product-price"><s>Заявка принята</s><br><p style="color:#fbbb43">23.04.21</p></span>
        </div>
    </div>
</div>
<div class="span">
    <span>Проблемы админа</span>
</div>
<div class="products">
    <?php
    $result = $pdo->prepare("SELECT * FROM them");
    $result->execute();


    while ($data = $result->fetch(PDO::FETCH_ASSOC)) {

        echo '
            <div class="product-wrap" data-category="new">
                <div class="product-item">
                    <p><a href="#" class="rollover4"></a></p>
                    <div class="product-buttons">
                        <a href="" class="button">Исправляем</a>
                    </div>
                </div>
                <div class="product-title">
                    <a href="">' . $data['title'] . '<br>
                    ' . $data['text'] . '</a>
                    <span class="product-price"><s>Заявка принята</s><br><p style="color:#fbbb43">' . $data['date'] . '</p></span>
                </div>
            </div>';
    }
    ?>
</div>
</header>
</body>
</html>