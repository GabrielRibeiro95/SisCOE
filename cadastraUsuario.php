<?php
	
	require_once('classes.php');
	
	session_start();
	
	$conexao=mysqli_connect('localhost', 'root', '', 'siscoe') or die('Nao foi possível conectar ao banco de dados');
	mysqli_set_charset($conexao,"utf8");
			
	$mat = $_POST['matricula'];
	$nome = $_POST['nome'];
	$pw = $_POST['senha'];
	$email = $_POST['email'];
	$tel = $_POST['telefone'];
	$cargo = $_POST['cargo'];
	$dtNasc = $_POST['nascdata'];
	$dtIng = $_POST['ingdata'];
	$foto = $_POST['foto'];
	
	if ($foto=='') {
		$foto="semfoto.jpg";
	}
	
	echo $tel."<br>";
	
	$novo = new Usuario($mat, $nome, $pw, $email, $tel, $cargo, $dtNasc, $dtIng, $foto);
	
	$_SESSION['mat'] = $mat;
	$_SESSION['pw'] = $pw;
	
	function formataTel($numero) {
		$novo=substr_replace($numero, '(', 0, 0);
		$novo=substr_replace($novo, ')', 3, 0);
		return $novo;
	}
	
	$verifica=mysqli_num_rows(mysqli_query($conexao, "select * from usuario where mat='{$mat}'"));
			
	if ($verifica >= 1) {
		echo "Já existe um usuário com a matrícula especificada<br>";
		header('Location: cadastroUsuario.php');
	} else {
	
		$query="insert into usuario values({$mat}, '{$nome}', md5('{$pw}'), '{$email}', '{$tel}', '{$cargo}', '{$dtNasc}', '{$dtIng}', '{$foto}')";
		
		if (mysqli_query($conexao, $query)==true) {
			echo "Adicionado com sucesso<br>";
		} else {
			$_SESSION['ja_tem_usuario']=true;
			echo "Erro!<br>";
		}
		header('Location: perfil.php');
	}
	
?>