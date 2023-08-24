<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!Especificando codificação da página>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<!HTTP-EQUIV controlar ações do browser e especifica melhor as infos>

		<!Especificando linguagem da página>
		<meta http-equiv="content-language" content="pt-br">

		<! Metas para facilitar a pesquisa do usuário, bem como trazer mais segurança para o site e para a pesquisa>
		<meta name="author" content="Cleyton Maciel, Estêvão Moraes, Matias Lima, Rodrigo Dias">
		<meta name="application-name" content="HospSystem">
		<meta name="description" content="HospSystem - Sistema de Gerenciamento Hospitalar">
		<meta name="keywords" content="hospital, gerenciamento, saúde">
		<meta name="robots" content="index,nofollow"> <! Indexa a página inicial, mas indexa as páginas nela referenciadas, garantindo segurança e facilidade no acesso ao essencial>
		<meta name="copyright" content="© 2019 HospSystem"/> <!Definindo direitos autorais>
		<meta name="rating" content="general"> <!Identifica para quem é a página>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1"> <! Ativando o layout responsivo>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="icon" href="icones/iconebarra.png"> <!Inserindo ícone na barra do navegador>
		
		<title>Acesso - HospSystem</title>
	</head>
	<body> <!Container>
		<div id="cabecalho"> <!Cabeçalho> 
			<table>
				<tr>
					<td>
						<img src="imagens/logo.png" alt="Logo HospSystem">
					</td>
					<td>
						<nav><! Agrupando links>
							<ul class="menu">
								<li><a href="index.php"><p class="elementosMenu">HOME</p></a></li>
								<li><a href="acesso.php"><p class="elementosMenu">ACESSO</p></a></li>
								<li><a href="contatos.html"><p class="elementosMenu">CONTATOS</p></a></li>
								<li><a href="dadosAbertos.html"><p class="elementosMenu">DADOS ABERTOS</p></a></li>
								<li><a href="sobre.html"><p class="elementosMenu">SOBRE</p></a></li>
							</ul>
						</nav>
					</td>
				</tr>
			</table>
		</div><hr id="linhaBordaMenu">

		<div id="login">
			<h1>LOGIN</h1>
			<?php 
				if (isset($_SESSION['nao_autenticado'])): 
			?>
			
				<h3>Erro: Login Inv&aacute;lido!</h3>
				
			<?php
				endif; 
				unset($_SESSION['nao_autenticado']);
			?>

			<form name="form" method="POST" action="login.php">
				<p>USU&Aacute;RIO</p>
				<input class="caixaLogin" type="text" name="nome" autocomplete="off" placeholder="Nome do Usuário"><br><br>  
				<p>SENHA</p>
				<input class="caixaLogin" type="password" name="senha" autocomplete="off" placeholder=""><br><br>   	  

				<table>
					<tr>
						<th>
							<input class="botaoForm" type="reset" value="LIMPAR" name="Limpar">
						</th>	
						<th>
							<input class="botaoForm" type="submit" value="ENTRAR" name="botao" onclick="acesso(this.form)">
						</th>	
					</tr>
				</table>
			</form>
		</div><hr id="linhaBordaMenu">
		<footer>
			<table>
				<tr>
					<th><img src="icones/html.png" alt="Logo HTML5"/></th>
					<th><img src="icones/css.png" alt="Logo CSS3"/></th>
					<th><img src="icones/github.png" alt="Logo GitHub"/></th>
				</tr>
			</table>
			<p>&copy; 2021 por HospSystem. Criado por Cleyton Maciel, Est&ecirc;v&atilde;o Moraes, Matias Lima e Rodrigo Dias.</p>
		</footer>	
	</body>
</html>	