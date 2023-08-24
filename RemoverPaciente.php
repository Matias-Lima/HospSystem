<?php
	session_start();
	include('conexaoBanco.php');
	@$cpf = $_POST["cpf"];
	if (!empty($cpf)){
		//se cpf não estiver vazio faça uma leitura no banco de dados e retorne o cpf para que eu faça a verificação
		$result = $banco->query("SELECT cpf FROM paciente where cpf ='{$cpf}'");
		foreach ($result as $row_usuario){
			
		}
		// Verificação, Verdade: apaga o usuário com esse cpf e retorna a página MenuFuncionalidades.php
		if ($row_usuario['cpf'] == $cpf) {
			$result = $banco->query("DELETE FROM paciente where cpf ='{$cpf}'");
			$_SESSION['Usuario'] = '<div class="alert alert-success" role="alert">O Paciente foi removido com sucesso!</div>';
			header('Location: menuFuncionalidades.php');
			exit();
		 // Falso: retorna a menuFuncionalidades.php e exibe a mensagem de erro
		}else{
			$_SESSION['nao_autenticado'] = true;
			header('Location: menuFuncionalidades.php');
			exit();
		}
	}else{
		$_SESSION['nao_autenticado'] = true;
		header('Location: menuFuncionalidades.php');
		exit();
	}
	$banco = null;
?>   