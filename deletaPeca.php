<?php
	
	require_once('classes.php');
	
	session_start();
	
	$conexao=mysqli_connect('localhost', 'root', '', 'siscoe') or die('Nao foi possível conectar ao banco de dados');
	mysqli_set_charset($conexao,"utf8");
	
	//$peca=$_POST['peca'];
	//$quantidade=$_POST['quantidade'];
	$num=$_POST['delete'];
	
	
	//$_SESSION['mat'] = $mat;
	//$_SESSION['pw'] = $pw;
	//echo $_SESSION['mat']."/".$_SESSION['pw'];
	//echo $num.$tipo.$modelo.$fornecedor.$dtFab.$garantia.$obs;

	$query="delete from peca where num='{$num}'";
	
	echo $query."<br>";
		
	if (mysqli_query($conexao, $query)==true) {
		echo "Removida com sucesso<br>";
		header('Location: estoque.php');
	} else {
		echo "Erro!<br>";
	}

	
?>