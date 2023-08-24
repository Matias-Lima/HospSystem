<?php
	//Destroi a session que permite o acesso ao usuário
	session_start();
	session_destroy();
	header('Location: acesso.php');
	exit();
?>
