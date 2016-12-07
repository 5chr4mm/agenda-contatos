<?php
$servername = "DATABASE1_HOST";
$username = "DATABASE1_USER";
$password = "DATABASE1_PASS";
//$database = "DATABASE1_PASS";

// Cria a conexao
$conn = mysqli_connect($servername, $username, $password);

// Checa a conexao
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
echo "Conectado com sucesso";
?>