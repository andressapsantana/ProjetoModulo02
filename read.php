<?php
    // Aqui estou incluindo o arquivo de configuração
    require_once "conexao.php";
    
    // Preparando o statement do comando select
    $sql = "SELECT NOME_USUARIO, LOGIN_USUARIO, SENHA_USUARIO,TELEFONE_CELULAR, 
    TELEFONE_FIXO, LOGRADOURO, NUMERO_RESIDENCIA,COMPLEMENTO, CEP FROM usuario WHERE ID_USUARIO = ?";
    
    if($stmt = mysqli_prepare($conexao, $sql)){
        // liga as variáveis do "prepared statement" ao id passado por parâmetro
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // seta o parâmetro.
        $param_id = trim($_GET["id"]);
        
        // executa a consulta (prepared statement)
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Aqui verifica se trouxe um row no resultset. 
				Neste caso não precisa fazer um loop já que garantiremos que vai trazer só 1 usuário*/
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Recupera cada valor do campo do row.
                $nome = $row["NOME_USUARIO"];
                $login = $row["LOGIN_USUARIO"];
                $telefoneCelular = $row["TELEFONE_CELULAR"];
                $telefoneFixo = $row["TELEFONE_FIXO"];
                $logradouro = $row["LOGRADOURO"];
                $numeroResidencia = $row["NUMERO_RESIDENCIA"];
                $complemento = $row["COMPLEMENTO"];
                $cep = $row["CEP"];              


            } else{
                // Se na sua url não tiver um id válido. redireciona para a página de erro
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Algo deu errado. Tente de novo.";
        }
    }
     
    // Fecha o statement
    mysqli_stmt_close($stmt);
    
    // Fecha a conexão com o banco de dados.
    mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width" />
  <title>Visualização de Cadastro</title>
  <link href="~/css/bootstrap.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <body class="cadastro">
    </div>
    <div class="row" align="center">
      <div style="padding-left: 0px;  padding-right: 0px;">
        <br>
        <img src="https://www.telecall.com/media/images/telecall-logo.svg?v=2" class="img-fluid" />
      </div>

      <div class="col-md-4 offset-4">
        <div class="card mt-5">
          <div class="card-body">
            <div class="text-center">
              <h5 style="text-align: center;">Dados do Usuario</h5>
            </div>
            <br>

    <b>Nome:</b> <?php echo $nome ?><br>
    <b>Login:</b> <?php echo $login ?><br>
    <b>Telefone Celular:</b> <?php echo $telefoneCelular ?><br>
    <b>Telefone Fixo:</b> <?php echo $telefoneFixo ?><br>
    <b>ogradouro:</b> <?php echo $logradouro ?><br>
    <b>Numero da Residencia:</b> <?php echo $numeroResidencia ?><br>
    <b>Complemento:</b> <?php echo $complemento ?><br>
    <b>Cep:</b> <?php echo $cep ?>
    <br>
    <br>
    
</body>
</html>