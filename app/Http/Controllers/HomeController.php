<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front-end.pages.index');
    }

    public function about()
    {
        return view('front-end.pages.about');
    }

    public function service()
    {
        return view('front-end.pages.service');
    }

    public function menu()
    {
        return view('front-end.pages.menu');
    }

    public function booking()
    {
        return view('front-end.pages.booking');
    }

    public function team()
    {
        return view('front-end.pages.team');
    }

    public function testimonial()
    {
        return view('front-end.pages.testimonial');
    }

    public function contact()
    {
        return view('front-end.pages.contact');
    }
}
