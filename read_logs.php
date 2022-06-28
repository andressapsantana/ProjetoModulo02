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
    $sql = "SELECT * FROM REGISTRO_USUARIO";
    if ($result = mysqli_query($conexao, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            echo '<table border="1">';
            echo "<tr>";       
            echo "<th>Hora do Acesso</th>";
            echo "<th>Método de Acesso</th>";
            echo "<th>Status do Acesso</th>";
            echo "<th>ID do Usuário</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['HORA_ACESSO'] . "</td>";
                echo "<td>" . $row['METODO_ACESSO'] . "</td>";
                echo "<td>" . $row['STA_ACESSO'] . "</td>";
                echo "<td>" . $row['ID_USUARIO'] . "</td>";
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
    <button><a href="gera_pdf.php"> Gerar PDF </a></button></a>
</body>

</html>