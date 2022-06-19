<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width" />
  <title>Cadastro</title>
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
            <h5 style="text-align: center;">Novo Cadastro</h5>
          </div>

          <body>
            <form action="cadastro.php" method="post">
              Nome: <input type="text" name="NomeUsuario" placeholder="Digite seu nome">
              <br>
              Data de Nascimento: <input type="date" name="DataNascimento">
              <br>
              Nome da Mãe:<input type="text" name="NomeMaterno" placeholder="Digite o nome materno">
              <br>
              CPF:<input type="text" name="CpfUsuario" placeholder="Apenas numeros">
              <br>
              Telefone Celular:<input type="number" name="TelefoneCelular" placeholder="DDD+Numero">
              <br>
              Telefone Fixo: <input type="number" name="TelefoneFixo" placeholder="DDD+Numero">
              <br>
              Logradouro:<input type="text" name="Logradouro" placeholder="Digite o logradouro">
              <br>
              Numero:<input type="number" name="NumeroResidencia" placeholder="Digite o numero">
              <br>
              Complemento:<input type="text" name="Complemento" placeholder="Digite o complemento">
              <br>
              CEP:<input type="number" name="CepUsuario" placeholder="Apenas numeros">
              <br>
              Login:<input type="text" name="LoginUsuario" placeholder="Digite o login">
              <br>
              Senha:<input type="password" name="SenhaUsuario" placeholder="Apenas números">
              <br>
              <br>
              <button type="submit" class="btn btn-danger">Cadastrar</button>
              <a href="index.php">Cancelar</a>
            </form>
          </body>

</html>