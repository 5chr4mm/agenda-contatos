<?php
   $dbhost = 'DATABASE1_HOST';
   $dbuser = 'DATABASE1_USER';
   $dbpass = 'DATABASE1_PASS';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Não pode conectar: ' . mysqli_error());
   }
   
   $query_file = 'sql_query.txt';
   
   $fp = fopen($query_file, 'r');
   $sql = fread($fp, filesize($query_file));
   fclose($fp); 
   
   mysqli_select_db('DATABASE1_NAME');
   $retval = mysqli_query( $sql, $conn );
   
   if(! $retval ) {
      die('Não pode criar a tabela: ' . mysqli_error());
   }
   
   echo "Tabela agenda criada com sucesso\n";
   mysqli_close($conn);
?>