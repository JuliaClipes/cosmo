<?php

if (isset($_GET['id']) && $_GET['id'] != "") {

    $materia = new Materia();
    $materia->setIdMateria($_GET['id']);


    $materiaBanco = new MateriaBanco();
    $materiaBanco->delete($materia);

    if ($retorno) {
        header('location:../admin/confirmacoes/deleta-materia-ok.php');
    } else {
        header('location:../admin/confirmacoes/deleta-materia-not.php');
    }
} else {
    header('location:../admin/confirmacoes/deleta-materia-not.php');
}
