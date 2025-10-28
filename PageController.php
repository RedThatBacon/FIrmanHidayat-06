<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function news()
    {
        return view('news');
    }

    public function product()
    {
        return view('product');
    }

    public function profile()
    {
        return view('profile');
    }

    public function contact()
    {
        return view('contact');
    }
}
