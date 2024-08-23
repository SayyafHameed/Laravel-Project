<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function home(){
       return view('theme.home'); 
    }

    public function shop(){
       return view('theme.shop'); 
    }

    public function about(){
       return view('theme.about'); 
    }

    public function blog(){
       return view('theme.blog'); 
    }

    public function services(){
       return view('theme.services'); 
    }

    public function cart(){
       return view('theme.cart'); 
    }

    public function contact(){
        return view('theme.contact'); 
    }

    public function store(Request $request){
      dd($request->all()); 
  }
}
