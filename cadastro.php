<?php
    // incluindo o arquivo de conexao
    require_once "conexao.php";
 
 
	// comando insert para inserir os dados no banco
    $sql = "INSERT INTO usuario VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    if($stmt = mysqli_prepare($conexao, $sql)){

		// liga as variáveis do "prepared statement" aos parâmetros que foram passados
        mysqli_stmt_bind_param($stmt, 'ssssssssssss', $param_nome,$param_datanascimento,$param_nomematerno,
        $param_cpf,$param_telefonecelular, $param_telefonefixo,$param_logradouro,$param_numeroresidencia,
        $param_complemento,$param_cep, $param_login, $param_senha);
        
        // Inicializa os parâmetros
        $param_nome = $_POST["NomeUsuario"];
        $param_datanascimento = $_POST["DataNascimento"];
        $param_nomematerno = $_POST["NomeMaterno"];
        $param_cpf = $_POST["CpfUsuario"];
        $param_telefonecelular = $_POST["TelefoneCelular"];
        $param_telefonefixo = $_POST["TelefoneFixo"];
        $param_logradouro = $_POST["Logradouro"];
        $param_numeroresidencia = $_POST["NumeroResidencia"];
        $param_complemento = $_POST["Complemento"];
        $param_cep = $_POST["CepUsuario"];
        $param_login = $_POST["LoginUsuario"];
        $param_senha = $_POST["SenhaUsuario"];
       

        // Execute a query já com os "prepared statement" ajustados       
       
        if(mysqli_stmt_execute($stmt)){
            
            mysqli_commit($conexao);
            
            // fecha o statement
            mysqli_stmt_close($stmt);
            
            // fecha a conexão com o Banco de Dados
            mysqli_close($conexao);

            // Se o usuário foi inserido com sucesso, então redireciono para a página principal.
            header("location: index.php");
           exit();
        } else{
            header("location: error.php");
            exit();
        }
    }
     
?>
