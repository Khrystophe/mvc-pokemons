<?php

require __DIR__ . './vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/',
    [
        'controller' => '\\Src\\Controllers\\MainController',
        'method' => 'home'
    ],
    'home'
);

$router->map(
    'GET',
    '/type',
    [
        'controller' => '\\Src\\Controllers\\MainController',
        'method' => 'type'
    ],
    'type'
); 

$router->map(
    'GET',
    '/type/[i:id]',
    [
        'controller' => '\\Src\\Controllers\\MainController',
        'method' => 'typeDetail'
    ],
    'type-detail'
);

$router->map(
    'GET',
    '/detail/[i:id]',
    [
        'controller' => '\\Src\\Controllers\\MainController',
        'method' => 'detail'
    ],
    'detail'
);

$match = $router->match();

if ($match !== false) {
    $route = $match['target'];
    $controller = new $route['controller']();
    $method = $route['method'];
    $controller->$method($match['params']);
}
