<?php



session_start();
// Удаляем куки
unset($_SESSION['userid']);
setcookie('token','');
setcookie('user_login','');

// Переадресовываем браузер на страницу проверки нашего скрипта
header("Location: index.php"); exit;

?>
