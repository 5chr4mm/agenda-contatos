<?php
$db = mysql_connect("DATABASE1_HOST","DATABASE1_USER","DATABASE1_PASS");
if (!$db) {
die('Não foi possível conectar: ' . mysql_error());}
$dado = mysql_select_db("DATABASE1_NAME",$db);
?>