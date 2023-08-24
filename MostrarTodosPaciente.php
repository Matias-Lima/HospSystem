<?php
	require 'acessoBootstrap.php';
	session_start();
	include('conexaoBanco.php');
	$result = $banco->query("SELECT nome, cpf, idade FROM paciente");

	foreach ($result as $row_usuario){
		@$a = $a + 1;
		$nome[$a] = $row_usuario['nome'];
		$cpf[$a] = $row_usuario['cpf'];
		$idade[$a] = $row_usuario['idade'];
	}
	
	//Bolha para organizar os pacientes em ordem crescente de idade 
	$fim = $a;
	do {
		$trocou = false;
		for ($i = 1; $i <= ($fim - 1); $i++):
			if ($idade[$i] > $idade[$i + 1]):
				$tempnome = $nome[$i];
				$tempidade = $idade[$i];
				$tempcpf = $cpf[$i];
				$nome[$i] = $nome[$i + 1];
				$idade[$i] = $idade[$i + 1];
				$cpf[$i] = $cpf[$i + 1];
				$nome[$i + 1] = $tempnome;
				$idade[$i + 1] = $tempidade;
				$cpf[$i + 1] = $tempcpf;
				$trocou = true;
			endif;
		endfor;
		$fim = $fim - 1;
	}while ($trocou);
?>
	<fieldset>
		<h2>UNIDADE DE SA&Uacute;DE: HOSPITAL J&Uacute;LIO ALVES DE LIRA</h2>
	</fieldset>
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col" colspan="5">DADOS DO PACIENTE</th>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($i = 1; $i <= $a; $i++) {
					echo "<tr>";
					echo"<th scope=row>$i</th>";
					echo "<td> NOME: " . $nome[$i] . "</td><td>CPF: " . $cpf[$i] . "</td><td>IDADE: " . $idade[$i] . "</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
	<a href="menuFuncionalidades.php"><button type="button" class="btn btn-outline-dark">Voltar ao Menu</button></a>

