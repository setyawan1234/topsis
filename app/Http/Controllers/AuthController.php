<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }
    public function logout(){
        
    }
    public function register(){

    }
    public function register_proses(){
        
    }
}
