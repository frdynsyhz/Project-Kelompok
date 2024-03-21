<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        return view('home');
    }

    public function about(){

        return view('about');
    }

    public function bsingle(){

        return view('blog-single');
    }

    public function blog(){

        return view('blog');
    }

    public function contact(){

        return view('contact');
    }

    public function pordetail(){

        return view('portfolio-details');
    }

    public function portfolio(){

        return view('portfolio');
    }

    public function pricing(){

        return view('pricing');
    }

    public function service(){

        return view('services');
    }

    public function testimoni(){

        return view('testimonials');
    }
}
