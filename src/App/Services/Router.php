<?php

namespace RokasPaulikas\BasicMVC\App\Services;

class Router
{
    public static function get(string $routeName, array $routeAction)
    {
        $uri = explode('?', $_SERVER['REQUEST_URI'])[0];

        if ($uri === $routeName && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $controller = new $routeAction[0];
            $controller::{$routeAction[1]}();
        }
    }
}
