<!DOCTYPE html>
<html>
	<head>	
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="funcoes.js"></script>
		<meta charset="UTF-8"/>
		<title>SisCOE</title>
	</head>
	<body>
		<?php
			$conexao=mysqli_connect('localhost', 'root', '', 'siscoe') or die('Nao foi possível conectar ao banco de dados');
			mysqli_set_charset($conexao,"utf8");
			
			if (isset($_POST['op'])) {
				$busca=$_POST['op'];
			} else {
				$busca="";
			}
			
			if ($busca!="") {
				$key=$_POST['busca'];
			} 
			
			$query="select * from peca";

			if ($busca=="Número") {
				$query.=" where num='{$key}'";
			} else if ($busca=="Tipo") {
				$query.=" where tipo='{$key}'";
			} else if ($busca=="Modelo") {
				$query.=" where modelo='{$key}'";
			}
			
			$result=mysqli_query($conexao, $query);
			$rows=mysqli_num_rows($result);	
		?>
		<div class="container">
			<div id="fs3" class="card" style="top: 30px;">
				<div class="card-header text-center">
					<h1 id="name">SISCOE - Busca</h1>
				</div>
				<div class="card-body">
					<h1>Resultados:</h1>
					<?php
						if ($rows==0) {
							echo "Não foram encontrados resultados<br><br>";
						} else {
							$pecas=array();
							echo "<form method='POST' action='deletaPeca.php'><table class='table table-hover'><thead>
									<tr>
										<th scope='col'>Numeração</th>
										<th scope='col'>Tipo</th>
										<th scope='col'>Modelo</th>
										<th scope='col'>Fornecedor</th>
										<th scope='col'>Data de Fabricação</th>
										<th scope='col'>Garantia</th>
										<th scope='col'>Observações</th>
									</tr></thead>
									<tbody>";
							for ($i=0; $i<$rows; $i++) {
								$pecas[] = mysqli_fetch_array($result);
								if ($pecas[$i][5]<=0) {
									$pecas[$i][5]=" - ";
								} else if ($pecas[$i][5]==1) {
									$pecas[$i][5].=" ano";
								} else {
									$pecas[$i][5].=" anos";	
								}												
								echo "<tr>";
								for ($j=0; $j<count($pecas[$i])/2; $j++) {
									if ($pecas[$i][$j]=="") {
										$pecas[$i][$j]=" - ";
									}
									echo "<td>".$pecas[$i][$j]."</td>";
								}
								$pecas[$i][0];
								$text="window.location.assign('deletaPeca.php');";
			
								echo "<td><button id='delete' name='delete' type='submit' class='btn btn-danger' value='".$pecas[$i][0]."' onclick=".$text.">Deletar</button></td>";
								echo "</tr>";
							}
							echo "</table></form>";
						}
					?>
					<input type="button" value="Voltar" class="btn btn-gray" onclick="window.location.assign('busca.php');"/>
				</div>
			</div>			
		</div>
	</body>
</html>