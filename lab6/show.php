<?php
$sql = new mysqli('localhost', 'root', '', 'test');
$q = $_REQUEST["a"];
echo "ответ от сервера по запросу: $q<br><br>";
		$show_table = $sql->query('SELECT * FROM teststuff');
				while($data =$show_table -> fetch_object())
				{
                    $mystring = "$data->name";
                    $findme   = $q;
                    $pos = strpos($mystring, $findme);
                    if ($pos === false)
                    {
                    }
                    else if ($pos === 0)
                    {
                        echo "$data->name <br>";
                    }
				}
?>