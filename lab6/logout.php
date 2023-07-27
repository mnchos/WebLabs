<?php
// Страница разавторизации

// Удаляем куки
unset($_SESSION['user_id']);
setcookie("id", "", time() - 3600*24*30*12, "/");
setcookie("hash", "", time() - 3600*24*30*12, "/",null,null,true); // httponly !!!
setcookie("login","",time()+60*60*24*30,"/");
session_destroy();
// Переадресовываем браузер на страницу проверки нашего скрипта
header("Location: index.php"); exit;

?>
