<?php
	session_start();
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

	include('conexaoBanco.php');
	$query = "INSERT INTO `medico` (`cpf`, `nome`, `idade`, `cidade`,"
			. "`estado`, `especialidade`,`dataNascimento`, `diaTrabalho`,"
			. "`horaTrabalha`,`crm`,`rg`,`telefone`)"
			. "VALUES('$cpf', '$nome', '$idade', '$cidade',"
			. " '$estado', '$especialidade', '$dataNascimento', '$diaTrabalho',"
			. "'$horaTrabalha','$crm','$rg','$telefone');";

	$result = $banco->query("$query");
	if ($result){
		$_SESSION['Usuario'] = '<div class="alert alert-success" role="alert">O médico foi cadastrado com sucesso!</div>';
		header('Location: menuFuncionalidades.php'); 
		exit();
	}else{
		print_r($row_usuario);
		$_SESSION['nao_autenticado'] = true;
		header('Location: menuFuncionalidades.php');
		exit();
	}
?>