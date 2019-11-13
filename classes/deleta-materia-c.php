<?php

include_once 'Materia.php';
include_once 'MateriaBanco.php';

if (isset($_GET['id']) && $_GET['id'] != "") {

    $materia = new Materia();
    $materia->setIdMateria($_GET['id']);


    $materiaDao = new MateriaBanco();
    $retorno = $materiaDao->delete($materia);

    if ($retorno) {
        header('location:../admin/confirmacoes/deleta-materia-ok.php');
    } else {
        header('location:../admin/confirmacoes/deleta-materia-not.php');
    }
} else {
    header('location:../admin/confirmacoes/deleta-materia-not.php');
}
