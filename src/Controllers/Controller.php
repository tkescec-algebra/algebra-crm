<?php

namespace App\Controllers;

abstract class Controller
{
    protected function render(string $view, array $data = []): void
    {
        try {
            extract($data);
            require_once APP_ROOT . "/views/{$view}.php";
        } catch (\Throwable $e) {
            header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
            echo "View not found.";
        }
    }
}