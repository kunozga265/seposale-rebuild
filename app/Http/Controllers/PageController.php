<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function shop()
    {
        return view('pages.shop');
    }
    public function projects()
    {
        return view('pages.projects');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function cart()
    {
        return view('pages.cart');
    }
}
