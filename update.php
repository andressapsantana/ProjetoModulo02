<?php
// Aqui estou incluindo o arquivo de configuração
require_once "conexao.php";


// Get hidden input value
$id = $_POST["id"];
$nome = $_POST["NomeUsuario"];
$login = $_POST["LoginUsuario"];
$senha = $_POST["SenhaUsuario"];
$telefoneCelular = $_POST["TelefoneCelular"];
$telefoneFixo = $_POST["TelefoneFixo"];
$logradouro = $_POST["Logradouro"];
$numeroResidencia = $_POST["NumeroResidencia"];
$complemento = $_POST["Complemento"];
$cep = $_POST["CepUsuario"];






// preparando o statement do comando update
$sql = "UPDATE usuario SET NOME_USUARIO=?, LOGIN_USUARIO=?, SENHA_USUARIO=?, TELEFONE_CELULAR=?, 
    TELEFONE_FIXO=?, LOGRADOURO =?, NUMERO_RESIDENCIA=?,COMPLEMENTO=?, CEP=?  WHERE ID_USUARIO=?";

if ($stmt = mysqli_prepare($conexao, $sql)) {
    // liga as variáveis do "prepared statement" aos parâmetros que foram passados
    mysqli_stmt_bind_param(
        $stmt,
        "sssssssssi",
        $param_nome,
        $param_login,
        $param_senha,
        $param_telefonecelular,
        $param_telefonefixo,
        $param_logradouro,
        $param_numeroresidencia,
        $param_complemento,
        $param_cep,
        $id
    );

    // Inicializa os parâmetros
    $param_nome = $nome;
    $param_login = $login;
    $param_senha = $senha;
    $param_telefonecelular = $telefoneCelular;
    $param_telefonefixo = $telefoneFixo;
    $param_logradouro = $logradouro;
    $param_numeroresidencia = $numeroResidencia;
    $param_complemento = $complemento;
    $param_cep = $cep;

    // Execute a query já com os "prepared statement" ajustados
    if (mysqli_stmt_execute($stmt)) {

        //comitar a transação
        mysqli_commit($conexao);

        // fecha o statement
        mysqli_stmt_close($stmt);

        // fecha a conexão com o Banco de Dados
        mysqli_close($conexao);

        // Se o usuário foi atualizado com sucesso, então redireciono para a página de consulta.
        header("location: index.php");
        exit();
    } else {
        header("location: error.php");
        exit();
    }
}
