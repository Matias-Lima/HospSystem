<?php

	//Implementando a Programação Orientada a Objetos (POO)
	class Paciente{
		
		/*Passagem de paramento por valor, a função criara uma copia, não alterando na variável original.
		Essa class foi criada para atender os requisitos do projeto*/
		
		var $a = true;
		function MostrarPaciente($a) {
			if($a == true){
			include_once 'MostrarTodosPaciente.php';
			}
		}
	}

	$matias = new Paciente();
	$matias->MostrarPaciente('true');
?>
