<?php
	session_start();
	require 'acessoBootstrap.php';
	include_once 'conexaoBanco.php';
	@$crm = $_POST["crm"];
	$result = $banco->query("SELECT * FROM medico where crm = $crm ");
	foreach ($result as $row_usuario) {
		
	}
	if ($row_usuario['crm'] == $crm) {
?>
    <fieldset>
        <h2>UNIDADE DE SA&Uacute;DE: HOSPITAL J&Uacute;LIO ALVES DE LIRA</h2>
    </fieldset>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" colspan="5">DADOS DO M&Eacute;DICO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>NOME: <?php echo $row_usuario['nome']; ?></td>
                <td>IDADE: <?php echo $row_usuario['idade']; ?></td>
                <td>DATA DE NASCIMENTO: <?php echo $row_usuario['dataNascimento']; ?></td>
                <td>ESPECIALIDADE:  <?php echo $row_usuario['especialidade']; ?></td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>RG: <?php echo $row_usuario['rg']; ?></td>
                <td>CPF: <?php echo $row_usuario['cpf']; ?></td>
                <td>ESTADO: <?php echo $row_usuario['estado']; ?></td>
                <td>CIDADE: <?php echo $row_usuario['cidade']; ?></td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>CRM:<?php echo $row_usuario['crm']; ?></td>
                <td>TELEFONE:<?php echo $row_usuario['telefone']; ?></td>
                <td>DIA TRABALHA:<?php echo $row_usuario['diaTrabalho']; ?></td>
                <td>HORA TRABALHA: <?php echo $row_usuario['horaTrabalha']; ?></td>
            </tr>
        </tbody>
    </table>
	<a href="menuFuncionalidades.php"><button type="button" class="btn btn-outline-dark">Voltar ao Menu</button></a>

<?php
	} else {
		$_SESSION['nao_autenticado'] = true;
		header('Location: menuFuncionalidades.php');
		exit();
	}
	//fecha a conexão
	$banco = null;
?>