<?php
// Aqui estou incluindo o arquivo de configuração
require_once "conexao.php";

// Variáveis inicializadas com valores vazios
$nome = $login = $senha = "";

// recupera o código do usuário (id) via GET.
$id =  trim($_GET["id"]);

// Prapara o select para trazer as informações do usuário.
$sql = "SELECT NOME_USUARIO, LOGIN_USUARIO, SENHA_USUARIO, TELEFONE_CELULAR, 
TELEFONE_FIXO, LOGRADOURO, NUMERO_RESIDENCIA,COMPLEMENTO, CEP FROM usuario WHERE ID_USUARIO = ?";

if ($stmt = mysqli_prepare($conexao, $sql)) {

  // liga as variáveis do "prepared statement" ao id passado por parâmetro
  mysqli_stmt_bind_param($stmt, "i", $param_id);

  // seta o parâmetro.
  $param_id = $id;

  // executa a consulta (prepared statement)
  if (mysqli_stmt_execute($stmt)) {
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
      /* Aqui verifica se trouxe um row no resultset. 
                   Neste caso não precisa fazer um loop já que garantiremos que vai trazer só 1 usuário*/
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

      // Recupera cada valor do campo do row.
      $nome = $row["NOME_USUARIO"];
      $login = $row["LOGIN_USUARIO"];
      $senha = $row["SENHA_USUARIO"];
      $telefoneCelular = $row["TELEFONE_CELULAR"];
      $telefoneFixo= $row["TELEFONE_FIXO"];
      $logradouro = $row["LOGRADOURO"];
      $numeroResidencia = $row ["NUMERO_RESIDENCIA"];
      $complemento = $row ["COMPLEMENTO"];
      $cep = $row ["CEP"];
    } else {
      // Se na sua url não tiver um id válido. redireciona para a página de erro
      header("location: error.php");
      exit();
    }
  } else {
    header("location: error.php"); 
    exit();
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
  <title>Atualizar Cadastro</title>
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
              <h5 style="text-align: center;">Atualizar dados</h5>
            </div>
            <br>
            <form action="update.php" method="post">
              <input type="hidden" name="id" value="<?php echo $id ?>">
              Nome: <input type="text" name="NomeUsuario" value="<?php echo $nome ?>">
              <br>
              Login:
              <input type="text" name="LoginUsuario" value="<?php echo $login ?>">
              <br>
              Senha:
              <input type="number" name="SenhaUsuario" value="<?php echo $senha ?>">
              <br>
              Telefone Celular:
              <input type="number" name="TelefoneCelular" value="<?php echo $telefoneCelular ?>">
              <br>
              Telefone Fixo:
              <input type="number" name="TelefoneFixo" value="<?php echo $telefoneFixo ?>">
              <br>
              Logradouro:
              <input type="text" name="Logradouro" value="<?php echo $logradouro ?>">
              <br>
              Numero Residencia:
              <input type="number" name="NumeroResidencia" value="<?php echo $numeroResidencia ?>">
              <br>
              Complemento:
              <input type="text" name="Complemento" value="<?php echo $complemento ?>">
              <br>
              CEP:
              <input type="number" name="CepUsuario" value="<?php echo $cep ?>">
              <br>
              <br>
              <button type="submit" class="btn btn-danger">Atualizar</button>
              <a href="index.php">Cancelar</a>
            </form>
  </body>

</html>