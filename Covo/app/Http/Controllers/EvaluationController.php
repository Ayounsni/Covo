<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EvaluationController extends Controller
{
    public function store(Request $request,User $user){
        $idS=auth()->id();
        $idR= $user->id ;
        $validator = Validator::make($request->all(),[
 
            'note' => ['required'],
            'commentaire' => ['required', 'min:15','max:300'],

        ]);
        if ($validator->fails()) {
            session()->flash('form_submission', true);
            return back()->withErrors($validator)->withInput();
        }

         Evaluation::create([
            'userS_id' => $idS,
            'userR_id' => $idR,
            'note' => $request->note,
            'commentaire' => $request->commentaire,
        ]);

        return back()->with('succes', 'Evaluation ajouter avec succés!');
    }
}
