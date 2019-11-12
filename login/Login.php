<?php

//include_once '../classes/ConexaoBanco.php';
include_once '../classes/UsuarioBanco.php';
include_once '../classes/AdminBanco.php';


session_start();

$email_usuario = $_POST['email_usuario'];
$senha_usuario = md5($_POST['senha_usuario']);

// echo $senha. "----" .$login;  
$conexao = mysqli_connect('localhost', 'root', '', 'cosmo');

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

$sql = "SELECT * FROM usuario WHERE email_usuario_banco = '$email_usuario' AND senha_usuario_banco = '$senha_usuario'";

$verifica = mysqli_query($conexao, $sql);

var_dump($verifica->num_rows);

if ($verifica->num_rows > 0) {
    $_SESSION['id_user'] = $row['id_usuario_banco'];
    $_SESSION['tipo'] = 'usuario';
    header('location:../perfil-usuario.php');
} else {

    $sql = "SELECT * FROM administrador WHERE email_admin_banco = '$email_usuario' AND senha_admin_banco = '$senha_usuario'";

    $verifica = mysqli_query($conexao, $sql);
    //var_dump($sql, $verifica->num_rows);die;

    if ($verifica->num_rows <= 0) {
        header('location:../index.php');
    } else {
        $_SESSION['tipo'] = 'adm';
        $_SESSION['id_admin'] = $row['id_admin_banco'];
        header('location:../admin/perfil-admin.php');
    }
}
