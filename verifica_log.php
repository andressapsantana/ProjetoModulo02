<?php
session_start();
require_once "conexao.php";
$btn2FA = $_POST['2fa'];
$rowCPF3P = substr($_SESSION['CPF'], 0, 3);
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
            
            $sql = "INSERT INTO REGISTRO_USUARIO(ID_LOG, HORA_ACESSO, METODO_ACESSO, STA_ACESSO, ID_USUARIO)
            VALUES (NULL, SYSDATE(),'TRES PRIMEIROS NUMEROS CPF','ON', $iduser)";
            
            $resultRegistro = mysqli_query($conexao, $sql);
            mysqli_commit($conexao);
            mysqli_close($conexao);                
            header("Location:areaUSU.php");

        } else {

            $sql = "INSERT INTO registro_usuario 
                VALUES (null, SYSDATE(),'TRES PRIMEIROS NUMEROS CPF','OFF', $iduser)";
                $resultRegistro = mysqli_query($conexao, $sql);
                mysqli_commit($conexao);
                mysqli_close($conexao);          
                header('Location:error.php');
        }

    } 

    if ($btn2FA==3) {
       if ($_POST['TelefoneCelular'] == $row['TELEFONE_CELULAR']){
           
        $sql = "INSERT INTO REGISTRO_USUARIO(ID_LOG, HORA_ACESSO, METODO_ACESSO, STA_ACESSO, ID_USUARIO)
        VALUES (NULL, SYSDATE(),'NUMERO DO CELULAR','ON', $iduser)";
        
        $resultRegistro = mysqli_query($conexao, $sql);
        mysqli_commit($conexao);
        mysqli_close($conexao);                
        header("Location:areaUSU.php");

        } else {

             $sql = "INSERT INTO registro_usuario 
                VALUES (null, SYSDATE(),'TRES PRIMEIROS NUMEROS CPF','OFF', $iduser)";
                $resultRegistro = mysqli_query($conexao, $sql);
                mysqli_commit($conexao);
                mysqli_close($conexao);          
                header('Location:error.php');
        
    } 


    if ($btn2FA==4) {
        if ($_POST['NomeMaterno'] == $row['NOME_MATERNO']){
           
            $sql = "INSERT INTO REGISTRO_USUARIO(ID_LOG, HORA_ACESSO, METODO_ACESSO, STA_ACESSO, ID_USUARIO)
            VALUES (NULL, SYSDATE(),'NOME MATERNO','ON', $iduser)";
            $resultRegistro = mysqli_query($conexao, $sql);
            mysqli_commit($conexao);
            mysqli_close($conexao);                
            header("Location:areaUSU.php");

        } else {
            
            $sql = "INSERT INTO registro_usuario 
                VALUES (null, SYSDATE(),'NOME MATERNO','OFF', $iduser)";
                $resultRegistro = mysqli_query($conexao, $sql);
                mysqli_commit($conexao);
                mysqli_close($conexao);          
                header('Location:error.php');
        }

    } 

    if ($btn2FA==5) {
        if ($_POST['DataNascimento'] == $row['DATA_NASCIMENTO']){
            $sql = "INSERT INTO REGISTRO_USUARIO(ID_LOG, HORA_ACESSO, METODO_ACESSO, STA_ACESSO, ID_USUARIO)
            VALUES (NULL, SYSDATE(),'DATA DE NASCIMENTO','ON', $iduser)";
            
            $resultRegistro = mysqli_query($conexao, $sql);
            mysqli_commit($conexao);
            mysqli_close($conexao);                
            header("Location:areaUSU.php");

        } else {
            
            $sql = "INSERT INTO registro_usuario 
                VALUES (null, SYSDATE(),'DATA DE NASCIMENTO','OFF', $iduser)";
                $resultRegistro = mysqli_query($conexao, $sql);
                mysqli_commit($conexao);
                mysqli_close($conexao);          
                header('Location:error.php');
        }

    } 

}
}


?>