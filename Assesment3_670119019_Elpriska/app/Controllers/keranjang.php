<?php

namespace App\Controllers;

class Karyawan extends BaseController
{
     public function shopcart()
    {
        $data = [
            'title' => 'BUY'
        ];
        return view('keranjang', $data);
    }
}