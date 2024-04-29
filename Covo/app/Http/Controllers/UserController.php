<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Voiture;
use App\Models\Evaluation;
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
    public function index(){
        $id=auth()->id();
            $user=User::find($id);
            $commentaires=Evaluation::where('userR_id', $id)->orderBy('created_at', 'desc')->paginate(4);
            $total=Evaluation::where('userR_id',$id)->count();
            $moyenne = Evaluation::where('userR_id', $id)->avg('note');
        return view('User/profile',compact('user','commentaires','moyenne','total'));
    }
    public function show(User $user){
        if(auth()->id() == $user->id){
            return redirect()->route('profile'); 
        }
        $id = $user->id;
            $user=User::find($id);
            $commentaires=Evaluation::where('userR_id', $id)->orderBy('created_at', 'desc')->paginate(4);
            $total=Evaluation::where('userR_id',$id)->count();
            $moyenne = Evaluation::where('userR_id', $id)->avg('note');

        return view('User/consultation',compact('user','commentaires','moyenne','total'));
    }
}
