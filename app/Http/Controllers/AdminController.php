<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');

    }

    public function form(){
        return view('admin.form');

    }
    public function bidang(){
        return view('admin.bidang');

    }
    public function tempatpkl(){
        return view('admin.tempatpkl');
    }
}
