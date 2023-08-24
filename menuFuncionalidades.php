<?php
    include_once 'verificalogin.php';
?>

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

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="icon" href="icones/iconebarra.png"> <!Inserindo ícone na barra do navegador>
		
        <title>Sistema - HospSystem</title>
        <style>
            /*Edição do link*/
            a{
                color: #FF0000;
                text-decoration: none; 
            }
            a:hover{
                color: white;
                text-decoration: none; 
            }
            /*cor do link quando o mouse estiver sobre ele*/
            a:alink{
                color:white;  
            }
            a.center{
                text-align: center;
            }
        </style>
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
                            <a href="index.php"><button type="button" class="btn btn-outline-danger">HOME</button></a>
							<a class="center" href="sobre.html" data-toggle="modal" data-target="#addUsuarioModal"><button type="button" class="btn btn-outline-danger">CADASTRAR USUÁRIO NO SISTEMA</button></a>
                            <a href="logout.php"<?php echo"data-confirm='Tem certeza de que deseja sair dessa página?'"; ?>><button type="button" class="btn btn-outline-danger">SAIR</button></a>     
                        </nav>
                    </td>
                </tr>
            </table>
        </div><hr id="linhaBordaMenu">

        <div id="funcionalidadesSistema">
            <h3>Bem-vindo(a), <?php echo $_SESSION['nome']; ?>, ao HospSystem!</h3><br>
            <h5>MENU DE FUNCIONALIDADES DO SISTEMA</h5><br>

            <!-- Leitura da session que mostra o erro ou o sucesso da operação -->
            <?php
				if (isset($_SESSION['nao_autenticado'])) {
            ?>
                <div class="alert alert-danger" role="alert">Erro: Operação não realizada!</div>
            <?php
				}else{
					echo @$_SESSION['Usuario'];
				}
				//Limpando as session
				unset($_SESSION['nao_autenticado']);
				unset($_SESSION['Usuario']);
            ?>
			
            <h6>PACIENTE</h6>
            <table class="menuPaciente">
                <tr>
                    <td>                    
                        <nav><! Agrupando links>
                            <!-- data-toggle="modal" data-target="#RemoverUsuarioModal" -> direciona o botão para o modal --> 
                            <a href="formularioCadastroPaciente.html"><button type="button" class="btn btn-outline-danger">CADASTRAR</button></a>
                            <a href="RemoverPaciente.php" data-toggle="modal" data-target="#RemoverUsuarioModal"><button type="button" class="btn btn-outline-danger">REMOVER</button></a>
                            <a href="MostrarDadosPaciente.php" data-toggle="modal" data-target="#MostrarUsuarioModal"><button type="button" class="btn btn-outline-danger">EXIBIR DADOS</button></a>
                            <a href="Class.Paciente.php"><button type="button" class="btn btn-outline-danger">EXIBIR TODOS</button></a>
                            <a href="formularioAlteraPaciente.php" data-toggle="modal" data-target="#AlteraUsuarioModal"><button type="button" class="btn btn-outline-danger">ALTERAR DADOS</button></a>                
                        </nav>
                    </td>
                </tr>
            </table><br><br>

            <h6>M&Eacute;DICO</h6>
            <table id="menuMedico">
                <tr>
                    <td>
                        <nav><! Agrupando links>
                            <a href="formularioCadastroMedico.html"><button type="button" class="btn btn-outline-danger">CADASTRAR</button></a>
                            <a href="RemoverMedico.php" data-toggle="modal" data-target="#RemoverMedicoModal"><button type="button" class="btn btn-outline-danger">REMOVER</button></a>
                            <a href="MostrarDadosMedico.php"  data-toggle="modal" data-target="#MostrarMedicoModal"><button type="button" class="btn btn-outline-danger">EXIBIR DADOS</button></a>
                            <a href="formularioAlteraMedico.php" data-toggle="modal" data-target="#AlteraMedicoModal"><button type="button" class="btn btn-outline-danger">ALTERAR DADOS</button></a>      
                        </nav>
                    </td>
                </tr>
            </table><br>

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

        <!-- modal de cadastro usuário para login-->
        <div id="addUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUsuarioModalLabel">Cadastrar Usu&aacute;rio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="msg-error"></span>
                        <form method="post" id="insert_form" action="inserirDadosUsuarios.php">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nome</label>
                                <div class="col-sm-10">
                                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome completo" required >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Senha</label>
                                <div class="col-sm-10">
                                    <input name="senha" type="password" class="form-control" id="email" placeholder="Senha" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="submit" name="CadUser" id="CadUser" value="Cadastrar" class="btn btn-outline-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		<!-- modal Altera paciente -->
		<div id="AlteraUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addUsuarioModalLabel">Digite o número do CPF do Paciente</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<span id="msg-error"></span>
						<form method="post" id="insert_form" action="formularioAlteraPaciente.php">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">CPF</label>
								<div class="col-sm-10">
									<input name="cpf" type="text" class="form-control" id="nome" placeholder="CPF">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-10">
									<input type="submit" name="CadUser" id="CadUser" value="VERIFICAR" class="btn btn-outline-success">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- modal Mostra paciente-->
		<div id="MostrarUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addUsuarioModalLabel">Digite o número do CPF do Paciente</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<span id="msg-error"></span>
						<form method="post" id="insert_form" action="MostrarDadosPaciente.php">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">CPF</label>
								<div class="col-sm-10">
									<input name="cpf" type="text" class="form-control" id="nome" placeholder="CPF">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-10">
									<input type="submit" name="CadUser" id="CadUser" value="VERIFICAR" class="btn btn-outline-success">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal para a remoção de paciente -->
		<div id="RemoverUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addUsuarioModalLabel">Digite o número do CPF do Paciente</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<span id="msg-error"></span>
						<form method="post" id="insert_form" action="RemoverPaciente.php">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">CPF</label>
								<div class="col-sm-10">
									<input name="cpf" type="text" class="form-control" id="nome" placeholder="CPF">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-10">
									<input type="submit" name="CadUser" id="CadUser" value="VERIFICAR" class="btn btn-outline-success">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- modal Altera médico -->
		<div id="AlteraMedicoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addUsuarioModalLabel">Digite o número do CRM do Médico</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<span id="msg-error"></span>
						<form method="post" id="insert_form" action="formularioAlteraMedico.php">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">CRM</label>
								<div class="col-sm-10">
									<input name="crm" type="text" class="form-control" id="nome" placeholder="CRM">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-10">
									<input type="submit" name="CadUser" id="CadUser" value="VERIFICAR" class="btn btn-outline-success">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- modal Mostrar médico-->
		<div id="MostrarMedicoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addUsuarioModalLabel">Digite o número do CRM do Médico</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<span id="msg-error"></span>
						<form method="post" id="insert_form" action="MostrarDadosMedico.php">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">CRM</label>
								<div class="col-sm-10">
									<input name="crm" type="text" class="form-control" id="nome" placeholder="CRM" required>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-10">
									<input type="submit" name="CadUser" id="CadUser" value="VERIFICAR" class="btn btn-outline-success">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal para a remoção de médico -->
		<div id="RemoverMedicoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addUsuarioModalLabel">Digite o número do CRM do Médico</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<span id="msg-error"></span>
						<form method="post" id="insert_form" action="RemoverMedico.php">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">CRM</label>
								<div class="col-sm-10">
									<input name="crm" type="text" class="form-control" id="nome" placeholder="CRM" required>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-10">
									<input type="submit" name="CadUser" id="CadUser" value="VERIFICAR" class="btn btn-outline-success">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="js/personalizado.js"></script>
    </body>
<html>	