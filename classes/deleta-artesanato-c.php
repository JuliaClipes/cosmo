<?php

if (isset($_GET['id']) && $_GET['id'] != "") {

    $artesanato = new Artesanato();
    $artesanato->setIdArtesanato($_GET['id']);


    $artesanatoBanco = new ArtesanatoBanco();
    $artesanatoBanco->delete($artesanato);

    if ($retorno) {
        header('location:../admin/confirmacoes/deleta-artesanato-ok.php');
    } else {
        header('location:../admin/confirmacoes/deleta-artesanato-not.php');
    }
} else {
    header('location:../admin/confirmacoes/deleta-artesanato-not.php');
}
