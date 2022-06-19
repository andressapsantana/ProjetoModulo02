<?php
// esse formulario traz aleatoreamente dadosa serem validados como atenticação de 2 fatores 

$rand = rand(1, 5);
    switch ($rand):
        case 1:
            
            echo '<div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center" align="center">';
            echo '<h2 rel="dofollow"><img src="https://www.telecall.com/media/images/telecall-logo.svg?v=2" width="200" weight="200"></h2>';
            echo '</div>';
            echo '<div class="formbg-outer" align="center">';
            echo '<div class="formbglogin"align="center">';
            echo '<div class="formbglogin-inner padding-horizontal--48">';
            echo '<span class="padding-bottom--10">Insira os 3 ULTIMOS digitos do CPF cadastrado</span><br>';
            echo '<form id="stripe-login" method="post" action="verifica_log.php">';
            echo '<div class="field padding-bottom--24">';
            echo "<input type='text' name='cpf3U'>";
            echo "<input type='hidden' name='2fa' value='1'>";
            echo '<div>';
            echo '<br>';
            echo '<div class="field padding-bottom--24">';
            echo "<input type='submit'  name='btn2FA' value='Verificar'>";
            echo '<div>';
            echo "</form>";
            echo "</div>";
            echo "</div>";;
            echo "</div>";
            echo "</div>";


            break;
        case 2:
         
            echo '<div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center" align="center">';
            echo '<h2 rel="dofollow"><img src="https://www.telecall.com/media/images/telecall-logo.svg?v=2" width="200" weight="200"></h2>';
            echo '</div>';
            echo '<div class="formbg-outer" align="center">';
            echo '<div class="formbglogin" align="center">';
            echo '<div class="formbglogin-inner padding-horizontal--48">';
            echo '<span class="padding-bottom--10">Insira os 3 PRIMEIROS digitos do CPF Cadastrado</span><br>';
            echo '<form id="stripe-login" method="post" action="verifica_log.php"">';
            echo '<div class="field padding-bottom--24">';
            echo "<input type='text' name='cpf3P'>";
            echo "<input type='hidden' name='2fa' value='2'>";
            echo '<div>';
            echo '<br>';
            echo '<div class="field padding-bottom--24">';
            echo "<input type='submit'  name='btn2FA' value='Verificar'>";
            echo '<div>';
            echo "</form>";
            echo "</div>";
            echo "</div>";;
            echo "</div>";
            echo "</div>";

            break;
        case 3:
   

            echo '<div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center" align="center">';
            echo '<h2 rel="dofollow"><img src="https://www.telecall.com/media/images/telecall-logo.svg?v=2" width="200" weight="200"></h2>';
            echo '</div>';
            echo '<div class="formbg-outer" align="center">';
            echo '<div class="formbglogin" align="center">';
            echo '<div class="formbglogin-inner padding-horizontal--48">';
            echo '<span class="padding-bottom--10">Insira o celular cadastrado conforme foi preenchido no cadastro</span><br>';
            echo '<form id="stripe-login" method="post" action="verifica_log.php"">';
            echo '<div class="field padding-bottom--24">';
            echo "<input type='text' name='TelefoneCelular'>";
            echo '<div>';
            echo '<br>';
            echo '<div class="field padding-bottom--24">';
            echo "<input type='hidden' name='2fa' value='3'>";
            echo "<input type='submit'  name='btn2FA' value='Verificar'>";
            echo '<div>';
            echo "</form>";
            echo "</div>";
            echo "</div>";;
            echo "</div>";
            echo "</div>";
            break;
        case 4:
      
         
            echo '<div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center" align="center">';
            echo '<h2 rel="dofollow"><img src="https://www.telecall.com/media/images/telecall-logo.svg?v=2" width="200" weight="200"></h2>';
            echo '</div>';
            echo '<div class="formbg-outer" align="center">';
            echo '<div class="formbglogin" align="center">';
            echo '<div class="formbglogin-inner padding-horizontal--48">';
            echo '<span class="padding-bottom--10">Insira o nome da mãe conforme foi preenchido no cadastro</span><br>';
            echo '<form id="stripe-login" method="post" action="verifica_log.php"">';
            echo '<div class="field padding-bottom--24">';
            echo "<input type='text' name='NomeMaterno'>";
            echo "<input type='hidden' name='2fa' value='4'>";

            echo '<div>';
            echo '<br>';
            echo '<div class="field padding-bottom--24">';
            echo "<input type='submit'  name='btn2FA' value='Verificar'>";
            echo '<div>';
            echo "</form>";
            echo "</div>";
            echo "</div>";;
            echo "</div>";
            echo "</div>";
            break;
        case 5:
    
     
            echo ' <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">';
            echo '<div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center" align="center">';
            echo '<h2 rel="dofollow"><img src="https://www.telecall.com/media/images/telecall-logo.svg?v=2" width="200" weight="200"></h2>';
            echo '</div>';
            echo '<div class="formbg-outer" align="center">';
            echo '<div class="formbglogin" align="center">';
            echo '<div class="formbglogin-inner padding-horizontal--48">';
            echo '<span class="padding-bottom--10">Insira a data de nascimento cadastrada</span><br>';
            echo '<form id="stripe-login" method="post" action="verifica_log.php">';
            echo '<div class="field padding-bottom--24">';
            echo "<input type='date' name='DataNascimento'>";
            echo "<input type='hidden' name='2fa' value='5'>";

            echo '<div>';
            echo '<br>';
            echo '<div class="field padding-bottom--24">';
            echo "<input type='submit'  name='btn2FA' value='Verificar'>";
            echo '<div>';
            echo "</form>";
            echo "</div>";
            echo "</div>";;
            echo "</div>";
            echo "</div>";
            break;
    endswitch;
?>