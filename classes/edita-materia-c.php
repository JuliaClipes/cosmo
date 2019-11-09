<?php

include_once 'Materia.php';
include_once 'MateriaBanco.php';

//error_reporting(E_ERROR | E_PARSE);

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['titulo-edita-materia']) && $_POST['titulo-edita-materia'] != "" && isset($_POST['texto-edita-materia']) && $_POST['texto-edita-materia'] != "" && isset($_FILES['img-edita-materia']) && $_FILES['img-edita-materia'] != "") {



    $materia = new Materia();
    $materia->setTituloMateria($_POST['titulo_edita_materia']);
    $materia->setTextoMateria($_POST['texto_edita_materia']);
    $materia->setImgMateria($_POST['img_edita_materia']);

    $materiaDao = new MateriaBanco();
    $materiaDao->update($materia);

    if ($retorno) {
        header('location:../admin/confirmacoes/edita-materia-ok.php');
    } else {
        header('location:../admin/confirmacoes/edita-materia-not.php');
    }
} else {
   header('location:../admin/confirmacoes/edita-materia-not.php');
}
?>