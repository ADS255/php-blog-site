<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        return
        view('Templates/header',array('title' => 'Admin'))
        .view('adminNav')
        .view('Templates/footer');
    }
}