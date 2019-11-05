<?php

include_once 'Materia.php';
include_once 'MateriaBanco.php';

error_reporting(E_ERROR | E_PARSE);

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['titulo-cadastro-materia']) && $_POST['titulo-cadastro-materia'] != "" && isset($_POST['texto-cadastro-materia']) && $_POST['texto-cadastro-materia'] != "" && isset($_POST['img-cadastro-materia']) && $_POST['img-cadastro-materia'] != "") {



    $materia_novo = new Materia();
    $materia_novo->setTituloMateria($_POST['titulo-cadastro-materia']);
    $materia_novo->setTextoMateria($_POST['texto-cadastro-materia']);

    $localizacao = "../admin/assets/img-temporaria/". $_FILES['img-cadastro-materia']['img-materia'];
    move_uploaded_file($_FILES['img-cadastro-materia']['tmp-img-materia'], $localizacao);

    $materiaBanco = new MateriaBanco();
    $retorno = $materiaBanco->insert($materia_novo);

    if ($retorno) {
        header('location:../admin/confirmacoes/cadastro-materia-ok.php');
    } else {
        header('location:../admin/confirmacoes/cadastro-materia-not.php');
    }
} else {
    header('location:../admin/confirmacoes/cadastro-materia-not.php');
}
?>