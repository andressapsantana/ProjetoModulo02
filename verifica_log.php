
<?php
session_start();
require_once "conexao.php";
$btn2FA = $_POST['2fa'];
$rowCPF3U = substr($_SESSION['CPF'], -3);
$usuario = $_SESSION['LoginUsuario'];



// Montando o comando select para exibir a lista de usuários
$sql2 = "SELECT * FROM usuario where login_usuario = '$usuario' ";
if ($result = mysqli_query($conexao, $sql2)) {

    print_r($result);

    if ($row = mysqli_fetch_array($result)) {
        
        $mae = $row['NOME_MATERNO'];
        $telefone = $row['TELEFONE_CELULAR'];
        $nascimento =$row['DATA_NASCIMENTO'];
        $iduser = $row['ID_USUARIO'];
        

        if ($btn2FA==1) {
        
            if( $_POST['cpf3U'] === $rowCPF3U ){ 
                
                $sql = "INSERT INTO REGISTRO_USUARIO(ID_LOG, HORA_ACESSO, METODO_ACESSO, STA_ACESSO, ID_USUARIO)
                VALUES (NULL, SYSDATE(),'TRES ULTIMOS NUMEROS CPF','ON', $iduser)";
                
                $resultRegistro = mysqli_query($conexao, $sql);
                mysqli_commit($conexao);
                mysqli_close($conexao);                
                header("Location:areaUSU.php");
                
            } else {
    
                $sql = "INSERT INTO registro_usuario 
                VALUES (null, SYSDATE(),'TRES ULTIMOS NUMEROS CPF','OFF', $iduser)";
                $resultRegistro = mysqli_query($conexao, $sql);
                mysqli_commit($conexao);
                mysqli_close($conexao);          
                header('Location:error.php');
            }
    
        }
    }

     

    if ($btn2FA==2) {
        if($_POST['cpf3P']==$rowCPF3P){
            header('Location:areaUSU.php');
        } else {
            header('Location:index.php');
        }

    } 

    if ($btn2FA==3) {
       if ($_POST['TelefoneCelular'] == $row['TELEFONE_CELULAR']){
            header('Location:areaUSU.php');
        } else {
            header('Location:index.php');
        
    } 


    if ($btn2FA==4) {
        if ($_POST['NomeMaterno'] == $row['NOME_MATERNO']){
            header('Location:areaUSU.php');
        } else {
            header('Location:index.php');
        }

    } 

    if ($btn2FA==5) {
        if ($_POST['DataNascimento'] == $row['DATA_NASCIMENTO']){
            header('Location:areaUSU.php');
        } else {
            header('Location:index.php');
        }

    } 

}
}


?>