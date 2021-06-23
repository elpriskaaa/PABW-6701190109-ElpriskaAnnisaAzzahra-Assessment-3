<?php

namespace App\Controllers;

class Karyawan extends BaseController
{
    public function shop()
    {
        $data = [
            'title' => 'Shop'
        ];
        return view('shop', $data);
    }
}