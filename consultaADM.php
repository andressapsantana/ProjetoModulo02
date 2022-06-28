<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    // Aqui estou incluindo o arquivo de configuração
    require_once "conexao.php";

    // Montando o comando select para exibir a lista de usuários
    $sql = "SELECT * FROM usuario";
    if ($result = mysqli_query($conexao, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            
            echo '<body class="login">';
            echo '</div>';
            echo '<div class="row" align="center">';
            echo '<div style="padding-left: 0px;  padding-right: 0px;">';
            echo '<img src="https://www.telecall.com/media/images/telecall-logo.svg?v=2" class="img-fluid" />
          
            </div>
            <br>' ;    

            echo '<table border="1">';
            echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Nome</th>";
            echo "<th>Login</th>";
            echo "<th>Ações</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['ID_USUARIO'] . "</td>";
                echo "<td>" . $row['NOME_USUARIO'] . "</td>";
                echo "<td>" . $row['LOGIN_USUARIO'] . "</td>";
                echo "<td>";
                echo '<a href="read.php?id=' . $row['ID_USUARIO'] . '">visualizar</a>|';
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // A lista de resultados aparece em um resultset
            mysqli_free_result($result);
        } else {
            echo '<div>Não há ainda usuários cadastrados no banco de dados.</div>';
        }
    } else {
        header("location: error.php");
        exit();
    }

    // fecha a conexão com o Banco de Dados
    mysqli_close($conexao);
    ?>
    <br>
    <button><a href="areaADM.php"> Voltar </a></button></a>
</body>

</html>