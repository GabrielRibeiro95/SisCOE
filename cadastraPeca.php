<?php
	
	require_once('classes.php');
	
	session_start();
	
	$conexao=mysqli_connect('localhost', 'root', '', 'siscoe') or die('Nao foi possível conectar ao banco de dados');
	mysqli_set_charset($conexao,"utf8");
	
	$num=$_POST['numeracao'];
	$tipo=$_POST['tipo'];
	$modelo=$_POST['modelo'];
	$fornecedor=$_POST['fornecedor'];
	$dtFab=$_POST['fabdata'];
	$garantia=$_POST['garantia'];
	$obs=$_POST['obs'];
	
	$nova = new Peca($num, $tipo, $modelo, $fornecedor, $dtFab, $garantia, $obs);
	
	//$_SESSION['mat'] = $mat;
	//$_SESSION['pw'] = $pw;
	//echo $_SESSION['mat']."/".$_SESSION['pw'];
	//echo $num.$tipo.$modelo.$fornecedor.$dtFab.$garantia.$obs;
	
	$verifica=mysqli_num_rows(mysqli_query($conexao, "select * from peca where num='{$num}'"));
			
	if ($verifica >= 1) {
		echo "Já existe uma peça com o número especificado<br>";
		header('Location: cadastroPeca.php');
	} else {
		$query="insert into peca values({$num}, '{$tipo}', '{$modelo}', '{$fornecedor}', '{$dtFab}', '{$garantia}', '{$obs}')";
		
		if (mysqli_query($conexao, $query)==true) {
			echo "Adicionada com sucesso<br>";
		} else {
			echo "Erro!<br>";
		}
		header('Location: perfil.php');
	}
	
?>