<?php 

	session_start();
			
	$conexao=mysqli_connect('localhost', 'root', '', 'siscoe') or die('Nao foi possível conectar ao banco de dados');
			
	//Protege contra ataque de SQL Injection
	$mat=mysqli_real_escape_string($conexao, $_POST['inMat']);
	$pw=mysqli_real_escape_string($conexao, $_POST['inSenha']);
	
	$result=mysqli_query($conexao, "select * from usuario where mat='{$mat}' and senha=md5('{$pw}')");
			
	$rows=mysqli_num_rows($result);
			
	if ($rows>0) {
		$_SESSION['mat']=$mat;
		$_SESSION['pw']=$pw;
		header("Location: perfil.php");
	} else {
		$_SESSION['nao_autenticado']=true;
		header("Location: index.php");
	}

?>