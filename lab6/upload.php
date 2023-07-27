<?php

$sql = new mysqli('localhost', 'root', '', 'test');

$text_upload = $_REQUEST["a"];
echo $text_upload;

if(isset($text_upload) && $text_upload!="")
{
    $result = $sql->query("SELECT name FROM teststuff WHERE name = '$text_upload'");
    $user = $result->fetch_object();
        if ($user == NULL)
         {
            $stmt = $sql->prepare("insert into teststuff(name) values(?)");
            $stmt->bind_param("s", $text_upload); 
            $stmt->execute();   
            echo ' Данные загружены в таблицу';
        }
        else
        {
            echo ' такой логин уже существует';
        }
}
else if ($text_upload=="")
{
    echo 'Введите текст';
}
?>