<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\SessionModel;

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
