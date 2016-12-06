 <?php
include "config.php";
?>

<?php


$sql = "INSERT INTO agenda(
nome,
telefone,
comercial,
celular,
celular2,
email,
site,
observacao
)
Values
('".$_POST["nome"]."',
'".$_POST['telefone']."',
'".$_POST['comercial']."',
'".$_POST['celular']."',
'".$_POST['celular2']."',
'".$_POST['email']."',
'".$_POST['site']."',
'".$_POST['observacao']."'
)";

//echo $sql;
//Executo a minha query
//echo $sql;
$query = mysql_query($sql);
//Verifico se o registro foi inserido com sucesso
if ($query == true) {
    include "index.php";
}
else{
    echo "Não foi possivel inserir o registro - entre em contato com o webmaster ".mysql_error();
}
?>