<?php

namespace App\core;

use PDO;
use PDOException;

class Model {

    private string $host;
    private string $bd;
    private string $usuarioBD;
    private string $senhaBD;

    protected ?PDO $conexaoMySQL = null;

    public function __construct() {

        $this->host         = $_ENV['HOST'];
        $this->bd           = $_ENV['BD'];
        $this->usuarioBD    = $_ENV['USUARIO_BD'];
        $this->senhaBD      = $_ENV['SENHA_BD'];

        $this->abrirConexaoMySQL();
    }

    public function abrirConexaoMySQL(): void
    {

        if ($this->conexaoMySQL !== null) {
            return;
        }
        
        try {
        
            $dsn = "mysql:host=$this->host;dbname=$this->bd;charset=utf8mb4";
            $this->conexaoMySQL = new PDO($dsn, $this->usuarioBD, $this->senhaBD);

            $this->conexaoMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexaoMySQL->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            die("Erro na conexão com o banco: " . $e->getMessage());

        }
    }

}