<?php

class Admin {
    public $id_admin;
    public $nome_admin;
    public $senha_admin;
    public $email_admin;
    
    function getIdAdmin() {
        return $this->id_admin;
    }

    function getNomeAdmin() {
        return $this->nome_admin;
    }

    function getSenhaAdmin() {
        return $this->senha_admin;
    }

    function getEmailAdmin() {
        return $this->email_admin;
    }

    function setNomeAdmin($nome_admin_) {
        $this->nome_admin = $nome_admin_;
    }

    function setSenhaAdmin($senha_admin_) {
        $this->senha_admin = $senha_admin_;
    }

    function setEmailAdmin($email_admin_) {
        $this->email_admin = $email_admin_;
    }


}