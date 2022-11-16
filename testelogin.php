<?php
session_start();
//    print_r($_REQUEST);

use LDAP\Result;

if(isset($_POST['submit']) && !empty($_POST['email'])  && !empty($_POST['senha'])){
    include_once('./config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r($email);
    //print_r($senha);

    $sql = "SELECT * FROM usuario_sistema WHERE email = '$email' and senha = '$senha'";

    $Result = $conexao->query($sql);
    
    //print_r($sql);
    //print_r($Result);

    if(mysqli_num_rows($Result)< 1){
        //print_r('nao existe');
        unset($_SESSION['email']); //destruindo as variaveis se nao forem verdadeiras 
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else{
        //print_r('existe');
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
}
else{
    header('Location: login.php');//para voltar para o login se nao for submitado
}
?>