<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request, Trajet $trajet){
        $place = $request->place;
        if($trajet->place - $place >= 0){
            Reservation::create([
                ''

            ]);
        }

    }
}
