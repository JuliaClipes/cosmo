<?php

include_once 'Materia.php';
include_once 'MateriaBanco.php';

//error_reporting(E_ERROR | E_PARSE);

//Verifica se veio tudo preenchido do formulário

//var_dump("000");die;
if (isset($_POST['titulo-edita-materia']) && $_POST['titulo-edita-materia'] != "" && isset($_POST['texto-edita-materia']) && $_POST['texto-edita-materia'] != "" && isset($_FILES['img-edita-materia']) && $_FILES['img-edita-materia'] != "") {

    $materia = new Materia();
    $materia->setIdMateria($_POST['id-edita-materia']);
    $materia->setTituloMateria($_POST['titulo-edita-materia']);
    $materia->setTextoMateria($_POST['texto-edita-materia']);
    
    if($_FILES['img-edita-materia']['name'] == ""){
          $materia->setImgMateria($_POST['img-edita-materia-antiga']); 
    } else {
        $materia->setImgMateria($_FILES['img-edita-materia']['name']);
    }
    
    
    //var_dump($materia);die;
    
    $materiaDao = new MateriaBanco();
    $retorno = $materiaDao->update($materia);
    
    if ($retorno) {
        header('location:../admin/confirmacoes/edita-materia-ok.php');
    } else {
        header('location:../admin/confirmacoes/edita-materia-not.php');
    }
} else {
   header('location:../admin/confirmacoes/edita-materia-not.php');
}
?>