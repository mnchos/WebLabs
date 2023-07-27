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
                    <li>
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
        <form class="features_items">
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
    <div align="center"><a style="color: black;text-align: left;position: center;" class="brand_text"  href="teststuff.php">Загрузка</a></div>
</div>
<?php
if ($_FILES['userfile']['tmp_name'])
{
    $uploadfile= 'uploads/'.basename($_FILES['userfile']['name']);
    if
    (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile))
    {
        echo 'Файл был успешно загружен. <br/>';
    }
}
?>
<?php
$dir ='C:\Server\data\htdocs\test3\uploads';
if (is_dir($dir))
{
    if ($handle = opendir($dir))
    {
        echo '<div style="overflow: scroll;  color: black;"><table border="2" style="text-align: center; font-size: 14pt; background: white; width:100%"><tr>
<th>имя</th><th>дата_создания</th><th>размер</th><th>тип</th></tr>';
        while (false !== ($entry = readdir($handle)))
        {
            if ($entry != "." && $entry != "..")
            {
                $filename=$dir. '/'. $entry;
               $filetype=getExtension4($filename);
                if($filetype == 'png' or $filetype=='jpg')
                {
                    echo '<tr><td><img width="90px" height="70px" src="uploads/'. $entry .' "><br> '. $entry .'</td><td>' .date('F d Y H:i:s.', filectime($filename) )
                        .'</td><td>' . filesize($filename). '</td><td>' .getExtension4($filename). '</td>';
                    echo "<td><a href=\"change.php?id=$entry\" > rename </a></td>";

                    echo "<td><a href=\"del.php?id=$entry\"> delete </a></td>";

                    echo "</tr>";

                }
                else
                {

                    echo '<tr><td>'. $entry .'</td><td>' .date('F d Y H:i:s.', filectime($filename) )  . '</td><td>'
                        . filesize($filename).'</td><td>'.getExtension4($filename).  '</td>';

                    echo "<td><a href=\"change.php?id=$entry\"> rename </a></td>";

                    echo "<td><a href=\"del.php?id=$entry\"> delete </a></td>";

                    echo "</tr>";
                }
            }
        }
        echo '</table></div>';
        closedir($handle);
    }
}
function getExtension4($filename) {
    return substr(strrchr($filename, '.'), 1);
}
?>

</body>
