<?php

define('DB_HOST', $_SERVER['DATABASE1_HOST']);
define('DB_USER', $_SERVER['DATABASE1_USER']);
define('DB_PASSWORD', $_SERVER['DATABASE1_PASS']);
define('DB_NAME', $_SERVER['DATABASE1_NAME']);

$db = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$dado = mysql_select_db(DB_NAME,$db);
?>