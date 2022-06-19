<?php
	/*
	Credenciais do banco de dados. */

	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'mysql');
 
	/* Criando a variável connection para se conectar ao banco de dados */
	$conexao = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


	// Checando a conexão
	if($conexao === false){
		die("ERROR: Não foi possível se conectar ao banco de dados MySQL. " . mysqli_connect_error());
	} 

	else {
		/* set autocommit para falso */
		mysqli_autocommit($conexao, FALSE);
 	}
?>