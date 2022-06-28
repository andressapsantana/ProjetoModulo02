<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <title>Login</title>
    <link href="~/css/bootstrap.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="login">
    </div>
    <div class="row" align="center">
        <div style="padding-left: 0px;  padding-right: 0px;">
            <img src="https://www.telecall.com/media/images/telecall-logo.svg?v=2" class="img-fluid" />
        </div>

        <div class="col-md-4 offset-4">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="text-center">
                        <h5 style="text-align: center;">Entrar</h5>
                    </div>
                    <br>
                    <div class="box">
                        <div class="field">
                            <div class="control">
                                <form action="validacao.php" method="post">
                                    <input name="LoginUsuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input name="SenhaUsuario" class="input is-large" type="password" placeholder="Sua senha">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-danger">Entrar</button>
                        <a href="form_cadastro.php">Cadastre-se</a>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<br>
<br>
<footer>
<div class="text-center">
  <p><a href="querys.html">Querys</a></<br>
 
  <p> <a href="apresentacao_dev.html">Desenvolvedora</a><br>
 </p>
  <p><a href="diagrama.html">Modelo do banco</a></p><br>
  
</footer>
</html>