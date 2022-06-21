<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $title = "Home";
        return view('front.index', compact('title'));
    }

    public function contact_us(){
        $title = "Contact Us";
        return view('front.contact', compact('title'));
    }

    public function about_us(){
        $title = "About Us";
        return view('front.about-us', compact('title'));
    }

    public function our_sectors(){
        $title = "Sectors";
        return view('front.our-sectors', compact('title'));
    }

    public function service($slung){
        $Services = DB::table('services')->where('slung',$slung)->get();
        $title = "Services";
        return view('front.service', compact('Services','title'));
    }



}
