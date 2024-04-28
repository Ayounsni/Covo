<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VoitureController extends Controller
{
    public function store(Request $request){
        $id=auth()->id();
        $validator = Validator::make($request->all(),[
 
            'nom' => ['required', 'string', 'max:255','min:3'],
            'matricule' => ['required', 'regex:/^\d{2}-\d{1,7}$/'],
            'model' => ['required', 'digits:4'],
            'image' => ['required'],
        ],[
            'matricule.regex'=>'Veuillez entrez de cet format XX-XXXXXX',
        ]);
        if ($validator->fails()) {
            session()->flash('form_submission', true);
            return back()->withErrors($validator)->withInput();
        }

        if($request->hasfile('image')){
            $photo=$request->file('image')->store('img','public');
        }else{
            $photo=NULL;
        }

         Voiture::create([
            'user_id' => $id,
            'nom' => $request->nom,
            'matricule' => $request->matricule,
            'model' => $request->model,
            'image' => $photo,
        ]);

        return back()->with('succes', 'Voiture ajouter avec succés!');
    }
}
