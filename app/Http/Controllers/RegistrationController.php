<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function registration(){
        return view('Pages.Registration');
    }

    public function registrationSubmit(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:35|regex:/^[(A-Za-z)\s]+$/',
                'dob'=>'required',
                'address'=>'required|min:5|max:100',
                'phone'=>'required|min:11|max:15|unique:Registration|regex:/^[(0-9)\-\+]+$/',
                'email'=>'required|unique:Registration|regex:/^[(a-z)\(0-9)\.\-\@]+$/',
                'username'=>'required|min:5|max:10|unique:Registration|regex:/^[(a-z)(0-9)]+$/',
                'password'=>'required|min:5|max:8|regex:/^[(0-9)(a-z)]+$/',
                'confirmpassword'=>'required|same:password'

            ]
        );

        $var = new Registration;
        $var->name = $request->name;
        $var->dob = $request->dob;
        $var->address = $request->address;
        $var->phone = $request->phone;
        $var->email = $request->email;
        $var->username = $request->username;
        $var->password = $request->confirmpassword;
        $var->save();

        
    
        $user = Registration::orderBy('id','desc')->first();
        
        return view('Pages.User')
        ->with('user',$user);
        
    }

}
