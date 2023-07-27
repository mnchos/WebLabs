<?php

$mysqli= new mysqli("localhost", "root", "", "test");
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $stmt = $mysqli->prepare('DELETE FROM furniture WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
}
header("Location:actions_forms.php");
?>

