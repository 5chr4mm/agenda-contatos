<?php
include "config.php";
?>

 <a href="agenda.php">Voltar</a>
 
<?

//Monto minha query de exclus�o de dados
$sql = "DELETE FROM agenda WHERE id_contato = ".$_GET["id_contato"];
//Executo a minha query
$query = mysql_query($sql);
//Verifico se o registro foi exclu�do com sucesso
if ($query == true) {
    echo "Registro exclu�do com sucesso";
}
else {
    echo "N�o foi poss�vel excluir seu registro";
}
?>





