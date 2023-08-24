<?php
	session_start();
	@$horarioatendimento = $_POST ["horarioAtendimento"];
	@$dataAtendimento = $_POST ["dataAtendimento"];
	@$nome = $_POST ["nome"];
	@$cpf = $_POST ["cpf"];
	@$cns = $_POST ["cns"];
	@$dataNascimento = $_POST ["dataNascimento"];
	@$sexo = $_POST ["sexo"];
	@$profissao = $_POST ["profissao"];
	@$estadoCivil = $_POST ["estadoCivil"];
	@$idade = $_POST ["idade"];
	@$cor = $_POST ["cor"];
	@$telefone = $_POST ["telefone"];
	@$nomeResponsavel = $_POST ["nomeResponsavel"];
	@$parentesco = $_POST ["parentesco"];
	@$localAcidente = $_POST ["localAcidente"];
	@$horarioocorrencia = $_POST ["horarioocorrencia"];
	@$dataOcorrencia = $_POST ["dataOcorrencia"];
	@$natureza = $_POST ["natureza"];
	@$atendimento = $_POST ["atendimento"];
	@$pressao = $_POST ["pressao"];
	@$pulso = $_POST ["pulso"];
	@$temperatura = $_POST ["temperatura"];
	@$peso = $_POST ["peso"];
	@$enderecoResponsavel = $_POST ["EnderecoResponsavel"];
	@$endereco = $_POST ["Endereco"];
	@$historicodoenca = $_POST ["historicodoenca"];
	include('conexaoBanco.php');
	$query = "INSERT INTO `paciente` (`cpf`, `nome`, `idade`, `atendimento`,"
			. "`horarioOcorrencia`, `dataNascimento`,`dataOcorrencia`, `telefone`,"
			. "`localAcidente`,`sexo`,`nomeResponsavel`,`estadoCivil`,"
			. "`cns`,`profissao`,`horarioAtendimento`,`dataAtendimento`,"
			. "`enderecoResponsavel`,`parentesco`,"
			. "`endereco`,`cor`,`temperatura`,"
			. "`pulso`,`naturezaAcidente`,`peso`,`pressaoArterial`,`historicoDoenca`)"
			. "VALUES('$cpf', '$nome', '$idade', '$atendimento',"
			. " '$horarioocorrencia', '$dataNascimento', '$dataOcorrencia', '$telefone',"
			. "'$localAcidente','$sexo','$nomeResponsavel','$estadoCivil',"
			. "'$cns','$profissao','$horarioatendimento','$dataAtendimento',"
			. "'$enderecoResponsavel','$parentesco','$endereco','$cor',"
			. "'$temperatura','$pulso','$natureza','$peso',"
			. "'$pressao','$historicodoenca');";

	$result = $banco->query("$query");
	if ($result){
		$_SESSION['Usuario'] = '<div class="alert alert-success" role="alert">O paciente foi cadastrado com sucesso!</div>';
		header('Location: menuFuncionalidades.php'); 
		exit();
	} else {
		print_r($row_usuario);
		$_SESSION['nao_autenticado'] = true;
		header('Location: acesso.php');
		exit();
	}
?>
