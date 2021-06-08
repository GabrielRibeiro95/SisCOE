<!DOCTYPE html>
<?php
	session_start();
?>
<html>
<head>
	<meta charset="UTF-8"/>
	<script src="funcoes.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

	<div id="fs3" class="card" style="top: 30px;">
		<div class="card-header text-center">
			<h1 id="name">SISCOE - Cadastro de Usuário</h1>
		</div>
		<div class="card-body">
			<?php
				if (isset($_SESSION['ja_tem_usuario'])):
			?>
			<p style="color:red;">Já existe um usuário com a matrícula especificada</p>
			<?php
				endif;
				unset($_SESSION['ja_tem_usuario']);
			?>
			<form class="form" id="formCadastroUsuario" onsubmit="return validaForm(this);" action="cadastraUsuario.php" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
					</div>
					<div class="form-group col-md-6">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a Senha" maxlength="12">
					</div>
					<div class="form-group col-md-6">
						<label for="rsenha">Confirme a Senha</label>
						<input type="password" class="form-control" id="rsenha" name="rsenha" placeholder="Confirme a Senha" maxlength="12">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="telefone">Telefone</label>
						<input type="text" class="form-control" name="telefone" placeholder="Telefone" maxlength="11">
					</div>
					<div class="form-group col-md-6">
						<label for="cargo">Cargo</label>
						<select id="cargo" class="form-control" name="cargo">
							<option value="" selected >Selecione o cargo</option>
							<option value="Técnico">Técnico</option>
							<option value="Vendedor">Vendedor</option>
							<option value="Gerente">Gerente</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="matricula">Matrícula</label>
						<input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matrícula" maxlength="7">
					</div>
					<div class="form-group col-md-6">
						<label for="nascdata">Data de Nascimento</label>
						<input type="date" class="form-control" id="nascdata" name="nascdata" placeholder="Data de Nanscimento">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="ingdata">Data de Ingresso</label>
						<input type="date" class="form-control" id="ingdata" name="ingdata" placeholder="Data de Ingresso">
					</div>
					<div>
						<label for="foto">Foto</label>
						<input type="file" id="foto" name="foto">
					</div>
					
				</div>
				<input type="submit"  value="CADASTRAR" class="btn btn-primary">
				<input type="button" value="Sair" class="btn btn-light" onclick="window.location.assign('index.php');"/>
			</form>

			</div>
		</div>
	</div>
</div>
</body>
</html>
