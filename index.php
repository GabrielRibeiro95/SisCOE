<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>SisCOE - Sistema de Controle de Estoque</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="funcoes.js"></script>
	</head>
	<body>
		<div class="container">
			<form id="formLogin" method="POST" onsubmit="return validaLogin();" action="validaLogin.php">
				<div id="fs3" class="card" style="top: 30px;">
					<div class="card-header text-center">
						<h1 id="name">SISCOE - Login</h1>
					</div>
					<?php
						if (isset($_SESSION['nao_autenticado'])):
					?>
					<p style="color:red;">Login e/ou senha inválidos!</p>
					<?php
						endif;
						unset($_SESSION['nao_autenticado']);
					?>
					<div class="card-body">
						<div class="form">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="lblMat">Matrícula</label>
									<input type="text" class="form-control" maxlength="7" id="inMat" name="inMat" class="it" onkeypress='return filtroTeclas(event)'>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="lblSenha">Senha</label>
									<input type="password" class="form-control" maxlength="12" id="inSenha" name="inSenha">
								</div>
							</div>
							<input type="button"  value="Entrar" class="btn btn-primary" onclick="return validaLogin()">
							<label>Caso não tenha matrícula, <a href="cadastroUsuario.php" target="_self">Cadastre-se</a></label>
						</div>
					</div>
				</div>
			</form>
		</div> 
	</body>
</html>