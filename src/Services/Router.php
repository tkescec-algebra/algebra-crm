<?php

namespace App\Services;

use App\Contracts\RouterInterface;

class Router implements RouterInterface
{
    private array $routes = [];
    private static ?RouterInterface $router = null;

    private function __construct(){}
    private function __clone(){}

    public static function getInstance(): RouterInterface
    {
        if (self::$router === null) {
            self::$router = new Router();
        }

        return self::$router;
    }

    private function addRoute(string $path, string $controller, string $action, string $method): void
    {
        $uri = APP_URL . $path;
        $this->routes[$method][$uri] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function get(string $path, string $controller, string $action): void
    {
        $this->addRoute($path, $controller, $action, 'GET');
    }

    public function post(string $path, string $controller, string $action): void
    {
        $this->addRoute($path, $controller, $action, 'POST');
    }
}