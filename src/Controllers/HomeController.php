<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('home', ['title' => 'Home Page']);
    }

    public function contacts()
    {
        $this->render('contacts', ['title' => 'Contacts Page']);
    }
}