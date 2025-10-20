<?php

namespace App\Core;

final class Views {

    public static function carregarView(string $controller, string $metodo, array $data = [])
    {

        $arrayController = explode("\\", $controller);
        $pastaView = strtolower(str_replace("Controller", "", end($arrayController)));
        $arquivo = "{$metodo}.php";

        $viewFile = __DIR__ . "/../views/{$pastaView}/{$arquivo}";

        if (!file_exists($viewFile)) {
            die("View $viewFile não encontrada!");
        }

        extract($data);

        require $viewFile;
    }
}
