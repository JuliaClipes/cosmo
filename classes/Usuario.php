<?php

class Usuario {
    public $id_usuario;
    public $nome_usuario;
    public $senha_usuario;
    public $email_usuario;
    
    function getIdUsuario() {
        return $this->id_usuario;
    }

    function getNomeUsuario() {
        return $this->nome_usuario;
    }

    function getSenhaUsuario() {
        return $this->senha_usuario;
    }

    function getEmailUsuario() {
        return $this->email_usuario;
    }

    function setNomeUsuario($nome_usuario_) {
        $this->nome_usuario = $nome_usuario_;
    }

    function setSenhaUsuario($senha_usuario_) {
        $this->senha_usuario = $senha_usuario_;
    }

    function setEmailUsuario($email_usuario_) {
        $this->email_usuario = $email_usuario_;
    }


}