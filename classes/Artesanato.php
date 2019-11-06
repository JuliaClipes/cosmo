<?php

class Artesanato {
    public $id_artesanato;
    public $titulo_artesanato;
    public $texto_artesanato;
    public $img_artesanato;
    
    function getIdArtesanato() {
        return $this->id_artesanato;
    }

    function getTituloArtesanato() {
        return $this->titulo_artesanato;
    }

    function getTextoArtesanato() {
        return $this->texto_artesanato;
    }

    function getImgArtesanato() {
        return $this->img_artesanato;
    }

     function setIdArtesanato($id_artesanato_) {
       $this->id_artesanato = $id_artesanato_;
    }
    function setTituloArtesanato($titulo_artesanato_) {
        $this->titulo_artesanato = $titulo_artesanato_;
    }

    function setTextoArtesanato($texto_artesanato_) {
        $this->texto_artesanato = $texto_artesanato_;
    }

    function setImgArtesanato($img_artesanato_) {
        $this->img_artesanato = $img_artesanato_;
    }


}