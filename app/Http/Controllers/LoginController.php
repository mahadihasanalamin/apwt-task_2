<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class LoginController extends Controller
{
    public function login(){
        return view('Pages.Login');
    }

    public function loginAction(Request $request){
        $this->validate(
            $request,
            [
                'username'=>'required|min:5|max:10|regex:/^[(a-z)(0-9)]+$/',
                'password'=>'required|min:5|max:8|regex:/^[(0-9)(a-z)]+$/'
            ]
        );

        $user = Registration::where('username',$request->username)->first();
        if($user){
            if($request->password === $user->password){
                return "Successfully Logged in";
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
        }
        else{
            return back()->with('fail','username does not exist');
        }
       
    }
}
