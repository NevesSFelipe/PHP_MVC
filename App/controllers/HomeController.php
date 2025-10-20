<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Views;

class HomeController extends Controller {

    public function index()
    {

        $dados = [
            'titulo' => 'Home'
        ];

        Views::carregarView(__CLASS__, __FUNCTION__, $dados);
    }

}