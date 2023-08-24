<?php
	include_once 'conexaoBanco.php';
	session_start();
	// Session que contem o cpf passado
	@$troca = $_SESSION['cfptroca'];

	@$horarioatendimento = $_POST ["horarioAtendimento"];
	@$dataAtendimento = $_POST ["dataAtendimento"];
	@$nome = $_POST ["name"];
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

	$result = $banco->query("UPDATE paciente SET  cpf='{$cpf}',nome='{$nome}',idade='{$idade}', atendimento = '{$atendimento}',horarioOcorrencia = '{$horarioocorrencia}', dataNascimento = '{$dataNascimento}',dataOcorrencia = '{$dataOcorrencia}',telefone = '{$telefone}',localAcidente = '{$localAcidente}',sexo ='{$sexo}',nomeResponsavel = '{$nomeResponsavel}',estadoCivil = '{$estadoCivil}',cns = '{$cns}', profissao = '{$profissao}',horarioAtendimento = '{$horarioatendimento}',dataAtendimento = '{$dataAtendimento}',enderecoResponsavel = '{$enderecoResponsavel}',parentesco = '{$enderecoResponsavel}',endereco= '{$endereco}',cor = '{$cor}',temperatura = '{$temperatura}',pulso = '{$pulso}',naturezaAcidente = '{$natureza}',peso = '{$peso}',pressaoArterial = '{$pressao}',historicoDoenca = '{$historicodoenca}' WHERE cpf= '{$troca}'");

	if ($result){
		$_SESSION['Usuario'] = '<div class="alert alert-success" role="alert">Os dados do paciente foram alterados com sucesso!</div>';
		header('Location: menuFuncionalidades.php'); 
		exit();
	}else{
		print_r($row_usuario);
		 $_SESSION['nao_autenticado'] = true;
		 header('Location: acesso.php');
		exit();
	}
	$banco = null;
?>