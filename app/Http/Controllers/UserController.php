<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        return redirect('/');
    }
    public function login(Request $request){
       $validate = $request->validate([
        'email'=>'required',
        'password'=>'required'
       ]);
       if(auth()->attempt(['name'=>$validate['email'],'password' => $validate['password']])){
        $request->session()->regenerate();
       }
       return redirect('/utilisateur');
    }
}
