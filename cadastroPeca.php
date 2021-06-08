<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="funcoes.js"></script>
		<title>SisCOE</title>
	</head>
	<body>
			<div class="container">

					<div id="fs3" class="card" style="top: 30px;">
						<div class="card-header text-center">
							<h1 id="name">SISCOE - Cadastro de Peças</h1>
						</div>
						<div class="card-body">
							<form class="form" onsubmit="return validaFormPeca(this);" id="formCadastroPeca" action="cadastraPeca.php" method="POST">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="nome">Numeração</label>
										<input type="text" class="form-control" name="numeracao" id="numeracao" placeholder="Insira a numeração" maxlength="7">
									</div>
									<div class="form-group col-md-6">
											<label for="tipo">Tipo</label>
											<select id="tipo" class="form-control" name="tipo">
												<option value="" selected >Selecione o tipo da peça</option>
												<option value="Monitor">Monitor</option>
												<option value="Gabinete">Gabinete</option>
												<option value="Impressora">Impressora</option>
												<option value="Scanner">Scanner</option>
											</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="modelo">Modelo</label>
										<input type="text" class="form-control" name="modelo" id="modelo" placeholder="Insira o modelo">
									</div>
									<div class="form-group col-md-6">
										<label for="fabdata">Data de Fabricação</label>
										<input type="date" class="form-control" id="fabdata" name="fabdata" placeholder="Insira a data de fabricação">
									</div>
								</div>
				
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="garantia">Garantia</label>
										<input type="text" class="form-control" id="garantia" name="garantia" placeholder="Insira a garantia">
									</div>
									<div class="form-group col-md-6">
										<label for="fornecedor">Fornecedor</label>
										<input type="text" class="form-control" id="fornecedor" name="fornecedor" placeholder="Insira o fornecedor">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label for="obs">Observações</label>
										<input type="text" class="form-control" id="obs" name="obs" placeholder="Insira suas obeservações">
									</div>
								</div>

								<input type="submit" class="btn btn-primary" value="Cadastrar" name="sbt">
								<input type="button" class="btn btn-light" value="Voltar" onclick="window.location.assign('perfil.php');"/>
							</form>
						</div>
					</div>
				</div>
	
	</body>
</html>
