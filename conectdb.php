<?php

$hostname = 'localhost'; 
$username = 'root'; 
$senha = ''; // caso vc tenha senha informe-a dentro das aspas simples.
$banco = 'chat'; //nome do bd que quero conectar
//abaixo estou abrindo uma conexão com o bd
$db = mysql_connect($hostname, $username, $senha) or die ("Falha ao conectar:");
mysql_select_db($banco, $db) or die ("falha ao connectar o banco de dados");
if($db == null){
	echo "falha ao connectar o banco de dados";
}


?>