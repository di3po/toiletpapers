<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToiletPaper extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }
}
