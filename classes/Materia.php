<?php

class Materia {
    public $id_materia;
    public $titulo_materia;
    public $texto_materia;
    public $img_materia;
    
    function getIdMateria() {
        return $this->id_materia;
    }

    function getTituloMateria() {
        return $this->titulo_materia;
    }

    function getTextoMateria() {
        return $this->texto_materia;
    }

    function getImgMateria() {
        return $this->img_materia;
    }

    function setTituloMateria($titulo_materia_) {
        $this->titulo_materia = $titulo_materia_;
    }

    function setTextoMateria($texto_materia_) {
        $this->texto_materia = $texto_materia_;
    }

    function setImgMateria($img_materia_) {
        $this->img_materia = $img_materia_;
    }


}