<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

    public function create(){
        return view('user.login');
    }
    public function login(){
        return view('user.login');
    }
}