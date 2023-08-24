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
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<link rel="icon" href="icones/iconebarra.png"> <!Inserindo ícone na barra do navegador>
		
		<title>HospSystem</title>
		<script>
			function msg(){
				alert("E-mail enviado com sucesso! Obrigado por usar o HospSystem!");
			}
		</script>
	</head>
	<body> <!Container>
		<div id="cabecalho"> <!Cabeçalho> 
			<table>
				<tr>
					<td>
						<img src="imagens/logo.png" alt="Logo HospSystem">
					</td>
					<td id="tdMenu">
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

		<div class="slideFotos">
			<img src="imagens/hospital1.jpg" alt="Atendimento hospitalar"/>
			<img src="imagens/hospital2.jpg" alt="Sala de tomografia"/>
			<img src="imagens/hospital3.jpg" alt="Sala de cirurgia"/>
			<img src="imagens/hospital4.jpeg" alt="Leitos"/>
			<img src="imagens/hospital5.jpg" alt="Cirurgia computadorizada"/>
			<img src="imagens/hospital6.jpg" alt="Medicna interativa"/>
		</div>

		<div id="saibaMais">
			<br><br><p>HospSystem<a href="sobre.html"><button>SAIBA MAIS</button></a></p>
		</div> 

		<div id="funcionalidades">
			<h3>SISTEMA DE GERENCIAMENTO HOSPITALAR</h3>
			<table>
				<tr>
					<th>
						<img src="icones/armazenamento.png" alt="Desenho armazenamento"/>
					</th>

					<th>
						<img src="icones/controle.png" alt="Desenho controle"/>
					</th>

					<th>
						<img src="icones/gerenciamento.png" alt="Desenho gerenciamento"/>
					</th>
				</tr>

				<tr>
					<th>
						<p>ARMAZENAMENTO</p>
					</th>

					<th>
						<p>CONTROLE</p>
					</th>

					<th>
						<p>GERENCIAMENTO</p>
					</th>
				</tr>
			</table>
		</div>

		<!Resolver para onde irá mandar o e-mail>
		<div id="receberAtualizacoes">
			<br><br><p>Receba nossas atualiza&ccedil;&atilde;o e dicas de sa&uacute;de</p><br> 
			<form action="guardandoEmail.php" method="POST"> 
				<p>E-MAIL:<br><input type="text" size="30" name="email" required><br><br><input id="botaoEnviar" type="submit" name="enviar" value="ENVIAR" onclick="msg()"></p> 
			</form>
		</div>

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

		<!Importação de documentação js e css para criar o slide de fotos>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script type="text/javascript" src="js/slide.js"></script>
	</body>
</html>