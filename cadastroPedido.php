
<!DOCTYPE html>

<html>
	<head>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<meta charset="UTF-8"/>
		<script src="funcoes.js"></script>
		<title>SisCOE</title>
	</head>
	<body>
			<div class="container">

					<div id="fs3" class="card" style="top: 30px;">
						<div class="card-header text-center">
							<h1 id="name">SISCOE - Cadastro de Pedido</h1>
						</div>
						<div class="card-body">
							<form class="form" id="formCadastroPedido" onsubmit="return validaFormPedido(this);" action="cadastraPedido.php" method="POST">
								<div class="form-row">
									<div class="form-group col-md-9">
											<label for="tipo">Peça</label>
											<select id="peca" class="form-control" name="peca">
												<option value="">Selecione o tipo de peça</option>
												<option value="Monitor">Monitor</option>
												<option value="Gabinete">Gabinete</option>
												<option value="Impressora">Impressora</option>
												<option value="Scanner">Scanner</option>
											</select>
									</div>
									<div class="form-group col-md-3">
										<label for="modelo">Quantidade</label>
										<input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Insira o Quantidade">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label for="obs">Observações</label>
										<input type="text" class="form-control" id="obs" name="obs" placeholder="Insira suas obeservações">
									</div>
								</div>

								<input type="submit" class="btn btn-primary" value="Realizar pedido"/>
								<input type="button" class="btn btn-gray" value="Voltar" onclick="window.location.assign('perfil.php');"/>
							</form>
						</div>
					</div>
				</div>
	</body>
</html>
