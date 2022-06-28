<?php
// conectando com o banco de dados
session_start();
include('conexao.php');
 
// verificação se o usuario digitou algo no campo de login e senha
if(empty($_POST['LoginUsuario']) || empty($_POST['SenhaUsuario'])) {
	header('Location: index.php');
	exit();
}
 
// variaveis para receber os valores de login e senha digitados pelo usuario
$usuario = mysqli_real_escape_string($conexao, $_POST['LoginUsuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['SenhaUsuario']);
 
//query para verificar se usuario e senha recebido pela query esta no banco de dados
$query = "SELECT * from usuario WHERE LOGIN_USUARIO = '{$usuario}' and SENHA_USUARIO = '{$senha}'";
$result = mysqli_query($conexao, $query);
 
$quant = mysqli_num_rows($result);



 
if($quant == 1) {
	$row = mysqli_fetch_array($result);
	$_SESSION['LoginUsuario'] = $usuario;
	$_SESSION['CPF'] =  $row['CPF'];
	$_SESSION['ID_USUARIO'] =  $row ['ID_USUARIO'];
	header('Location: caminho_autenficacao.php');
	
	
}else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: error.php');
	exit();
}
?>