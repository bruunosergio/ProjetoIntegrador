<?php
class Database {

    private $username = "root";
    private $senha = "";
    private $database = "projeto_integrador";
    private $conexao;

    function __construct(){
        $this->conexao = new PDO("mysql:host=localhost;dbname=$this->database", $this->username, $this->senha);
    }

    function getConexao(){
        return $this->conexao;
    }

}

?>