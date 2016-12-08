<?php
if (session_id()==""){
session_start();
}
?>

<?php
include "config.php";
?>

<?php

$sql = "INSERT INTO usuarios(
login,
senha,
nome,
permissao
)
Values
('".$_POST["login"]."',
'".$_POST['senha']."',
'".$_POST['nome']."',
'".$_POST['permissao']."'
)";

$query = mysqli_query($sql);
//Verifico se o registro foi inserido com sucesso
if ($query == true) {
    echo "<script>alert('usuário cadastrado com sucesso');</script>";
    echo "<a href=pagina_principal.php>Voltar</a>";
}
else{
    echo "Não foi possivel inserir o registro - entre em contato com o webmaster ".mysqli_error();
}
?>

