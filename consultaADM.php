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
            echo '<table border="1">';
            echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Nome</th>";
            echo "<th>Login</th>";
            echo "<th>Senha</th>";
            echo "<th>Ações</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['ID_USUARIO'] . "</td>";
                echo "<td>" . $row['NOME_USUARIO'] . "</td>";
                echo "<td>" . $row['LOGIN_USUARIO'] . "</td>";
                echo "<td>" . $row['SENHA_USUARIO'] . "</td>";
                echo "<td>";
                echo '<a href="read.php?id=' . $row['ID_USUARIO'] . '">visualizar</a>|';
                echo '<a href="form_update.php?id=' . $row['ID_USUARIO'] . '">atualizar</a>|';
                echo '<a href="delete.php?id=' . $row['ID_USUARIO'] . '">excluir</a>';
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
    <button><a href="form_cadastro.php">Incluir Novo Usuário</a></button>
    <button><a href="areaADM.php"> Voltar </a></button></a>
</body>

</html>