<?php

namespace App\Http\Controllers;

use App\Models\Cin;
use App\Models\User;
use App\Models\Trajet;
use App\Models\Evaluation;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $user=User::where('role','user')->count();
        $trajet=Trajet::where('status','confirmer')->count();
        $reservation=Reservation::where('status','confirmer')->count();
        $evaluation=Evaluation::count();
        $utilisateurs = User::select('users.id', 'users.nom as nom','users.prenom as prenom','users.photo as photo', DB::raw('COUNT(trajets.id) as nombre_trajets'))
             ->join('trajets', 'users.id', '=', 'trajets.user_id')
             ->where('trajets.status', 'confirmer')
             ->groupBy('users.id', 'users.nom', 'users.prenom', 'users.photo')
             ->orderByDesc('nombre_trajets')
             ->limit(3)
             ->get();
        return view('Admin/stat', compact('user','trajet','reservation','evaluation','utilisateurs'));
    }
    public function user(){
        $users=User::where('role','user')->paginate(4);
        return view('Admin/user', compact('users'));
    }
    public function cin(){
        $cins=Cin::OrderBy('created_at','desc')->paginate(4);
        return view('Admin/verification', compact('cins'));
    }
    public function route(){
        $trajets=Trajet::OrderBy('created_at','asc')->paginate(4);
        return view('Admin/trajet', compact('trajets'));
    }
}
