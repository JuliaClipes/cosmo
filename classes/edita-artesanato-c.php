<?php

include_once 'Artesanato.php';
include_once 'ArtesanatoBanco.php';

//error_reporting(E_ERROR | E_PARSE);

//Verifica se veio tudo preenchido do formulário

//var_dump("000");die;
if (isset($_POST['titulo-edita-artesanato']) && $_POST['titulo-edita-artesanato'] != "" && isset($_POST['texto-edita-artesanato']) && $_POST['texto-edita-artesanato'] != "" && isset($_FILES['img-edita-artesanato']) && $_FILES['img-edita-artesanato'] != "") {

    $artesanato = new Artesanato();
    $artesanato->setIdArtesanato($_POST['id-edita-artesanato']);
    $artesanato->setTituloArtesanato($_POST['titulo-edita-artesanato']);
    $artesanato->setTextoArtesanato($_POST['texto-edita-artesanato']);
    
    if($_FILES['img-edita-artesanato']['name'] == ""){
          $artesanato->setImgArtesanato($_POST['img-edita-artesanato-antiga']); 
    } else {
        $artesanato->setImgArtesanato($_FILES['img-edita-artesanato']['name']);
    }
    
    
    //var_dump($artesanato);die;
    
    $artesanatoDao = new ArtesanatoBanco();
    $retorno = $artesanatoDao->update($artesanato);
    
    if ($retorno) {
        header('location:../admin/confirmacoes/edita-artesanato-ok.php');
    } else {
        header('location:../admin/confirmacoes/edita-artesanato-not.php');
    }
} else {
   header('location:../admin/confirmacoes/edita-artesanato-not.php');
}
?>