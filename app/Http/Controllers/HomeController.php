<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\banner;



use App\master;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function nn()
    {
        return view('home');
    }



     public function index()
    {
        $seo = master::all();
        $banner = banner::all();
        return view('front_page/master ',['banner'=>$banner,'seo'=>$seo]);
    }

     public function contect()
    {
        $seo = master::all();
        return view('front_page/contect',['seo'=>$seo]);
    }

    public function aboute()
    {
        $seo = master::all();
        return view('front_page/aboute',['seo'=>$seo]);
    }


    public function products()
    {
        $master = master::all();
        $seo = master::all();
        return view('front_page/products ',['master'=>$master,'seo'=>$seo]);
    }
}
