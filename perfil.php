<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<title>SisCOE</title>
		<script>
		</script>
	</head>
	<body>
		<?php
			
			define("PATH", "Fotos/");
			
			session_start();
			
			$conexao=mysqli_connect('localhost', 'root', '', 'siscoe') or die('Nao foi possível conectar ao banco de dados');
			
			//Protege contra ataque de SQL Injection
			$mat=$_SESSION['mat'];//mysqli_real_escape_string($conexao, $_POST['inMat']);
			$pw=$_SESSION['pw'];//mysqli_real_escape_string($conexao, $_POST['inSenha']);
			
			//echo $_SESSION['mat']."/".$_SESSION['pw'];
			
			$query="select * from usuario where mat='{$mat}' and senha=md5('{$pw}')";
			
			$result=mysqli_query($conexao, $query);
			
			$row=mysqli_num_rows($result);
			
			$fields = mysqli_fetch_array($result);
			$fields[0] = utf8_encode($fields[0]);
			
			$calculaIdade="select year(from_days(to_days(now())-to_days(usuario.dtNasc))) from usuario where mat='{$mat}' and senha=md5('{$pw}')";
			
			$idade = mysqli_fetch_array(mysqli_query($conexao, $calculaIdade));
			
			$foto=$fields[8];
			
			function formataTel($numero) {
				$novo=substr_replace($numero, '(', 0, 1);
				$novo=substr_replace($novo, ') ', 3, 0);
				$novo=substr_replace($novo, '-', 9, 0);
				return $novo;
			}
			
			function formataData($data) {
				return date("d/m/Y", strtotime($data));
			}
	
		?>
			<div class="container">

					<div id="fs3" class="card" style="top: 30px;">
						<div class="card-header text-center">
							<h1 id="name">SISCOE - Bem-vindo, <?php echo utf8_encode($fields[1])?></h1>
						</div>
						<div>
							<nav class="navbar navbar-light bg-light">
								<a class="navbar-brand" href="#">
									<center>
										<img src=<?php echo PATH.$foto?> width="128" height="128" class="d-inline-block align-top">
									</center>
								</a>
							</nav>
						</div>
						<div class="card-body">
							<form class="form">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="modelo"><b><i>E-mail: </i></b><?php echo $fields[3]?></label>
									</div>
									<div class="form-group col-md-6">
										<label for="fabdata"><b>Telefone: </b><?php echo formataTel($fields[4])?></label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="modelo"><b>Cargo: </b><?php echo utf8_encode($fields[5])?></label>
									</div>
									<div class="form-group col-md-6">
										<label for="fabdata"><b>Matrícula: </b><?php echo $fields[0]?></label>
									</div>
								</div>
				
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="garantia"><b>Idade: </b><?php echo $idade[0]?></label>
									</div>
									<div class="form-group col-md-6">
										<label for="fornecedor"><b>Data de ingresso: </b><?php echo formataData($fields[7])?></label>
									</div>
								</div>

								<input type="button" value="Cadastrar peças" class="btn btn-primary" onclick="window.location.assign('cadastroPeca.php');"/>
								<input type="button" value="Realizar pedido" class="btn btn-primary" onclick="window.location.assign('cadastroPedido.php');"/>
								<input type="button" value="Verificar estoque" class="btn btn-primary" onclick="window.location.assign('busca.php');"/>
								<input type="button" value="Sair" class="btn btn-light" onclick="window.location.assign('index.php');"/>
							</form>
						</div>
					</div>
				</div>
	
	</body>
</html>