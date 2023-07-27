<?php

$dir ='C:\Server\data\htdocs\test3\uploads';

$file_old_name= @$_POST['filename_old'];

$file_new_name= @$_POST['filename_new'];

echo $file_old_name;

echo '<br>';

echo $file_new_name;

rename($dir.'/'.$file_old_name, $dir.'/'.$file_new_name);

header('location: index.php');

?>