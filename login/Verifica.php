<?php
    session_start();
    if ((!isset($_SESSION['email_usuario']) == true) and ( !isset($_SESSION['senha_usuario']) == true)) {
        unset($_SESSION['email_usuario']);
        unset($_SESSION['senha_usuario']);
        //header('location:../index.php');
    } else {
        $logado = $_SESSION['login'];
    }
?>