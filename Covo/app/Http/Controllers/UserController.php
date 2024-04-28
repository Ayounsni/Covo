<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function update(Request $request, User $user){

        $validator = Validator::make($request->all(), [
            'photo' => 'required|min:3',
        ]);
    
        if ($validator->fails()) {
            session()->flash('form_submission_failed', true);
            return back()->withErrors($validator)->withInput();
        }
        
        if($request->hasfile('photo')){
            $photo=$request->file('photo')->store('img','public');
        }else{
            $photo=NULL;
        }

        $user->update([
            'photo'=> $photo,
        ]);
        return back()->with('succes', 'photo de profile changé avec succés!');
    }
    public function show(){
        $id=auth()->id();
            $user=User::find($id);
            // $voiture=Voiture::where('user_id',$id)->get();
        return view('User/profile',compact('user'));
    }
}
