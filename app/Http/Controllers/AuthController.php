<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerproses(Request $request){
       $validator = Validator::make($request->all(), [
        'name' => 'required' ,
        'email' =>
       ])
    }
}
