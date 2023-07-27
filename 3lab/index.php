<?php
session_start(); // Right at the top of your script
?>
<?php
 echo "welcome, {$_SESSION['username']}";
$user = $_SESSION['username'];

echo "Welcome $user";

?>
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
                    if(!isset($_COOKIE['user_login'])){ ?>
                        <a href="registerform.php">Регистрация/вход</a>
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

<!--SLIDER-->

<div id="app"></div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>
<script src="js/index.js"></script>


<!-----------FEATURES----------->
<div class="container">
    <div class="features">

        <div class="features_items">

            <img class="features_icon" src="" alt="">
            <h4 class="features_title"></h4>
            <div class="features_text"> </div>

        </div>
        <div class="features_items">

            <img class="features_icon" src="C:\Users\nix20\Desktop\web\img\wrench2.png" alt="">
            <h4 class="features_title">Сборка на дому</h4>
            <div class="features_text">В Москве и Московской области осуществляется сборка продукции прямо у вас дома </div>

        </div>




    </div><!--/.features-->
</div><!--/.container-->
<!--------------------------BRANDS-------------------------->


<!--------------------------FOOTER-------------------------->
<div class="footer">
    <div class="container">
        <div class="footer_inner">
            <div class="footer_block">
                <?php
                //Выведем на экран значение куки test:
                if(!isset($_COOKIE['user_login'])) {
                    echo "";
                }
                else {
                    echo $_COOKIE["user_login"];
                }
                ?>
            </div>

        </div>
    </div>
</div>
</body>
