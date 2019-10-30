<?php

include_once 'Admin.php';
include_once 'AdminBanco.php';

error_reporting(E_ERROR | E_PARSE);

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['nome-cadastro-admin']) && $_POST['nome-cadastro-admin'] != "" && isset($_POST['senha-cadastro-admin']) && $_POST['senha-cadastro-admin'] != "" && isset($_POST['email-cadastro-admin']) && $_POST['email-cadastro-admin'] != "") {



    $admin_novo = new Admin();
    $admin_novo->setNomeAdmin($_POST['nome-cadastro-admin']);
    $admin_novo->setSenhaAdmin(md5($_POST['senha-cadastro-admin']));
    $admin_novo->setEmailAdmin($_POST['email-cadastro-admin']);

    $adminBanco = new AdminBanco();
    $retorno = $adminBanco->insert($admin_novo);

    if ($retorno) {
        header('location:../admin/cadastro-admin-ok.php');
    } else {
        header('location:../admin/cadastro-admin-not.php');
    }
} else {
    header('location:../admin/cadastro-admin-not.php');
}
?>