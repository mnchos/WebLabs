<?php

$mysqli= new mysqli("localhost", "root", "", "test");
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    $stmt = $mysqli->prepare('UPDATE furniture SET name = ?, material = ? WHERE id = ?');
    $stmt->bind_param('ssi', $login, $password, $id);
    $stmt->execute();
}
header("Location:actions_forms.php");
?>