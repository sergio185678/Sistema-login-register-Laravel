<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function show(){
        //Auth::user()->"attributo"         con esto puedo acceder a la info del usuario
        return view('home.index');
    }
}
