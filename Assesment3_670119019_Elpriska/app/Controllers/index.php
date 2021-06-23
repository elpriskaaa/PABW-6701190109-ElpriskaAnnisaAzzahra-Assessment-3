<?php

namespace App\Controllers;

class Karyawan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('index', $data);
    }
}
