<?php
include "config.php";
?>

 <a href="agenda.php">Voltar</a>
 
<?

//Monto minha query de exclusão de dados
$sql = "DELETE FROM agenda WHERE id_contato = ".$_GET["id_contato"];
//Executo a minha query
$query = mysql_query($sql);
//Verifico se o registro foi excluído com sucesso
if ($query == true) {
    echo "Registro excluído com sucesso";
}
else {
    echo "Não foi possível excluir seu registro";
}
?>





