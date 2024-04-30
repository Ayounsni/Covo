<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VilleController extends Controller
{
    public function index(){
        $villes = Ville::orderBy('created_at', 'desc')->paginate(5);
        return view('Admin/ville',compact('villes'));
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'nom'=> 'required|min:2|max:20|unique:villes,nom', 
        ]);
    
        if ($validator->fails()) {
            session()->flash('forme', true);
            return back()->withErrors($validator)->withInput();
        }
        Ville::create([
            'nom'=>$request->nom,
        ]);
        return redirect()->Route('ville')->with('succes', 'Ville ajouter avec succés'); 
    }
    public function update(Request $request, Ville $ville){
        $request->validate([
            'nom'=> 'required|min:2|max:20|unique:villes,nom', 
        ]);
        $ville->update([
            'nom'=>$request->nom,
        ]);
    
        return redirect()->route('ville')->with('succes', 'Ville mis à jour avec succès'); 
    }
    public function destroy(Ville $ville){
        $ville->delete();
        return redirect()->route('ville')->with('error', 'Ville supprimer avec succès'); 
    }
}
