<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        return view('Pages.Contact');
    }

    public function contactSubmit(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:35|regex:/^[(A-Za-z)\s]+$/',
                'phone'=>'required|min:11|max:15|regex:/^[(0-9)\-\+]+$/',
                'email'=>'required|regex:/^[(a-z)\(0-9)\.\-\@]+$/'
            ]
        );
        $var = new Contact;
        $var->name = $request->name;
        $var->phone = $request->phone;
        $var->email = $request->email;
        $var->message = $request->message;
        $var->save();

        $contact = Contact::orderBy('id','desc')->first();
        return view('Pages.ContactSubmit')->with('contact',$contact);
    }
}
