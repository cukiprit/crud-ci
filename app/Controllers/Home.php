<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'index';
        $data['description'] = 'Halaman Awal';
        return view('welcome_message', $data);
    }
}
