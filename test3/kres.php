<?php

session_start();

?>
<!doctype html>
<html>
<style>
form1{

    width:190px;
    height:300px;
position:relative;
left:450px;
    top:450px;
}
form2{
top:450px;
width:190px;
height:300px;


}
</style>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400i|Open+Sans:700|Raleway:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Сайт</title>
</head>

<body>


<!--HEADER-->
<!doctype html>
<html>


<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400i|Open+Sans:700|Raleway:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Сайт</title>
</head>

<body>


<!--HEADER-->
<header class="header">
    <div class="container">
        <div class="header_inner">

            <div class="header_logo"><a href="index.php"><img src="img\1.jpg"></a></div>

            <nav class="nav">
                <ul>
                    <li> <a class="nav_link" href="#">Товары</a>
                        <ul>
                            <li><a class="nav_link" href="chairs.php">Cтулья</a></li>
                            <li><a class="nav_link" href="kres.php">Кресла</a></li>

                        </ul>
                    </li>

                    <li> <a class="nav_link" href="C:\Users\nix20\Desktop\web\html\Shops\shops.html">Магазины</a>

                    </li>

                    <li> <a class="nav_link" href="C:\Users\nix20\Desktop\web\html\About\contacts.html">Контакты</a>

                    </li>

                    <li> <a class="nav_link" href="C:\Users\nix20\Desktop\web\html\About\news.html">Новинки</a>

                    </li>

                    <li> <a class="nav_link" href="C:\Users\nix20\Desktop\web\html\About\stuf.html">Спецпредложения</a>

                    </li>
                    <?php

                    if(isset($_COOKIE['user_login']) && isset($_COOKIE['user_pswd'])){

                        $_SESSION['login'] = $_COOKIE['user_login'];

                        $_SESSION['password'] = $_COOKIE['user_pswd'];

                    }

                    if(!isset($_COOKIE['login'])){ ?>
                        <a href="registerform.php">Регистрация</a>

                    <?php }
                    else {
                        "<br>"?>

                        <a href="logout.php">Выход</a>
                    <?php } ?>

                    </li>
                </ul>
            </nav>

        </div>
    </div>
</header>


<!-----------CONTENT----------->
<div class="content">
    <div class="container">

        <div class="content_intro">Кресла</div>

        <div class="content_text">


            <p>Сегодня кресло — популярный предмет офисной, и часто домашней, мебели. Современные офисные стулья повышенной комфортности, которые могут называться креслами, традиционно делятся на обычные кресла и кресла руководителей. Также их можно классифицировать по следующим основаниям:</p>

            <p>Сетчатые (без наполнителя) и текстильные (с наполнителем).
            </p>
            <p>Для дома или для офиса.</p>
            <p>Ежегодно в мире продаётся около 70—100 миллионов офисных кресел, наибольшую долю занимают США (18 миллионов в год) и Германия (15 миллионов в год). Среднему покупателю офисного кресла на Западе примерно 40—45 лет, он разбирается в параметрах и технических возможностях кресла, у него есть проблемы со здоровьем и он достаточно обеспечен. В России в год продаётся 2,8 миллиона офисных кресел, а годовой объём продаж составляет 130 миллионов долларов.</p>
            <p>Круг материалов, используемых при изготовлении кресел, достаточно широк. Сами кресла изготавливаются из натурального дерева, ДСП, ротанга и других материалов. В качестве обивки применяются гобелен, флок, жаккард, шенилл, нубук, микрофибра. Для набивки используются синтетические и натуральные материалы: ватин, войлок, поролон, синтепон</p>
        </div>
    </div></div>
<!--------------------------FOOTER-------------------------->
<div class="footer">
    <div class="container">
        <div class="footer_inner">
            <div class="footer_block">
                <?php
                //Выведем на экран значение куки test:
                if(!isset($_COOKIE['login'])) {
                    echo "";
                }
                else {
                       echo $_COOKIE["login"];
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>