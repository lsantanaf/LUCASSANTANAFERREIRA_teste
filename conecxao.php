<?php

$host = "lsf_teste.mysql.dbaas.com.br";
$usuario = "lsf_teste";
$senha = "teste_lsf";
$bd = "lsf_teste";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_error)
	echo "Falha na conecxão: (".$mysqli->error.") ".$mysqli->connect_error;

?>
