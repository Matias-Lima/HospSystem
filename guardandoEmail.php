<?php
	session_start();
	@$email = $_POST ["email"];
	
	//Testando o e-mail
	$tamanho = strlen($email);
	$t = true;
	for ($i = 0; $i <= $tamanho; $i++) {
		if ((substr($email, $i, 1) == ' ') || (substr($email, $tamanho - 1, 1) == '@')) {
			@$emailver = "Este e-mail não é valido!";
			$t = false;
		}
	}
	
	// ----- Guardando os Dados -----
	//Conferindo se o arquivo existe
	if (file_exists("arq.txt")) {
		// Arquivo criado, não precisamos criá-lo.  
	} else {
		$dados = fopen("arq.txt", "w");
	}
	
	//Se o email for válido, ele será adicionado ao arquivo arq.txt
	if ($t == true) {
		$dados = fopen("arq.txt", "a");
		$teste1 = fwrite($dados, "Email:$email");
		$teste = fwrite($dados, "\r\n");
		fflush($dados);
		fclose($dados);
		header('Location: index.php');
		exit();
	}else {
		header('Location: index.php');
	}
?>


