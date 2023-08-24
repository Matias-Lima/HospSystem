<?php
	session_start();
	include_once 'conexaoBanco.php';
	@$crm = $_POST["crm"];
	$result = $banco->query("SELECT * FROM medico where crm = $crm ");
	foreach ($result as $row_usuario){    
	}
	if ($row_usuario['crm'] == $crm){   
  $_SESSION['crmtroca'] = $row_usuario['crm'];
?>
<html lang="pt-br">
    <head>
        <title>HospSystem - Alterar M&eacute;dico</title>
		
		<link rel="icon" href="icones/iconebarra.png"> <!Inserindo ícone na barra do navegador>
		<link rel="stylesheet" type="text/css" href="css/estiloFormularioMedico.css">
    </head>
    <body> 
        <! Formulário HTML através do método POST >
        <form action="alteraMedico.php" method="post"> <! Método POST = Requisição HTTP>
           
		   <fieldset>
                <legend>ALTERAR - M&Eacute;DICO</legend>
            </fieldset>

            <fieldset>
                <h4>DADOS DO M&Eacute;DICO</h4><br>

                <label>NOME :</label>
                <input class ="setenta" type="text" name="nome" value="<?php echo $row_usuario['nome']; ?>" placeholder="Jos&eacute; da Silva..." required>
                &ensp;
                <label>CPF:</label>
                <input class ="trinta" type="text" name="cpf" value="<?php echo $row_usuario['cpf']; ?>" placeholder="Apenas n&uacute;meros"><br><br>

                <label>ESPECIALIDADE:</label>
                <input class ="setenta" type="text" name="especialidade" value="<?php echo $row_usuario['especialidade']; ?>" placeholder="">
                &ensp;
                <label>CRM:</label>
                <input class ="trinta" type="text" name="crm" value="<?php echo $row_usuario['crm']; ?>" placeholder="Apenas n&uacute;meros" required><br><br>


                <label>RG:</label><br>
                <input class ="vinte" type="text" name="rg" value="<?php echo $row_usuario['rg']; ?>" placeholder="Apenas n&uacute;meros"><br>

                <label>DATA DE NASCIMENTO:</label><br>
                <input class ="vinte" type="text" name="dataNascimento" value="<?php echo $row_usuario['dataNascimento']; ?>" placeholder="2000/05/25"><br>

                <label>IDADE:</label><br>
                <input  class ="vinte" type="text" name="idade" value="<?php echo $row_usuario['idade']; ?>"><br>

                <label>TELEFONE:</label><br>
                <input class ="vinte" type="text" name="telefone" value="<?php echo $row_usuario['telefone']; ?>" placeholder="Apenas n&uacute;meros"><br>

                <label>CIDADE:</label><br>
                <input class ="vinte" type="text" name="cidade" value="<?php echo $row_usuario['cidade']; ?>"><br>

                <label>ESTADO:</label><br>
                <input class ="vinte" type="text" name="estado" value="<?php echo $row_usuario['estado']; ?>"><br>

                <label>DIAS DE TRABALHO:</label><br>
                <input class ="vinte" type="text" name="diaTrabalho" value="<?php echo $row_usuario['diaTrabalho']; ?>"><br>

                <label>HORAS TRABALHADAS:</label><br>
                <input class ="vinte" type="text" name="horaTrabalha" value="<?php echo $row_usuario['horaTrabalha']; ?>"><br>
            </fieldset>
            <input class="button-submit" type="submit" value="ENVIAR">
        </form>
    </body>
</html>

<?php
	}else{
		$_SESSION['nao_autenticado'] = true;
		header('Location: menuFuncionalidades.php');
		exit();
	}
	//fecha a conexão
	$banco = null;
?>