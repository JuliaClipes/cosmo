<?php
    session_start();
    if ((!isset($_SESSION['email_usuario']) == true) && ( !isset($_SESSION['senha_usuario']) == true)) {
        unset($_SESSION['email_usuario']);
        unset($_SESSION['senha_usuario']);
        header('location:../index.php');
    } else {
        if($_SESSION['tipo'] == 'adm'){
            /*header("location:");*/   
        } else{
            header("location:");   // levar para perfil
        }
    }
    
   
?>