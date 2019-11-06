<?php

include_once 'Artesanato.php';
include_once 'ArtesanatoBanco.php';

//error_reporting(E_ERROR | E_PARSE);

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['titulo-cadastro-artesanato']) && $_POST['titulo-cadastro-artesanato'] != "" && isset($_POST['texto-cadastro-artesanato']) && $_POST['texto-cadastro-artesanato'] != "" && isset($_FILES['img-cadastro-artesanato']) && $_FILES['img-cadastro-artesanato'] != "") {



    $artesanato_novo = new Artesanato();
    $artesanato_novo->setTituloArtesanato($_POST['titulo-cadastro-artesanato']);
    $artesanato_novo->setTextoArtesanato($_POST['texto-cadastro-artesanato']);
    $artesanato_novo->setImgArtesanato($_FILES['img-cadastro-artesanato']['name']);
    
    
    //var_dump($_FILES['img-cadastro-artesanato']);

    $localizacao = "../admin/assets/img-temporaria/". $_FILES['img-cadastro-artesanato']['name'];
    move_uploaded_file($_FILES['img-cadastro-artesanato']['tmp_name'], $localizacao);    

    $artesanatoBanco = new ArtesanatoBanco();
    $retorno = $artesanatoBanco->insert($artesanato_novo);
    
    var_dump($retorno);

    if ($retorno) {
        header('location:../admin/confirmacoes/cadastro-artesanato-ok.php');
    } else {
        header('location:../admin/confirmacoes/cadastro-artesanato-not.php');
    }
} else {
   header('location:../admin/confirmacoes/cadastro-artesanato-not.php');
}
?>