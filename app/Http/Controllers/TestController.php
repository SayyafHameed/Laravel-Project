<?php

namespace App\Http\Controllers;

class TestController extends Controller{
    public function Ahmed(){
        dd('Hello Ahmed from test controller file');
    }

    public function Ali()
    {
        return view('home');
    }

    public function printName($name = 'DefaultName'){
        dd("Hello $name from function controller file");
    }
}