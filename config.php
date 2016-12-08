<?php

define('DB_HOST', $_SERVER['DATABASE1_HOST']);
define('DB_USER', $_SERVER['DATABASE1_USER']);
define('DB_PASSWORD', $_SERVER['DATABASE1_PASS']);
define('DB_NAME', $_SERVER['DATABASE1_NAME']);

$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$db) {
    die("Database connection failed: " . mysqli_error());
}

$dado = mysqli_select_db($db, DB_NAME);
if (!$dado) {
    die("Database selection failed: " . mysqli_error());
}
?>