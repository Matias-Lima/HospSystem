<?php

	// Esse arquivo cria as tabelas Médico, Paciente e Usuários
	include_once 'conexaoBanco.php';
	
	$query = "CREATE TABLE `hospital`.`medico` (`cpf` VARCHAR(255), `nome` VARCHAR(255), `idade` integer, "
			. "`cidade` VARCHAR(70),`estado` CHAR(2),`especialidade` VARCHAR(50),`dataNascimento`date,"
			. "`diaTrabalho` VARCHAR(50),`horaTrabalha` VARCHAR(50),`crm` VARCHAR(50),`rg` VARCHAR(50),"
			. "`telefone` VARCHAR(50),PRIMARY KEY (`crm`)) ENGINE = InnoDB;";

	$executa = $banco->query("$query");
	if($executa){
		echo'Tabela criada com sucesso!<br>';
	}else{
		print_r($banco->errorInfo());
	}

	$query = "CREATE TABLE `hospital`.`paciente` (`cpf` VARCHAR(255), `nome` VARCHAR(255), `idade` integer, "
			. "`atendimento` VARCHAR(70),`horarioOcorrencia` VARCHAR(2),`dataNascimento`date,`dataOcorrencia` date,"
			. "`telefone` VARCHAR(50),`localAcidente` VARCHAR(50),`sexo` CHAR(1),`nomeResponsavel` VARCHAR(50),"
			. "`estadoCivil` VARCHAR(50),`cns` VARCHAR(20),`profissao` VARCHAR(50),`horarioAtendimento` VARCHAR(50),"
			. "`dataAtendimento` date,`enderecoResponsavel` VARCHAR(50),`parentesco` VARCHAR(50),`endereco` VARCHAR(150),"
			. "`cor` VARCHAR(15),`temperatura` VARCHAR(15),`pulso` VARCHAR(50),`naturezaAcidente` VARCHAR(100),`peso` VARCHAR(15),`pressaoArterial` VARCHAR(15),`historicoDoenca` VARCHAR(150),"
			. "PRIMARY KEY (`cpf`)) ENGINE = InnoDB;";
			
	//Verificação de execução
	$executa = $banco->query("$query");
	if($executa){
		echo 'Tabela criada com sucesso!<br>';
	}else{
		print_r($banco->errorInfo());
	}

	$query = "CREATE TABLE `hospital`.`usuario` (`login` VARCHAR(255), `senha` VARCHAR(255), PRIMARY KEY (`senha`)) ENGINE = InnoDB;";

	$executa = $banco->query("$query");
	if ($executa) {
		echo 'Tabela criada com sucesso!<br>';
	} else {
		print_r($banco->errorInfo());
	}
	$query = "INSERT INTO `usuario`(`login`,`senha`) VALUES ('Matias','123');";
	$executa = $banco->query("$query");
	if ($executa) {
		echo 'Primeiro Usuário inserido com sucesso!<br>';
	} else {
		print_r($banco->errorInfo());
	}
?>




