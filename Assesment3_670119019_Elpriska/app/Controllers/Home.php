<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('index', $data);
    }

    public function shop()
    {
        $data = [
            'title' => 'Shop'
        ];
        return view('shop', $data);
    }

    public function shopcart()
    {
        $data = [
            'title' => 'BUY'
        ];
        return view('keranjang', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('about', $data);
    }
}
