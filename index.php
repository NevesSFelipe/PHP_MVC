<?php

require_once 'vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

use App\Core\Rotas;
$rota = new Rotas;
$rota->executar($_SERVER['REQUEST_URI']);