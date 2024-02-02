<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userRegister(Request $request){
        $validation =  $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $validation['password'] = bcrypt($validation['password']);
        $user = User::create($validation);
        auth()->login($user);
        
        return redirect('/utilisateur') ;

    }
    public function logout(){
        auth()->logout();
        return redirect('/welcome');
    }
    public function login(Request $request){
       $validate = $request->validate([
        'email'=>'required',
        'password'=>'required'
       ]);
       if(auth()->attempt(['email'=>$validate['email'],'password' => $validate['password']])){
        $userId = Auth::id();
       }
       return redirect()->route('utilisateur', ['userId' => $userId]);
    }

    
}
