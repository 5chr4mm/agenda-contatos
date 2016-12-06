<?php
include "config.php";
?>

<a href="index.php">Voltar</a>

<?

$sql = ("UPDATE agenda SET
nome='".$_POST['nome']."',
telefone='".$_POST['telefone']."',
comercial='".$_POST['comercial']."',
celular='".$_POST['celular']."',
celular2='".$_POST['celular2']."',
email='".$_POST['email']."',
site='".$_POST['site']."',
observacao='".$_POST['observacao']."'

where id_contato=" .$_GET['id_contato']);

$resultado = mysql_query($sql)
or die (mysql_error());
?>
<br>

<h1>Registro Alterado com sucesso</h1>