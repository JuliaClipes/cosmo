<?php

include_once "ConexaoBanco.php";
class UsuarioBanco extends ConexaoBanco {

    private $tabela_usuario = 'usuario'; //em laranja o nome da tabela no banco

    public function insert($usuario_novo) { //$usuario_novo vem do arquivo cadastro-usuario.php
        $stmt = $this->conexao->prepare("INSERT INTO {$this->tabela_usuario} (nome_usuario_banco, senha_usuario_banco, email_usuario_banco) VALUES (:nome_usuario, :senha_usuario, :email_usuario)"); // insere no banco, com :´são os atributos da classe

        $stmt->bindValue(':nome_usuario', $usuario_novo->getNomeUsuario());
        $stmt->bindValue(':senha_usuario', $usuario_novo->getSenhaUsuario());
        $stmt->bindValue(':email_usuario', $usuario_novo->getEmailUsuario());

        $b = $stmt->execute();
        
        var_dump($b);
        
        return $b;
    }

    public function update($usuario_novo) {
        $stmt = $this->conexao->prepare("UPDATE {$this->tabela_usuario} "
                . "SET nome_usuario_banco=:nome_usuario, senha_usuario_banco = :senha_usuario, email_usuario_banco = :email_usuario WHERE id_usuario_banco = :id_usuario;");

        $stmt->bindValue(':id_usuario', $usuario_novo->getIdUsuario());
        $stmt->bindValue(':nome_usuario', $usuario_novo->getNomeUsuario());
        $stmt->bindValue(':senha_usuario', $usuario_novo->getSenhaUsuario());
        $stmt->bindValue(':email_usuario', $usuario_novo->getEmailUsuario());

        return $stmt->execute();
    }

    public function delete($usuario_novo) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->tabela_usuario} "
                . " WHERE id_usuario_banco = :id_usuario");

        $stmt->bindValue(':id_usuario', $usuario_novo->getId());

        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->tabela_usuario");
        $stmt->execute();

        $usuario_novos = array();

        while ($linha = $stmt->fetch()) {
            $usuario_novo = new Usuario();
            $usuario_novo->setIdUsuario($linha['id_usuario_banco']);
            $usuario_novo->setNomeUsuario($linha['nome_usuario_banco']);
            $usuario_novo->setSenhaUsuario($linha['senha_usuario_banco']);
            $usuario_novo->setEmailUsuario($linha['email_usuario_banco']);


            $usuario_novos[] = $usuario_novo;
        }
        return $usuario_novos;
    }
    
    public function login($email, $senha){
        
        $stmt = $this->conexao->prepare("SELECT * FROM usuario WHERE email-usuario-banco = '$email' AND senha-usuario-banco = '$senha'");
        $b = $stmt->execute();
        
        var_dump($b);
        
        //$b->fetchColumn();
        
        //return $b;
    }

    //  public function selectById($usuario_novo) {
    //     $stmt = $this->conexao->prepare("SELECT * FROM $this->tabela_usuario WHERE id_usuario_banco = :id_usuario");
    //     $stmt->bindValue(':id_usuario', $usuario_novo->getIdUsuario());
    //     $stmt->execute();
    //     $linha = $stmt->fetch();
    //    $usuario_novo = new Usuario();
    //     $usuario_novo->setNome($linha['nome_usuario_banco']);
    //     $usuario_novo->setSenha($linha['senha_usuario_banco']);
    //     $usuario_novo->setEmail($linha['email_usuario_banco']);
    //     $usuario_novo->setId($linha['id_usuario_banco']);
    //     return $usuario_novo;
    // }
}

// OS COMENTADOS PERGUNTAR SE EU PRECISO