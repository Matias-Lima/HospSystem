<?php
	include_once 'conexaoBanco.php';
	session_start();
	$troca = $_SESSION['crmtroca'];
	
	@$nome = $_POST ["nome"];
	@$cpf = $_POST ["cpf"];
	@$crm = $_POST ["crm"];
	@$rg = $_POST ["rg"];
	@$dataNascimento = $_POST ["dataNascimento"];
	@$especialidade = $_POST ["especialidade"];
	@$idade = $_POST ["idade"];
	@$telefone = $_POST ["telefone"];
	@$cidade = $_POST ["cidade"];
	@$estado = $_POST ["estado"];
	@$diaTrabalho = $_POST ["diaTrabalho"];
	@$horaTrabalha = $_POST ["horaTrabalha"];

	$result = $banco->query("UPDATE medico SET cpf='{$cpf}',nome='{$nome}',idade='{$idade}',cidade='{$cidade}',estado='{$estado}',especialidade='{$especialidade}',dataNascimento='{$dataNascimento}',diaTrabalho='{$diaTrabalho}',horaTrabalha='{$horaTrabalha}',crm='{$crm}',rg='{$rg}',telefone='{$telefone}'  WHERE crm= '{$troca}'");
	if ($result){
		$_SESSION['Usuario'] = '<div class="alert alert-success" role="alert">Os dados do médico foram alterados com sucesso!</div>';
		header('Location: menuFuncionalidades.php'); 
		exit();
	}else{
		print_r($row_usuario);
		 $_SESSION['nao_autenticado'] = true;
		 header('Location: menuFuncionalidades.php');
		exit();
	}
	$banco = null;
?>