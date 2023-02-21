<?php

namespace Src\Controllers;

class Controller
{
    protected function show($view, $data = [])
    {
        $baseUrl = $_SERVER['BASE_URI'];
        $router = $GLOBALS['router'];
        extract($data);
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $view . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
