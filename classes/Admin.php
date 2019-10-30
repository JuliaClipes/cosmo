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

    function setIdAdmin($id_admin) {
        $this->id_admin = $id_admin;
    }

    function setNomeAdmin($nome_admin) {
        $this->nome_admin = $nome_admin;
    }

    function setSenhaAdmin($senha_admin) {
        $this->senha_admin = $senha_admin;
    }

    function setEmailAdmin($email_admin) {
        $this->email_admin = $email_admin;
    }

}
