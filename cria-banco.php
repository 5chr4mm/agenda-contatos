<?php

$restore_file  = "script-database.sql";
$server_name   = "DATABASE1_HOST";
$username      = "DATABASE1_USER";
$password      = "DATABASE1_PASS";
$database_name = "DATABASE1_NAME";

$cmd = "mysql -h {$server_name} -u {$username} -p{$password} {$database_name} < $restore_file";
exec($cmd);

?>