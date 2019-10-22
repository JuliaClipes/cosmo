<?php

include_once '../classes/ConexaoBanco.php';
include_once '../classes/UsuarioBanco.php';


    session_start();

    $email_usuario = $_POST['email_usuario'];
    $senha_usuario = $_POST['senha_usuario'];

    // echo $senha. "----" .$login;  
    

    $sql = "SELECT * FROM usuario WHERE email_usuario_banco = '$email_usuario' AND senha_usuario_banco = '$senha_usuario'";
             
    $verifica = mysqli_query($conexao, $sql);
    
    if (mysqli_num_rows($verifica)<=0){
        unset($_SESSION['email_usuario']);
        unset($_SESSION['senha_usuario']);
        header('location:../index.php');
    }else{
        $_SESSION['email_usuario'] =  $email_usuario;
        $_SESSION['senha_usuario'] = $senha_usuario;
        header('location:../index_logado.php');
    }
