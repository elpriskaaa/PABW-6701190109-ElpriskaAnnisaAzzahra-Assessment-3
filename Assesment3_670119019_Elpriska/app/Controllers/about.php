<?php

namespace App\Controllers;

class Karyawan extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('about', $data);
    }
}