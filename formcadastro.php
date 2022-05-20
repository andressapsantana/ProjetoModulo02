<!DOCTYPE html>
<html>
<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="cadastro.php" method="post">
		Nome: <input type="text" name="Nome">
		<br>
    Data de Nascimento: <input type="date" name="DataNascimento">
    <br>
    Nome da Mãe:<input type="text" name="NomeMaterno">
    <br>
    CPF:<input type="number" name="Cpf">
    <br>
    Telefone Celular:<input type="number" name="TelefoneCelular">
    <br>
    Telefone Fixo: <input type="number" name="TelefoneFixo">
    <br>
    Logradouro:<input type="text" name="Logradouro">
    <br>
    Numero:<input type="number" name="NumeroResidencia">
    <br>
    Complemento:<input type="text" name="Complemento">
    <br>
    CEP:<input type="number" name="Cep">
    <br>
    Login:<input type="text" name="LoginUsuario">
    <br>
    Senha:<input type="password" name="SenhaUsuario">
    <br>
    <input type="submit" value="Submeter">
    <a href="consulta.php">Cancelar</a>
    </form>
</body>
</html>
