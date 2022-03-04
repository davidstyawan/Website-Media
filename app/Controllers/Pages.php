<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function about()
    {
        // echo view('layout/header');
        echo view('about');
        // echo view('layout/footer');
    }
}
