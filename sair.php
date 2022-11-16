<?php
    session_start();
   
        header('Location: login.php');
        unset($_SESSION['email']); //destruindo as variaveis se nao forem verdadeiras 
        unset($_SESSION['senha']);

?>