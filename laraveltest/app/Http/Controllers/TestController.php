<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function test($param)
    {
        $item = ['txt' => '部屋番号は',
                'param' => $param . 'です'] ;
        return view('test',$item);
    }
}
