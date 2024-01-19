<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontentController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function portfolio(){
        return view('portfolio');
    }
    public function contacts(){
        return view('contacts');
    }
    public function spam(){
        return view('spam');
    }
}
