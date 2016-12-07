<?php
$db = mysqli_connect("DATABASE1_HOST","DATABASE1_USER","DATABASE1_PASS", "DATABASE1_NAME");
if (!$db) {
	echo "Não foi possível conectar." . PHP_EOL;
	exit;
}
?>