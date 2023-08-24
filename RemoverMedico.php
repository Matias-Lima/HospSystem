<?php
	session_start();
	include('conexaoBanco.php');
	@$crm = $_POST["crm"];
	if (!empty($crm)) {
		//se crm não estiver vazio faça uma leitura no banco de dados e retorne o crm para que eu faça a verificação
		$result = $banco->query("SELECT * FROM medico where crm='{$crm}'");
		foreach ($result as $row_usuario) {
			
		}
		if ($row_usuario['crm'] == $crm) {
			$result = $banco->query("DELETE FROM medico where crm='{$crm}'");
			$_SESSION['Usuario'] = '<div class="alert alert-success" role="alert">O Médico foi removido com sucesso!</div>';
			header('Location: menuFuncionalidades.php');
			exit();
		}else{
			$_SESSION['nao_autenticado'] = true;
			header('Location: menuFuncionalidades.php');
			exit();
		}
	} else {
		$_SESSION['nao_autenticado'] = true;
		header('Location: menuFuncionalidades.php');
		exit();
	}
	$banco = null;
?>   