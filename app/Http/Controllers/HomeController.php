<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    public function our_sectors(){
        return view('front.our-sectors');
    }

    public function service($slung){
        $Services = DB::table('services')->where('slung',$slung)->get();
        return view('front.service', compact('Services'));
    }



}
