<?php
$mysqli= new mysqli("localhost", "root", "", "test");
$res = $mysqli->query('SELECT * FROM furniture');
while ($stuff = $res->fetch_object())
{
    echo "ID: $stuff->id, Имя: $stuff->name,Материал: $stuff->material<br/>";
}
?>
<form class = "imput_data" method="POST" action="register.php">
    Название <input name="login" type="text" ><br>
    Материал <input name="password" type="text" ><br>
    <input name="submit" type="submit" value="Создать">
</form>
<form class = "change_data" method="POST" action="delete.php" >
    Id <input name="id" type="number" ><br>
    <input name="submit" type="submit" value="Удалить">
</form>
<form class = "change_data" method="POST" action="modification.php">
    Логин <input name="login" type="text" ><br>
    Пароль <input name="password" type="text" ><br>
    Id <input name="id" type="number" ><br>
    <input name="submit" type="submit" value="Изменить">
</form>
