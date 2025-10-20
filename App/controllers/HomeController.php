<?php

namespace App\controllers;

use App\core\Controller;
use App\core\Views;

class HomeController extends Controller {

    public function index()
    {

        $dados = [
            'titulo' => 'Home'
        ];

        Views::carregarView(__CLASS__, __FUNCTION__, $dados);
    }

}