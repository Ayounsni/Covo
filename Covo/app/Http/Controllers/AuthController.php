<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function create(){
        return view('Guest/login');
    }
    public function store(Request $request){
        $request->validate([
 
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
        ]);

        $user = ['email' => $request->email , 'password' => $request->password];
        if(Auth::attempt($user)){
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }else{
            return back()->withErrors([
                'email' => 'Email ou mot de passe incorrect'
            ])->onlyInput('email');
        }

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login')->with('succes', 'Vous êtes déconnecté avec succès !');

    }
}
