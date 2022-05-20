<?php
	/*
	Credenciais do banco de dados. Assumindo que você está usando
	o banco de dados MySQL com os valores (user = 'root', password = 'root' e esquema de banco = 'phpDB') 
	caso você utilize outras configurações, é preciso atualizar os valores abaixo
	*/

	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'mysql');
 
	/* Criando a variável connection para se conectar ao banco de dados MySQL com os parâmetros passados */
	$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


	// Checando a conexão
	if($connection === false){
		die("ERROR: Não foi possível se conectar ao banco de dados MySQL. " . mysqli_connect_error());
	} 

	else {
		/* set autocommit para falso */
		mysqli_autocommit($connection, FALSE);
 	}
?>