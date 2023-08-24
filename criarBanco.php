<?php
	
	include_once 'conexaoSemBanco.php';
	
	//Criando o banco de dados
	$query = "CREATE DATABASE hospital";
	$executa = $banco->query("$query");
	
	if($executa){
		echo 'Banco de Dados criado com sucesso!<br>';
	}else{
		print_r(@$pdo->errorInfo());
	}
?>
