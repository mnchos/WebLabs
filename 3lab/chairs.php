<!doctype html><html>    <head>    <meta charset="utf-8">        <link href="https://fonts.googleapis.com/css?family=Cardo:400i|Open+Sans:700|Raleway:400,600,700&display=swap" rel="stylesheet">        <link rel="stylesheet" type="text/css" href="C:\Users\nix20\Desktop\web\css\style.css">        <title>Сайт</title>
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

<div class="brands">
    <div class="brand_item">
        <img class="brand_photo" src="C:\Users\nix20\Desktop\web\img\wood.jpg" alt="">
        <div class="brand_content">
            <div class="brand_text">Деревянные стулья</div>
        </div>
    </div>
    <div class="brand_item">
        <img class="brand_photo" src="C:\Users\nix20\Desktop\web\img\bar2.jpg" alt="">
        <div class="brand_content">
            <div class="brand_text">Барные стулья</div>
        </div>
    </div>
    <div class="brand_item">
        <img class="brand_photo" src="C:\Users\nix20\Desktop\web\img\tab2.jpg" alt="">
        <div class="brand_content">
            <div class="brand_text">Табуретки</div>
        </div>
    </div>

</div>
<!-----------CONTENT----------->
<div class="content">
    <div class="container">

        <div class="content_intro">Стулья</div>

        <div class="content_text">


            <p>Стул — мебель, предназначенная для сидения одного человека, со спинкой и сиденьем с подлокотниками или без них.</p>

            <p>Стул отличается от табурета наличием спинки. Разграничение между стулом и креслом — комфортабельность изделия, рабочее кресло при этом может вовсе не отличаться от рабочего стула. В то же время кресло может рассматриваться как род стула</p>
            <p>Стулья — самый распространённый и массовый вид мебели, существует множество видов, моделей и фасонов стульев. Возможно, стул больше всех других предметов мебели подвержен влиянию моды[</p>
            <p>Изобретателями стула как сиденья со спинкой, по-видимому, являются древние египтяне, самые древние нарисованные и найденные стулья относятся к третьему тысячелетию до н. э.</p>
            <p>Основные части стула — сиденье, спинка и ножки. Традиционно стул имеет четыре ножки, отдельные или связанные попарно в конструкции типа «ножницы» (Х-образная конструкция). Количество ножек может варьироваться, существуют модели стульев без отдельных ножек — например, консольный стул. Спинка стула конструкционно может быть продолжением задних ножек (цельные задние ножки) или же представлять собой отдельный элемент, быть сплошной, сквозной или наборной. Стулья могут быть и жёсткими, и мягкими; по материалу и способу изготовления стулья бывают столярные (из цельнодеревянных элементов), гнутые (из древесины лиственных пород), клееные (из шпона), плетёные (из ивовых прутьев), металлические, пластиковые и смешанные.</p>
        </div>
    </div>
</div>


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