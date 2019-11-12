<?php

include_once 'Artesanato.php';
include_once 'ArtesanatoBanco.php';

//error_reporting(E_ERROR | E_PARSE);

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['titulo-edita-artesanato']) && $_POST['titulo-edita-artesanato'] != "" && isset($_POST['texto-edita-artesanato']) && $_POST['texto-edita-artesanato'] != "" && isset($_FILES['img-edita-artesanato']) && $_FILES['img-edita-artesanato'] != "") {



    $artesanato = new Artesanato();
    $artesanato->setTituloArtesanato($_POST['titulo_edita_artesanato']);
    $artesanato->setTextoArtesanato($_POST['texto_edita_artesanato']);
    $artesanato->setImgArtesanato($_POST['img_edita_artesanato']);

    $artesanatoDao = new ArtesanatoBanco();
    $artesanatoDao->update($artesanato);

    if ($retorno) {
        header('location:../admin/confirmacoes/edita-artesanato-ok.php');
    } else {
        header('location:../admin/confirmacoes/edita-artesanato-not.php');
    }
} else {
   header('location:../admin/confirmacoes/edita-artesanato-not.php');
}
?>