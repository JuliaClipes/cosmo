<?php

include_once 'ConexaoBanco.php';
include_once 'Artesanato.php';

class ArtesanatoBanco extends ConexaoBanco {

    private $tabela_artesanato = 'artesanato'; //em laranja o nome da tabela no banco

    public function insert($artesanato_novo) { //$artesanato_novo vem do arquivo artesanatois-edit.php
        $stmt = $this->conexao->prepare("INSERT INTO {$this->tabela_artesanato} (titulo_artesanato_banco, texto_artesanato_banco, img_artesanato_banco) VALUES (:titulo_artesanato, :texto_artesanato, :img_artesanato)"); // insere no banco, com :´são os atributos da classe

        $stmt->bindValue(':titulo_artesanato', $artesanato_novo->getTituloArtesanato());
        $stmt->bindValue(':texto_artesanato', $artesanato_novo->getTextoArtesanato());
        $stmt->bindValue(':img_artesanato', $artesanato_novo->getImgArtesanato());

        return $stmt->execute();
    }

    public function update($artesanato_novo) {
        $stmt = $this->conexao->prepare("UPDATE {$this->tabela_artesanato} "
                . "SET titulo_artesanato_banco=:titulo_artesanato, texto_artesanato_banco = :texto_artesanato, img_artesanato_banco = :img_artesanato WHERE id_artesanato_banco = :id_artesanato;");

        $stmt->bindValue(':id_artesanato', $artesanato_novo->getIdArtesanato());
        $stmt->bindValue(':titulo_artesanato', $artesanato_novo->getTituloArtesanato());
        $stmt->bindValue(':texto_artesanato', $artesanato_novo->getTextoArtesanato());
        $stmt->bindValue(':img_artesanato', $artesanato_novo->getImgArtesanato());

        return $stmt->execute();
    }

    public function delete($artesanato_novo) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->tabela_artesanato} "
                . " WHERE id_artesanato_banco = :id_artesanato");

        $stmt->bindValue(':id_artesanato', $artesanato_novo->getId());

        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->tabela_artesanato");
        $stmt->execute();

        $artesanato_novos = array();

        while ($linha = $stmt->fetch()) {
            $artesanato_novo = new Artesanato();
            $artesanato_novo->setIdArtesanato($linha['id_artesanato_banco']);
            $artesanato_novo->setTituloArtesanato($linha['titulo_artesanato_banco']);
            $artesanato_novo->setTextoArtesanato($linha['texto_artesanato_banco']);
            $artesanato_novo->setImgArtesanato($linha['img_artesanato_banco']);


            $artesanato_novos[] = $artesanato_novo;
        }
        return $artesanato_novos;
    }

    public function selectById($artesanato_novo) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->tabela_artesanato WHERE id_artesanato_banco = :id_artesanato");
        $stmt->bindValue(':id_artesanato', $artesanato_novo->getIdArtesanato());
        $stmt->execute();
        $linha = $stmt->fetch();
        $artesanato_novo = new Artesanato();
        $artesanato_novo->setTitulo($linha['titulo_artesanato_banco']);
        $artesanato_novo->setTexto($linha['texto_artesanato_banco']);
        $artesanato_novo->setImg($linha['img_artesanato_banco']);
        $artesanato_novo->setId($linha['id_artesanato_banco']);
        return $artesanato_novo;
    }

}