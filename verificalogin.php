<?php
	/*Esse código verifica se a session possui a informação que foi adquerida na hora do login, caso não possua essa 
	informação a página vai ser redirecionada.*/
	
	session_start();
	if (!$_SESSION['nome']) {
		header('Location: acesso.php');
		exit();
	}
?>