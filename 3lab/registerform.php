
<!doctype html>
<html>
<style>
    form1{

        width:525px;
        height:300px;

        left:450px;
        top:450px;
    }
    form2{
        width:525px;
        height:300px;
        left:450px;
        top:450px;
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
                    <li> <a class="nav_link" href="registerform.php">Регистрация</a>

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


        </div>
    </div></div>
<!--------------------------FOOTER-------------------------->
<div class="footer">
    <div class="container">

                <ul>
                    <li> <form1>
                                <form method="POST" action="register.php">
                                    <div class="content">
                                        Логин <input name="login" type="text" required><br>
                                        Пароль <input name="password" type="password" required><br>
                                        <input name="submit" type="submit" value="Зарегистрироваться">
                                    </div>
                                </form>
                            </form1>
                    </li>
                    <li> <form2>
                                <form class="form-check-input"  method="POST" action="login.php">
                                    Логин <input name="login" type="text" required><br>
                                    Пароль <input name="password" type="password" required><br>
                                    <input name="submit" type="submit" value="Войти">
                                </form>

                        </form2>
                    </li>
                </ul>

    </div>
</div>
</body>