<?php
class BancoDados {
    private $usuario = "root";
    private $senha = "";
    private $host = "localhost";
    private $banco_dados = "";
    
    protected $conexao;
    
    function __construct() {
        $this->conexao = new PDO(
                "mysql:host={$this->host};dbname={$this->banco_dados}", 
                $this->usuario, 
                $this->senha);
    }
}
