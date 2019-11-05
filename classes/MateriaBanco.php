<?php
include_once "ConexaoBanco.php";
include_once "MateriaBanco.php";

class MateriaBanco extends ConexaoBanco {

    private $tabela_materia = 'materia'; //em laranja o nome da tabela no banco

    public function insert($materia_novo) { //$materia_novo vem do arquivo materiais-edit.php
        $stmt = $this->conexao->prepare("INSERT INTO {$this->tabela_materia} (img_materia_banco,texto_materia_banco, titulo_materia_banco ) VALUES (:img_materia, :texto_materia,:titulo_materia)"); // insere no banco, com :´são os atributos da classe

        $stmt->bindValue(':titulo_materia', $materia_novo->getNomeMateria());
        $stmt->bindValue(':texto_materia', $materia_novo->getSenhaMateria());
        $stmt->bindValue(':img_materia', $materia_novo->getEmailMateria());

        return $stmt->execute();
    }

    public function update($materia_novo) {
        $stmt = $this->conexao->prepare("UPDATE {$this->tabela_materia} "
                . "SET img_materia_banco = :img_materia, texto_materia_banco = :texto_materia, titulo_materia_banco=:titulo_materia  WHERE id_materia_banco = :id_materia;");

        $stmt->bindValue(':id_materia', $materia_novo->getIdMateria());
        $stmt->bindValue(':img_materia', $materia_novo->getEmailMateria());
        $stmt->bindValue(':texto_materia', $materia_novo->getSenhaMateria());
        $stmt->bindValue(':titulo_materia', $materia_novo->getNomeMateria());



        return $stmt->execute();
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
            $materia_novo->setEmailMateria($linha['img_materia_banco']);
            $materia_novo->setSenhaMateria($linha['texto_materia_banco']);
            $materia_novo->setNomeMateria($linha['titulo_materia_banco']);




            $materia_novos[] = $materia_novo;
        }
        return $materia_novos;
    }

    public function selectById($materia_novo) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->tabela_materia WHERE id_materia_banco = :id_materia");
        $stmt->bindValue(':id_materia', $materia_novo->getIdMateria());
        $stmt->execute();
        $linha = $stmt->fetch();
        $materia_novo = new Materia();
        $materia_novo->setEmail($linha['img_materia_banco']);
        $materia_novo->setId($linha['id_materia_banco']);
        $materia_novo->setSenha($linha['texto_materia_banco']);
        $materia_novo->setNome($linha['titulo_materia_banco']);


        return $materia_novo;
    }

}
