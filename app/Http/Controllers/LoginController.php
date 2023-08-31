<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginProcess(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }

        return \redirect('login');
    }
    public function register(){
     return view('register');
    }
    public function registerUser(request $request){
        $this->validate($request,[
            'name' =>'required|min:1|max:100',
            'email'=>'required|min:1|max:100',
            'password'=>'required|min:1|max:100'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return view('/register');
    }
    public function logout(){
        Auth::logout();
        return \redirect('login');
    }
}
