<?php

$servername = "DATABASE1_HOST";
$username = "DATABASE1_USER";
$password = "DATABASE1_PASS";
$database = "DATABASE1_PASS";

$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli($servername, $username, $password, $database, 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>