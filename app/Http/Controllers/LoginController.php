<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        //si ya se logio se redirige al home
        if(Auth::check()){
            return redirect()->to('/home');
        }
        return view('auth.login');
    }
    public function login(LoginRequest $request){
        $credenciales=$request->getCredentials();
        //valido las credenciales
        if(!Auth::validate($credenciales)){
            return redirect()->to('/login')->withErrors('Username and/or password is incorrect');
        }
        //creamos nuestro usuario mediante las credenciales
        $user=Auth::getProvider()->retrieveByCredentials($credenciales);
        //crear sesion login y poder usar los datos en cualquier momento
        Auth::login($user);
        return $this->authenticated($request,$user);
    }
    public function authenticated(Request $request,$user){
        return redirect()->to('/home');
    }
}
