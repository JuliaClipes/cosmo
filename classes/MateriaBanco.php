<?php

include_once "ConexaoBanco.php";
include_once "Materia.php";

class MateriaBanco extends ConexaoBanco {

    private $tabela_materia = 'materia'; //em laranja o nome da tabela no banco

    public function insert($materia_novo) { //$materia_novo vem do arquivo materiais-edit.php
        var_dump($materia_novo);
        $stmt = $this->conexao->prepare("INSERT INTO {$this->tabela_materia} (img_materia_banco,texto_materia_banco, titulo_materia_banco ) VALUES (:img_materia, :texto_materia,:titulo_materia)"); // insere no banco, com :´são os atributos da classe

        $stmt->bindValue(':titulo_materia', $materia_novo->getTituloMateria());
        $stmt->bindValue(':texto_materia', $materia_novo->getTextoMateria());
        $stmt->bindValue(':img_materia', $materia_novo->getImgMateria());

        return $stmt->execute();
    }

    public function update($materia_novo) {
        
        var_dump($materia_novo);
        $stmt = $this->conexao->prepare("UPDATE $this->tabela_materia SET img_materia_banco = :img_materia, texto_materia_banco = :texto_materia, titulo_materia_banco=:titulo_materia  WHERE id_materia_banco = :id_materia;");

        $stmt->bindValue(':id_materia', $materia_novo->getIdMateria());
        $stmt->bindValue(':img_materia', $materia_novo->getImgMateria());
        $stmt->bindValue(':texto_materia', $materia_novo->getTextoMateria());
        $stmt->bindValue(':titulo_materia', $materia_novo->getTituloMateria());

        $a = $stmt->execute();

        return $a;
    }

    public function delete($materia_novo) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->tabela_materia} "
                . " WHERE id_materia_banco = :id_materia");

        $stmt->bindValue(':id_materia', $materia_novo->getId());

        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->tabela_materia");
        $stmt->execute();

        $materia_novos = array();

        while ($linha = $stmt->fetch()) {
            $materia_novo = new Materia();
            $materia_novo->setIdMateria($linha['id_materia_banco']);
            $materia_novo->setImgMateria($linha['img_materia_banco']);
            $materia_novo->setTextoMateria($linha['texto_materia_banco']);
            $materia_novo->setTituloMateria($linha['titulo_materia_banco']);




            $materia_novos[] = $materia_novo;
        }
        return $materia_novos;
    }

    public function selectById($materia_novo) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->tabela_materia WHERE id_materia_banco = $materia_novo");
        $stmt->execute();
        $linha = $stmt->fetchAll();
        
        return $linha;
        
        //$materia_edita = new Materia();
        //$materia_edita->setImg($linha['img_materia_banco']);
        //$materia_edita->setId($linha['id_materia_banco']);
        //$materia_edita->setTexto($linha['texto_materia_banco']);
        //$materia_edita->setTitulo($linha['titulo_materia_banco']);


        
    }

}
