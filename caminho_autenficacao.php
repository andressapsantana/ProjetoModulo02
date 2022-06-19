<?php
// essa tela envia o admin para sua tela e o usuario para a verificação  
session_start();
require_once "conexao.php";

    if ($_SESSION['LoginUsuario'] == "admin") {
        header("Location:areaADM.php");
    } else {
      header("Location:autenticacao.php");
    }

?>
