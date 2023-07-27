<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "test");
if (isset($SESSION['userid']))
{
    $userid = $_SESSION['userid'];
}
elseif (isset($_COOKIE['token']) &&isset($_COOKIE['user_login']))
{
    $token = $_COOKIE['token'];
    $login = $_COOKIE['user_login'];
    ConnectDB();
    $res = $mysqli->query("SELECT * FROM users WHERE token = '$token'");
    if ($res->num_rows == 1) {
        $user = $res->fetch_object();
        echo "Аутентификация из куки";
        LogIn($user->user_id);
    }
}
else if (isset($_POST['submit']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    ConnectDB();
    $res = $mysqli->query("SELECT * FROM users WHERE user_login = '$login'");

    if ($res->num_rows == 1)
    {
        $user = $res->fetch_object();
        $pwdhash = sha1($password . $user->token);

        if ($pwdhash == $user->user_password)
        {
            echo "аутентификация из формы";
            LogIn($user->user_id);

        }
        else
            echo "неверный пароль";
    }
}


function ConnectDB()
{
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "", "test");
    echo "база подключена";
}

function LogIn($userid)
{
    global $mysqli;
    $_SESSION['userid'] = $userid;

    $res = $mysqli->query("SELECT * FROM users WHERE user_id = '$userid'");
    if ($res->num_rows == 1)
    {
        $user = $res->fetch_object();
        $login  = $user-> user_login;
        $token =  $user-> token;
    }

    setcookie('token', $token, time() + 3600 * 24 * 30);
    setcookie('user_login', $login, time() + 3600 * 24 * 30);

}
header("Location: index.php"); exit;
?>