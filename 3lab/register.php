<?php
$mysqli= new mysqli("localhost", "root", "", "test");

if(isset($_POST['submit']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $rnd = sprintf('%08x%08x%08x%08x',rand(),rand(),rand(),rand());
    $pwdhash = sha1($password. $rnd);

    echo "Рнд: $rnd,Логин:$login,Пароль: $password,Новый пароль: $pwdhash<br/>";

    $stmt = $mysqli->prepare('INSERT INTO users(user_login, user_password, token) VALUES (?,?,?)');
    $stmt->bind_param('sss',$login,$pwdhash,$rnd);
    $stmt->execute();
}
header("Location: index.php"); exit;
?>
