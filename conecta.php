<?php

	$host = "localhost";
	$usuario = "root"; /* root -p ~insira a senha aqui~ */
	$senha = "";
	$banco = "etecmcm";

	$conexao = new MySQLi("$host","$usuario","$senha","$banco");

	if($conexao->connect_error) {
		echo "Erro de conexão";
	}
	/* else{
		echo "Conexão bem-sucedida";
	} */


?>
