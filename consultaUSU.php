<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    // Aqui estou incluindo o arquivo de configuração
    require_once "conexao.php";
    session_start();
    $id_usuario = $_SESSION['ID_USUARIO'];;
    // Montando o comando select para exibir a lista de usuários
    $sql = "SELECT * FROM usuario WHERE ID_USUARIO='$id_usuario'";
    if ($result = mysqli_query($conexao, $sql)) {
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_array($result)) {
                echo '<head>';
                echo '<meta name="viewport" content="width=device-width" />';
                echo '<title>Consulta - Usuário</title>';
                echo '<link href="~/css/bootstrap.css" rel="stylesheet" />';
                echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>';

                echo '<body class="login">';
                echo '</div>';
                echo '<div class="row" align="center">';
                echo '<div style="padding-left: 0px;  padding-right: 0px;">';
                echo '<img src="https://www.telecall.com/media/images/telecall-logo.svg?v=2" class="img-fluid" />
              
                </div>';

                echo '<div class="col-md-4 offset-4">';
                echo '<div class="card mt-5">
                <div class="card-body">
                    <div class="text-center">
                        <h5 style="text-align: center;"> Consulta de Cadastro</h5>
                    </div>
                    <br>
                    <div class="box">
                        <div class="field">
                            <div class="control">';
               
                
                echo '<button><a href="read.php?id=' . $row['ID_USUARIO'] . '">Visualizar</a> </button></a>';
                echo '<button><a href="form_update.php?id=' . $row['ID_USUARIO'] . '">Atualizar </a></button></a>';
                echo '<button><a href="delete.php?id=' . $row['ID_USUARIO'] . '">Excluir</a>';
                echo '<button><a href="areaUSU.php">Voltar</a>';  
                                echo '</br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <br>

</body>

</html>';
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