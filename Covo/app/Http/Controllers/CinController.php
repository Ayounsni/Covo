<?php

namespace App\Http\Controllers;

use App\Models\Cin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CinController extends Controller
{
    public function store(Request $request){
        $id=auth()->id();
        $validator = Validator::make($request->all(),[
 
            'num' => ['required', 'regex:/^[a-zA-Z]{2}\d{5,6}$/'],
            'recto' => ['required'],
            'verso' => ['required'],
        ],[
            'num.regex'=>'Veuillez entrez de cet format HH74718',
        ]);
        if ($validator->fails()) {
            session()->flash('form', true);
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasfile('recto')){
            $photo1=$request->file('recto')->store('img','public');
        }else{
            $photo1=NULL;
        }
        if($request->hasfile('verso')){
            $photo=$request->file('verso')->store('img','public');
        }else{
            $photo=NULL;
        }

         Cin::create([
            'user_id' => $id,
            'num' => $request->num,
            'recto' => $photo1,
            'verso' => $photo,
        ]);

        return back()->with('succes', 'Carte d\'identité ajouter avec succés!');
    }
    public function confirmer(Cin $cin){
 
        $cin->update([
            'status'=> 'confirmer',
        ]);
    
        return redirect()->route('verification')->with( 'succes', 'C.I.N acceptée'); 
    }
    public function rejeter(Cin $cin){
 
        $cin->update([
            'status'=> 'rejeter',
        ]);
    
        return redirect()->route('verification')->with('error', 'C.I.N rejetée'); 
    }
}


