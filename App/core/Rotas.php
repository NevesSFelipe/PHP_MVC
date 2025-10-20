<?php

namespace App\Core;

class Rotas {

    private string $controller;
    private string $metodo;
    private array $parametros = [];

    public function executar($urlInformada)
    {

        $this->tratarURL($urlInformada);

        $diretorioController = "App\Controllers\\" . $this->controller;

        if ( !class_exists($diretorioController) ) {
            die("Hei dev, você esqueceu de criar a controller " . $this->controller);
        }

        if ( !method_exists($diretorioController, $this->metodo) ) {        
            die("Hei dev, verifique os métodos da controller " . $this->controller);
        }

        $controller = new $diretorioController();
        call_user_func_array([$controller, $this->metodo], $this->parametros);

    }

    public function tratarURL($urlInformada): void
    {

        $url      = substr($urlInformada, strlen($_ENV['URL_BASE']));
        $arrayURL = array_values(array_filter(explode("/", $url)));

        $nomeController    = $arrayURL[0] ?? $_ENV["CONTROLLER_PADRAO"];
        $nomeMetodo        = $arrayURL[1] ?? $_ENV["METODO_PADRAO"];
        $valoresParametros = array_slice($arrayURL, 2);

        $this->controller = ucfirst($nomeController) . "Controller";
        $this->metodo     = $nomeMetodo;
        $this->parametros = $valoresParametros;

    }

}