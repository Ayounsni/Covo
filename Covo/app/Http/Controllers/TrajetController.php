<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use App\Models\Trajet;
use Illuminate\Http\Request;

class TrajetController extends Controller
{    
    public function index(Request $request){

        $villeD = $request->villeD;
        $villeA = $request->villeA;
        $date = $request->date;
        $place = $request->place;

        if($villeD && $villeA && $place && $date ){
            $trajets = Trajet::join('villes as villeD', 'trajets.villeD_id', '=', 'villeD.id')
            ->join('villes as villeA', 'trajets.villeA_id', '=', 'villeA.id')
            ->where('villeD.nom', 'like', '%' . $villeD . '%')
            ->where('villeA.nom', 'like', '%' . $villeA . '%')
            ->where('date', 'like', '%' . $date . '%')
            ->where('place', 'like', '%' . $place . '%')->paginate(100);
            return view('User/convoiturage',compact('trajets'));
        }elseif( $villeD && $villeA && $date){
            $trajets = Trajet::join('villes as villeD', 'trajets.villeD_id', '=', 'villeD.id')
            ->join('villes as villeA', 'trajets.villeA_id', '=', 'villeA.id')
            ->where('villeD.nom', 'like', '%' . $villeD . '%')
            ->where('villeA.nom', 'like', '%' . $villeA . '%')
            ->where('date', 'like', '%' . $date . '%')->paginate(100);
            return view('User/convoiturage',compact('trajets'));
        }elseif( $villeD && $villeA){
            $trajets = Trajet::join('villes as villeD', 'trajets.villeD_id', '=', 'villeD.id')
            ->join('villes as villeA', 'trajets.villeA_id', '=', 'villeA.id')
            ->where('villeD.nom', 'like', '%' . $villeD . '%')
            ->where('villeA.nom', 'like', '%' . $villeA . '%')->paginate(100);
            return view('User/convoiturage',compact('trajets'));
        }
        else{

            $trajets=Trajet::where('status', 'confirmer')->orderBy('created_at', 'desc')->paginate(4);

            return view('User/convoiturage',compact('trajets'));

        }
    }

    public function show(){
        $id=auth()->id();
        $trajets=Trajet::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(4);

       return view('User/mesTrajet',compact('trajets'));
   }
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
        return redirect()->Route('trajet')->with('succes', 'Trajet ajouter avec succés'); 
    }
    public function edit(Trajet $trajet){
        $villes=Ville::all();
         
        return view('User/editTrajet',compact('villes','trajet'));
    }
    public function update(Request $request, Trajet $trajet){
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
    
        $trajet->update([
            'villeD_id'=> $request->villeD,
            'villeA_id'=> $request->villeA,
            'date'=> $request->date,
            'heure'=> $request->heure,
            'prix'=> $request->prix,
            'place'=> $request->place,
        ]);
    
        return redirect()->route('trajet')->with('succes', 'Trajet mis à jour avec succès'); 
    }
    public function destroy(Trajet $trajet){
        $trajet->delete();
        return redirect()->route('trajet')->with('error', 'Trajet supprimer avec succès'); 
    }

    public function searchVilles(Request $request)
    {
        $query = $request->input('query');

        $villes = Ville::where('nom', 'like', "%$query%")->get();
    
        return response()->json($villes);
    }
    public function confirmer(Trajet $trajet){
 
        $trajet->update([
            'status'=> 'confirmer',
        ]);
    
        return redirect()->route('route')->with( 'succes', 'Trajet acceptée'); 
    }
    public function rejeter(Trajet $trajet){
 
        $trajet->update([
            'status'=> 'rejeter',
        ]);
    
        return redirect()->route('route')->with('error', 'Trajet rejetée'); 
    }
}
