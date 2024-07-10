<?php

use App\Services\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    protected function setUp(): void
    {
        define('APP_ROOT_URL', 'http://localhost:8081');
        define('APP_PATH', '/Algebra/OL-OBE_DEV_H-0224/NapredniPHP/AlgebraCRM');
        define('APP_URL', APP_ROOT_URL . APP_PATH); 
        $_SERVER['REQUEST_METHOD'] = '';
        $_SERVER['REQUEST_URI'] = '';
    }

    public function testGetInstance()
    {
        $router1 = Router::getInstance();
        $router2 = Router::getInstance();

        $this->assertSame($router1, $router2);
    }

    public function testDispatchSuccess()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = APP_PATH . '/test';

        $router = Router::getInstance();
        $router->get('/test', TestController::class, 'testAction');
        
        $this->expectOutputString('Test Action');
        $router->dispatch();
    }
}

class TestController
{
    public function testAction()
    {
        echo 'Test Action';
    }
}