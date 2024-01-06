<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        return ('<h1>Hello World!</h1>');
    }
}
