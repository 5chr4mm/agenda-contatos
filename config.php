<?php
$db = mysqli_connect("DATABASE1_HOST","DATABASE1_USER","DATABASE1_PASS");
if (!$db) {
die('Não foi possível conectar: ' . mysqli_error());}
$dado = mysqli_select_db("DATABASE1_NAME",$db);
?>