<?php

	define('DB_HOST', $_SERVER['DATABASE1_HOST']);
	define('DB_USER', $_SERVER['DATABASE1_USER']);
	define('DB_PASSWORD', $_SERVER['DATABASE1_PASS']);
	define('DB_NAME', $_SERVER['DATABASE1_NAME']);

   $conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
   
   if(! $conn ) {
      die('Não pode conectar: ' . mysql_error());
   }
   
   $query_file = 'sql_query.txt';
   
   $fp = fopen($query_file, 'r');
   $sql = fread($fp, filesize($query_file));
   fclose($fp); 
   
   mysql_select_db(DB_NAME);
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Não pode criar a tabela: ' . mysql_error());
   }
   
   echo "Tabela agenda criada com sucesso\n";
   mysql_close($conn);
?>