<?php
$dir ='C:\Server\data\htdocs\test3\uploads';
if (isset($_GET['id']))
{
    $file_name = $_GET['id'];
    echo $file_name . '<br>';
    unlink($dir .'/'. $file_name);
    header("Location: index.php");
}