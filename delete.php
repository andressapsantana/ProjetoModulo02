<?php   
require_once "conexao.php";

$sql = "DELETE FROM usuario WHERE ID_USUARIO = ? ";
    
    
    if($stmt = mysqli_prepare($conexao, $sql)){
        // liga as variáveis do "prepared statement" ao id passado por parâmetro
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // seta o parâmetro.
        $param_id = $_GET["id"];
        
        // executa a consulta (prepared statement)
        if(mysqli_stmt_execute($stmt)){

            //comitar a transação
            mysqli_commit($conexao);

            // Fecha o statement
            mysqli_stmt_close($stmt);
            
            // Fecha a conexão com o banco de dados.
            mysqli_close($conexao);

            // Registro deletado com sucesso. Redireciona para a página de consulta.
            header("location: consulta.php");
            exit();
        } else{
            header("location: error.php");
            exit();
        }
    }
     

?>