<?php
	require 'acessoBootstrap.php';
	session_start();
	include('conexaoBanco.php');
	@$cpf = $_POST["cpf"];

	$result = $banco->query("SELECT * FROM paciente where cpf ='{$cpf}'");
	foreach ($result as $row_usuario) {
	  // Foreach para ler o número de identificação do cpf
	}
	// verificação do cpf, se for igual o programa mostra o paciente, caso contrário retorna a menuFuncionalidade com a mensagem de erro
	if ($row_usuario['cpf'] == $cpf) {
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
            <tr>
                <th scope="row">1</th>
                <td>NOME: <?php echo $row_usuario['nome']; ?></td>
                <td>IDADE: <?php echo $row_usuario['idade']; ?></td>
                <td>DATA DE NASCIMENTO: <?php echo $row_usuario['dataNascimento']; ?></td>
                <td>SEXO:  <?php echo $row_usuario['sexo']; ?></td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>ESTADO CIVIL: <?php echo $row_usuario['estadoCivil']; ?></td>
                <td>CPF: <?php echo $row_usuario['cpf']; ?></td>
                <td>ENDERE&Ccedil;O: <?php echo $row_usuario['endereco']; ?></td>
                <td>PROFISS&Atilde;O: <?php echo $row_usuario['profissao']; ?></td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>TELEFONE:<?php echo $row_usuario['telefone']; ?></td>
                <td>COR:<?php echo $row_usuario['cor']; ?></td>
                <td colspan="2">CNS:<?php echo $row_usuario['cns']; ?></td>
               

            </tr>
            <tr>
                <th scope="col" colspan="5">DADOS DO RESPONS&Aacute;VEL</th>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>NOME: <?php echo $row_usuario['nomeResponsavel']; ?></td>
                <td>PARENTESCO: <?php echo $row_usuario['parentesco']; ?></td>
                <td colspan="2">ENDERE&Ccedil;O:<?php echo $row_usuario['enderecoResponsavel']; ?> </td>
            </tr>
            <tr>
                <th scope="col" colspan="5">OCORR&Ecirc;NCIA</th>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>LOCAL DO ACIDENTE: <?php echo $row_usuario['localAcidente']; ?></td>
                <td>DATA: <?php echo $row_usuario['dataOcorrencia']; ?></td>
                <td colspan="2">NATUREZA DO ACIDENTE:<?php echo $row_usuario['naturezaAcidente']; ?> </td>
            </tr>
            <tr>
                <th scope="col" colspan="5">ATEN&Ccedil;&Atilde;O M&Eacute;DICA</th>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>ATENDIMENTO: <?php echo $row_usuario['atendimento']; ?></td>
                <td colspan="3">HIST&Oacute;RICO DA DOEN&Ccedil;A ATUAL:<?php echo $row_usuario['naturezaAcidente']; ?> </td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>PRESS&Atilde;O: <?php echo $row_usuario['estadoCivil']; ?></td>
                <td>PULSO: <?php echo $row_usuario['pulso']; ?></td>
                <td>TEMPERATURA: <?php echo $row_usuario['temperatura']; ?></td>
                <td>PESO <?php echo $row_usuario['peso']; ?></td>

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