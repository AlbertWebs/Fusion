<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function contact_us(){
        return view('front.contact');
    }

    public function about_us(){
        return view('front.about-us');
    }

}
