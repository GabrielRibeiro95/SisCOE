<?php
	
	require_once('classes.php');
	
	session_start();
	
	$conexao=mysqli_connect('localhost', 'root', '', 'siscoe') or die('Nao foi possível conectar ao banco de dados');
	mysqli_set_charset($conexao,"utf8");
	
	$peca=$_POST['peca'];
	$quantidade=$_POST['quantidade'];
	$obs=$_POST['obs'];
	
	//echo $peca.$quantidade.$obs;
	
	//$_SESSION['mat'] = $mat;
	//$_SESSION['pw'] = $pw;
	//echo $_SESSION['mat']."/".$_SESSION['pw'];
	//echo $num.$tipo.$modelo.$fornecedor.$dtFab.$garantia.$obs;
	
	$query="insert into pedido(tipo, qtd, obs) values('{$peca}', '{$quantidade}', '{$obs}')";
	
	echo $query."<br>";
	
	if (mysqli_query($conexao, $query)==true) {
		echo "Adicionada com sucesso<br>";
	} else {
		echo "Erro!<br>";
	}
	header('Location: perfil.php');
	
?>