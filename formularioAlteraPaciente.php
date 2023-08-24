<?php
	include_once 'conexaoBanco.php';
	session_start();
	@$cpf = $_POST["cpf"];
	$result = $banco->query("SELECT * FROM paciente where cpf='{$cpf}' ");
	foreach ($result as $row_usuario) {
	}
	if ($row_usuario['cpf'] == $cpf):
 $_SESSION['cfptroca'] = $row_usuario['cpf'];
?>

<html>
    <head>
        <title>HospSystem - Dados</title>
		
		<link rel="stylesheet" type="text/css" href="css/estiloFormularioPaciente.css">    
		<link rel="icon" href="icones/iconebarra.png"> <!Inserindo ícone na barra do navegador>
    </head>
    
	<body> 
        <! Formulário HTML através do método POST >
        <form action="AlteraPaciente.php" method="post"> <! Método POST = Requisição HTTP>
			<table id="tabelaAlteraPaciente">
				<tr>
					<td>
						<img src="imagens/logo.png" alt="Logo HospSystem">
					</td>
					<td>
						<h1>&nbsp;&ensp;SECRETAR&Aacute;RIA DE SA&Uacute;DE DO MUNIC&Iacute;PIO&nbsp;&ensp;</h1>
						<h3>HOSPITAL J&Uacute;LIO ALVES DE LIRA</h3>
						<h2>FOLHA DE ALTERA&Ccedil;&Atilde;O DE DADOS</h2>
					</td>
					<td>
						<label>&emsp;HOR&Aacute;RIO:</label>
						<input class="setenta" type="text" name="horarioAtendimento" value="<?php echo $row_usuario['horarioAtendimento']; ?>" placeholder="09:30"><br>
						<label>&emsp;&emsp;&emsp;DATA:</label>
						<input class="setenta" type="text" name="dataAtendimento" value="<?php echo $row_usuario['dataAtendimento']; ?>" placeholder="20/10/1952"><br>
					</td>
				</tr>
			</table>
			
            <fieldset>
                <h2>UNIDADE DE SA&Uacute;DE: HOSPITAL J&Uacute;LIO ALVES DE LIRA</h2>
            </fieldset>

            <fieldset>
                <h4>DADOS DO PACIENTE</h4><br>
				
                <label>NOME:</label>
                <input  class ="setenta" type="text" name="name" value="<?php echo $row_usuario['nome']; ?>" placeholder="Alisson da Silva..." required>
                &ensp;
                
				<label>IDADE:</label>
                <input class ="trinta" type="text" name="idade" value="<?php echo $row_usuario['idade']; ?>" placeholder="Apenas n&uacute;meros" required><br><br>

                <label>DATA DE NASCIMENTO</label>
                <input class ="vinte" type="text" name="dataNascimento" value="<?php echo $row_usuario['dataNascimento']; ?>" placeholder="12/20/1850">
                &ensp;
                    
				<label>SEXO</label>
                <input type="radio" name="sexo" value="M">Masculino
                <input type="radio" name="sexo" value="F">Feminino
                &ensp;&ensp;
                    
				<label>COR DA PELE</label>
                <input class ="vinte" type="text" name="cor" value="<?php echo $row_usuario['cor']; ?>">
                &ensp;
                    
				<label>ESTADO CIVIL</label>
                <input class ="vinte" type="text" name="estadoCivil" value=""><br><br>

                <label>CPF</label>
                <input class ="trinta" type="text" name="cpf" value="<?php echo $row_usuario['cpf']; ?>" placeholder="Apenas n&uacute;meros" required>
                &ensp;
                
				<label>CNS</label>
                <input  class ="trinta" type="text" name="cns" value="<?php echo $row_usuario['cns']; ?>" placeholder="Apenas n&uacute;meros">
                &ensp;
                    
				<label>PROFISS&Atilde;O</label>
                <input class ="trinta" type="text" name="profissao" value="<?php echo $row_usuario['profissao']; ?>" placeholder=""><br><br>

                <label>ENDERE&Ccedil;O</label>
                <input class ="setenta" type="text" name="Endereco" value="<?php echo $row_usuario['endereco']; ?>" placeholder="Endere&ccedil;o do Paciente">
                &ensp;
                    
				<label>TELEFONE</label>
                <input class ="trinta" type="text" name="telefone" value="<?php echo $row_usuario['telefone']; ?>" placeholder="Apenas n&uacute;meros"><br><br>
            </fieldset>

            <fieldset>
                <h4>DADOS DO RESPONS&Aacute;VEL</h4>

                <label>NOME</label><br>
                <input  class ="setenta" name="nomeResponsavel" value="<?php echo $row_usuario['nomeResponsavel']; ?>" placeholder="Maria Lima...">
                &ensp;
                
				<label>PARENTESCO</label>
                <input class ="trinta" type="text" name="parentesco" value="<?php echo $row_usuario['parentesco']; ?>" placeholder="Pai/Amigo/Tia"><br><br>

                <label>ENDERE&Ccedil;O</label><br>
                <input  class ="setenta" type="text" name="EnderecoResponsavel" value="<?php echo $row_usuario['enderecoResponsavel']; ?>" placeholder="Endere&ccedil;o do Responsavel"><br>
            </fieldset>

            <fieldset>
                <h4>OCORR&Ecirc;NCIA</h4>

                <label>LOCAL DO ACIDENTE</label>
                <input class ="setenta" type="text" name="localAcidente" value="<?php echo $row_usuario['localAcidente']; ?>" placeholder="Rua Viracopos">
                &ensp;
				
                <label>HOR&Aacute;RIO</label>
                <input class ="vinte" type="text" name="horarioocorrencia" value="<?php echo $row_usuario['horarioOcorrencia']; ?>" placeholder="09:30">
                &ensp;
                    
				<label>DATA</label>
                <input class ="vinte" type="text" name="dataOcorrencia" value="<?php echo $row_usuario['dataOcorrencia']; ?>" placeholder="20/10/1952"><br><br>

                <label>NATUREZA DO ACIDENTE/DOEN&Ccedil;A</label><br><br>
                <input type="checkbox" name="natureza" value="Casual">CASUAL &ensp;
				<input type="checkbox" name="natureza" value="Queda">QUEDA &ensp;
                <input type="checkbox" name="natureza" value="Acidente de Trabalho">ACIDENTE DE TRABALHO &ensp;
                <input type="checkbox" name="natureza" value="Acidente de Trânsito">ACIDENTE DE TR&Acirc;NSITO &ensp;
                <input type="checkbox" name="natureza" value="Entoxicação">ENTOXICA&Ccedil;&Atilde;O &ensp;<br>
                <input type="checkbox" name="natureza" value="Agressão">AGRESS&Atilde;O &ensp;
                <input type="checkbox" name="natureza" value="Violência Doméstica">VIOL&Ecirc;NCIA DOM&Eacute;STICA &ensp;
                <input type="checkbox" name="natureza" value="Tentativa de suicídio">TENTATIVA DE SUIC&Iacute;DIO &ensp;
                <input type="checkbox" name="natureza" value="Outra causa">OUTRA CAUSA &ensp;
            </fieldset>

            <fieldset>
                <h4>ATEN&Ccedil;&Atilde;O M&Eacute;DICA</h4>

                <label>ATENDIMENTO</label><br><br>
                <input type="radio" name="atendimento" value="clínico">Cl&iacute;nico<br>
                <input type="radio" name="atendimento" value="cirúrgico">Cir&uacute;rgico<br><br>

                <label>HIST&Oacute;RICO DA DOEN&Ccedil;A ATUAL</label>
                <input  class ="setenta" type="text" name="historicodoenca" value="<?php echo $row_usuario['historicoDoenca']; ?>" placeholder="HIST&Oacute;RICO DA DOEN&Ccedil;A ATUAL"><br><br>

                <label>EXAME-F&Iacute;SICO</label><br><br>

                <label>PRESS&Atilde;O ARTERIAL</label>
                <input  class ="vinte" type="text" name="pressao" value="<?php echo $row_usuario['pressaoArterial']; ?>" placeholder="140/40">

                <label>PULSO</label>
                <input  class ="vinte" type="text" name="pulso" value="<?php echo $row_usuario['pulso']; ?>" placeholder="40">

                <label>TEMPERATURA</label>
                <input  class ="vinte"  type="text" name="temperatura" value="<?php echo $row_usuario['temperatura']; ?>" placeholder="38">

                <label>PESO</label>
                <input  class ="vinte" type="text" name="peso" value="<?php echo $row_usuario['peso']; ?>" placeholder="52"><br><br>
            </fieldset>
                <input  class ="button-submit" type="submit" value="ENVIAR">
        </form>
    
		<?php
			endif;
			if ($row_usuario['cpf'] <> $cpf) {
				$_SESSION['nao_autenticado'] = true;
				header('Location: menuFuncionalidades.php');
				exit();
			}
		?>
    </body>
</html>
