<?php

namespace App\Controllers;

use App\Models\User;

class AuthController extends Controller
{
    private User $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function showRegister()
    {
        $this->render('auth/register', ['title' => 'Register']);
    }

    public function register()
    {
        $data = $this->getRequestData();
       
        //$this->userModel->create($data);
    }
}