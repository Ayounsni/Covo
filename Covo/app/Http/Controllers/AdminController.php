<?php

namespace App\Http\Controllers;

use App\Models\Cin;
use App\Models\User;
use App\Models\Trajet;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('Admin/stat');
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
