<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function store(Request $request, Trajet $trajet){
        $id=auth()->id();
        $place = $request->place;
        $validator = Validator::make($request->all(),[
            'place' => ['required', 'numeric', 'min:1'],
        ]);
        if ($validator->fails()) {
            session()->flash('forme', true);
            return back()->withErrors($validator)->withInput();
        }
        if($trajet->place - $place >= 0){
            Reservation::create([
                'user_id' => $id,
                'trajet_id' => $trajet->id,
                'place' => $place,
            ]);
            return redirect()->route('passager')->with('succes','Réservation effectuer avec succes');
        }else{
            return redirect()->route('convoiturage')->with('error','Désolé, il n\'y a pas assez de places disponibles pour ce trajet.');
        }

    }
    public function passager(){
        $id=auth()->id();
        $reservations = Reservation::where('user_id',$id)->orderBy('created_at','desc')->paginate(4);

        return view('User/reservationPassager', compact('reservations'));
    }
    public function conducteur(){
        $id=auth()->id();
        $reservations = $reservations = Reservation::join('trajets', 'reservations.trajet_id', '=', 'trajets.id')
        ->join('users as oui', 'trajets.user_id', '=', 'oui.id')
        ->join('users as non', 'reservations.user_id', '=', 'non.id')
        ->where('oui.id', $id)
        ->select('reservations.*', 'trajets.*','oui.*','non.*','trajets.place as nombre','reservations.place as places','reservations.id as ide','non.nom as last','non.prenom as first','non.photo as foto','reservations.status as statuss')
        ->orderBy('reservations.created_at', 'desc')
        ->paginate(4);
    
        return view('User/reservationConducteur', compact('reservations'));
    }
    public function rejeter(Reservation $reservation){
 
        $reservation->update([
            'status'=> 'rejeter',
        ]);
    
        return redirect()->route('conducteur')->with('error', 'Réservation rejetée'); 
    }
    public function confirmer(Reservation $reservation){
        $placeR=$reservation->place;
        $placeT=$reservation->trajet->place;
 
        if ($placeT - $placeR >= 0) {    
            $reservation->trajet->decrement('place', $placeR);
            $reservation->update([
                'status'=> 'confirmer',
            ]);
            return redirect()->Route('conducteur')->with('succes', 'La réservation a été confirmé avec succès'); 
        }else{
            $reservation->update([
                'status'=> 'rejeter',
            ]);
            return redirect()->Route('conducteur')->with('error', 'il n\'y a plus de places disponibles pour ce trajet.');
        }

    }
}
