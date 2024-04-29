<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use App\Models\Trajet;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    public function create(){
         $villes=Ville::all();
        return view('User/addTrajet',compact('villes'));
    }
    public function store(Request $request){
        $id=auth()->id();

        $request->validate([
            'villeD'=> 'required',
            'villeA'=> 'required',
            'date'=> 'required|date|after:now',
            'heure'=> 'required',
            'prix'=> 'required|numeric|min:10',
            'place'=>'required|numeric|min:1',
        
        ],[
            'prix.min'=>'Le prix doit être d\'au moins 10 MAD',
            'place.min'=>'Le minimun c\'est une place (1)',
            ]);


        Trajet::create([
            'user_id'=>$id,
            'villeD_id'=> $request->villeD,
            'villeA_id'=> $request->villeA,
            'date'=> $request->date,
            'heure'=> $request->heure,
            'prix'=> $request->prix,
            'place'=> $request->place,
        ]);
        return redirect()->Route('addTrajet')->with('success', 'Evénement ajouter avec succés'); 
    }
}
