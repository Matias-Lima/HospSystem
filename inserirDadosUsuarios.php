<?php
	session_start();
	// Esse código insere dados na tabela de usuários. Esse usuários tem acesso a página menuFuncionalidades
	@$login = $_POST ["nome"];
	@$senha = $_POST ["senha"];
	// include chama o arquivo conexão
	include('conexaoBanco.php');
	// como sql para inserir dados
	$query = "INSERT INTO `usuario`(`login`,`senha`) VALUES ('$login','$senha');";
	$result = $banco->query("$query");
	
	// esse comando vai verificar se a requisiçao sql foi executada, caso ela tenha sido executada corretamente o usuário
	// vai ser redirecionado para o menuFuncionalidade com a mensagem de sucesso, caso contrário volta com a mensagem de erro
	if ($result){
		$_SESSION['Usuario'] = '<div class="alert alert-success" role="alert">O usuário foi cadastrado com sucesso!</div>';
		header('Location: menuFuncionalidades.php'); 
		exit();
	} else {
		print_r($row_usuario);
		$_SESSION['nao_autenticado'] = true;
		header('Location: menuFuncionalidades.php');
		exit();
	}
?>



