<center>
<h1> Agenda de contatos - pesquisa</h1></center>

<font size="verdana">

<?php
include "config.php";
?>

<?
$inicial= $_GET['contato'];

$busca = mysql_query("select * from agenda where nome like '$inicial%'") or trigger_error('Erro ao executar consutla. Detalhes = ' . mysql_error());

//echo $busca;

if (empty($busca)) { //Se nao achar nada, lança essa mensagem
    echo "<table>";
	echo "<tr>";
	echo "<td>" ;
    echo "Nenhum registro encontrado.";

	echo "</td>";
	echo "</tr>";
	echo "</table";
	}

// quando existir algo em '$busca' ele realizará o script abaixo.

while ($dados = mysql_fetch_array($busca)) {


	echo "<table width=500 align=center>";

	echo "<td bgcolor=#ebf3ff><b></b>";
echo "</td>";

	echo "<tr>";
	echo "<td width=50>";

echo "<font size=1>Id: $dados[id_contato]</font>";

	echo "</td>";

	    echo "<td width=450 bgcolor=#ebf3ff>";

	echo "<b><a href='agenda-exibir.php?id_contato={$dados['id_contato']}'><font color=black size=elvetica>$dados[nome]</font></a><br />";
    echo "</tr>";
	echo "</td>";
	
	echo "<td bgcolor=#f8f8fA>";
	echo "</td>";
	 echo "</tr>";
		   echo "</td>";

echo "</table>";
}

echo "<b><center><a href='agenda.php'>Voltar</a></b></center>";
	echo("\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t");
?>

<br>