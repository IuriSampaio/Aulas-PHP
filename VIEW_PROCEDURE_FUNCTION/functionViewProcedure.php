<?php

require_once('banco.php');
$conex = conexaoMysql('db_locadora');

echo("<hr><h3>Usando a function pra tazer informações do banco</h3><hr>");

$sql = "select function_Saudacao() as mensagem;";

$select = mysqli_query($conex,$sql);

$rs= mysqli_fetch_assoc($select);
//var_dump($rs);
echo("<h1>".$rs['mensagem']."</h1>");


$sql ="select * from view_FilmesAtores;";

$select = mysqli_query($conex,$sql);

echo("<hr><h3>Usando a view pra tazer informações do banco</h3>");
while($rs = mysqli_fetch_assoc($select)){
	echo("<hr>".$rs['filme']." do genero ".$rs['generoDoFilme']."<br>");
}

echo("<hr><h3>Usando o procebure pra busca no banco do banco</h3>");

$sql = "call prodecure_buscar_filme(2);";
$select = mysqli_query($conex,$sql);
$rs = mysqli_fetch_assoc($select);
echo("<hr>".$rs['filme']);

