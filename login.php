<?php
	session_start();
	
	//Se o usuário não digitar nada, retorna a página inicial
	if (empty($_POST["nome"]) or empty($_POST["senha"])) {
		('Location: acesso.php');
		exit();
	}
	//Recebendo os dados (nome de usuário e senha)
	$login = $_POST["nome"];
	$senhadologin = $_POST["senha"];
	
	//Verificação contra o ataque utilizando sql injection (Segurança)
	$nome = preg_replace('/[^[:alnum:]_]/', '', $login);
	$senha = preg_replace('/[^[:alnum:]_]/', '', $senhadologin);
	include_once 'conexaoBanco.php';
	$result = $banco->query("SELECT * FROM usuario where login='{$nome}';  senha='{$senha}'");
	// esse $result equivale, podemos dizer, a um número de indentificaco sql. Esse número permite que tenhamos acesso a informação
	
	// o foreach é responsável por fazer a leitura e retornar o valor $row_usuario que pode ser usado desse forma $row_usuario['senha'] para representar a senha do usuário.
	foreach ($result as $row_usuario) {
		
	}
	
	if ($row_usuario['senha'] == $senha) {
		$_SESSION['nome'] = "$nome";
		header('Location: menuFuncionalidades.php');
		exit();
	} else {
		$_SESSION['nao_autenticado'] = true;
		header('Location: acesso.php');
		exit();
	}
?>

