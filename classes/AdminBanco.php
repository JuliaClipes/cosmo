<?php

class AdminBanco extends ConexaoBanco {

    private $tabela_admin = 'administrador'; //em laranja o nome da tabela no banco

    public function insert($admin_novo) { //$admin_novo vem do arquivo administrador-edit.php
        $stmt = $this->conexao->prepare("INSERT INTO {$this->tabela_admin} (nome_admin_banco, senha_admin_banco, email_admin_banco) VALUES (:nome_admin, :senha_admin, :email_admin)"); // insere no banco, com :´são os atributos da classe

        $stmt->bindValue(':nome_admin', $admin_novo->getNomeAdmin());
        $stmt->bindValue(':senha_admin', $admin_novo->getSenhaAdmin());
        $stmt->bindValue(':email_admin', $admin_novo->getEmailAdmin());

        return $stmt->execute();
    }

    public function update($admin_novo) {
        $stmt = $this->conexao->prepare("UPDATE {$this->tabela_admin} "
                . "SET nome_admin_banco=:nome_admin, senha_admin_banco = :senha_admin, email_admin_banco = :email_admin WHERE id_admin_banco = :id_admin;");

        $stmt->bindValue(':id_admin', $admin_novo->getIdAdmin());
        $stmt->bindValue(':nome_admin', $admin_novo->getNomeAdmin());
        $stmt->bindValue(':senha_admin', $admin_novo->getSenhaAdmin());
        $stmt->bindValue(':email_admin', $admin_novo->getEmailAdmin());

        return $stmt->execute();
    }

    public function delete($admin_novo) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->tabela_admin} "
                . " WHERE id_admin_banco = :id_admin");

        $stmt->bindValue(':id_admin', $admin_novo->getId());

        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->tabela_admin");
        $stmt->execute();

        $admin_novos = array();

        while ($linha = $stmt->fetch()) {
            $admin_novo = new Admin();
            $admin_novo->setIdAdmin($linha['id_admin_banco']);
            $admin_novo->setNomeAdmin($linha['nome_admin_banco']);
            $admin_novo->setSenhaAdmin($linha['senha_admin_banco']);
            $admin_novo->setEmailAdmin($linha['email_admin_banco']);


            $admin_novos[] = $admin_novo;
        }
        return $admin_novos;
    }

    //  public function selectById($admin_novo) {
    //     $stmt = $this->conexao->prepare("SELECT * FROM $this->tabela_admin WHERE id_admin_banco = :id_admin");
    //     $stmt->bindValue(':id_admin', $admin_novo->getIdAdmin());
    //     $stmt->execute();
    //     $linha = $stmt->fetch();
    //    $admin_novo = new Admin();
    //     $admin_novo->setNome($linha['nome_admin_banco']);
    //     $admin_novo->setSenha($linha['senha_admin_banco']);
    //     $admin_novo->setEmail($linha['email_admin_banco']);
    //     $admin_novo->setId($linha['id_admin_banco']);
    //     return $admin_novo;
    // }
}

// OS COMENTADOS PERGUNTAR SE PRECISA