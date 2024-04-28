<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    public function create(){
        return view('Guest/register');
    }
    public function store(Request $request){
        $request->validate([
 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'nom' => ['required', 'string', 'max:255','min:3'],
            'prenom' => ['required', 'string', 'max:255','min:3'],
            'naissance' => ['required',"before:2006-01-01"],
            'telephone' => ['required','regex:/^06\d{8}$/'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ],[
            'telephone.regex'=>'Veuillez entrez de cet format 06XXXXXXXX',
        ]);

         User::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'email' => $request->email,
            'naissance' => $request->naissance,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('succes', 'Vous êtes inscris avec succés.'); 
    }
}
