<?php

include_once '../classes/ConexaoBanco.php';
include_once '../classes/UsuarioBanco.php';


session_start();

$email = $_POST['email_usuario'];
$senha = $_POST['senha_usuario'];

//$sql = "SELECT * FROM usuario WHERE email-usuario-banco = '$email' AND senha-usuario-banco = '$senha'";


$c = new UsuarioBanco();
$vv = $c->login($email, $senha);

var_dump($vv);

//$verifica = mysqli_query($conexao, $sql);

$num_rows = $b->fetchColumn();

var_dump($num_rows);

if ($num_rows <= 0) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    //header('location:index.php');
} else {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['id'] = $id;
    $_SESSION['logado'] = true;
    
    //header('location:index.php');
}
?>