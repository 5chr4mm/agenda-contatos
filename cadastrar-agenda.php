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
$query = mysqli_query($db, $sql);
//Verifico se o registro foi inserido com sucesso
if ($query == true) {
    include "agenda.php";
}
else{
    echo "N�o foi possivel inserir o registro - entre em contato com o webmaster ".mysqli_error();
}
?>