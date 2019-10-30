<?php

include_once 'Usuario.php';
include_once 'UsuarioBanco.php';

error_reporting(E_ERROR | E_PARSE);

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['nome-cadastro-usuario']) && $_POST['nome-cadastro-usuario'] != "" && isset($_POST['senha-cadastro-usuario']) && $_POST['senha-cadastro-usuario'] != "" && isset($_POST['email-cadastro-usuario']) && $_POST['email-cadastro-usuario'] != "") {



    $usuario_novo = new Usuario();
    $usuario_novo->setNomeUsuario($_POST['nome-cadastro-usuario']);
    $usuario_novo->setSenhaUsuario(md5($_POST['senha-cadastro-usuario']));
    $usuario_novo->setEmailUsuario($_POST['email-cadastro-usuario']);

    $usuarioBanco = new UsuarioBanco();
    $retorno = $usuarioBanco->insert($usuario_novo);

    if ($retorno) {
        echo 'AQUI';
        header('location:../cadastro-usuario-ok.php');
    } else {
        header('location:../cadastro-usuario-not.php');
    }
} else {
    header('location:../cadastro-usuario-not.php');
}
?>