<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordController extends Controller
{
    public function password(){
        return view('Guest/forget-password');
    }

    public function passwordPost(Request $request){

        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
        ]);

        $token =Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('emails.forget-password',['token'=> $token], function ($message) use($request){
            $message->to($request->email);
            $message->subject('Récuperer mot de passe');
        });

        return redirect()->route('password')->with('succes', 'Le lien est envoyé a votre mail'); 
    }
    public function resetPassword($token){

     return  view('Guest/new-password',compact('token'));
    }
    public function resetPasswordPost(Request $request){
        $request->validate([
 
            'email' => ['required', 'string', 'email', 'max:255',  'exists:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);
        $updatePassword = DB::table('password_reset_tokens')
        ->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();
        if(!$updatePassword){
            return redirect()->route('reset.password')->with('error', 'invalide');
        }
        User::where('email',$request->email)->update([
            'password' => Hash::make($request->password),
        ]);
        DB::table('password_reset_tokens')->where(['email'=>$request->email])->delete();

        return redirect()->route('login')->with('succes', 'Mot de passe modifié avec succés');

    }

}
