<?php
   $dbhost = 'DATABASE1_HOST';
   $dbuser = 'DATABASE1_USER';
   $dbpass = 'DATABASE1_PASS';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Não pode conectar: ' . mysql_error());
   }
   
   $query_file = 'sql_query.txt';
   
   $fp = fopen($query_file, 'r');
   $sql = fread($fp, filesize($query_file));
   fclose($fp); 
   
   mysql_select_db('DATABASE1_NAME');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Não pode criar a tabela: ' . mysql_error());
   }
   
   echo "Tabela agenda criada com sucesso\n";
   mysql_close($conn);
?>