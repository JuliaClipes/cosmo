<?php

//include_once '../classes/ConexaoBanco.php';
include_once '../classes/UsuarioBanco.php';


    session_start();

    $email_usuario = $_POST['email_usuario'];
    $senha_usuario = $_POST['senha_usuario'];

    // echo $senha. "----" .$login;  
    $conexao = mysqli_connect('localhost', 'root', '', 'cosmo');

    if (!$conexao) {
            die("Erro na conexão: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM usuario WHERE email_usuario_banco = '$email_usuario' AND senha_usuario_banco = '$senha_usuario'";
             
    $verifica = mysqli_query($conexao, $sql);
    
    $row=mysqli_fetch_assoc($verifica);
    
    var_dump($row);
    
    if (mysqli_num_rows($verifica)<=0){
        unset($_SESSION['email_usuario']);
        unset($_SESSION['senha_usuario']);
        //header('location:../index.php');
    }else{
        $_SESSION['id_user'] = $row['id_usuario_banco'];
        header('location:../perfil-usuario.php');
    }
