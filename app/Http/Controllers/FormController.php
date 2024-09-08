<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(Request $request){

        $user = new User();

        // Validation code
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'message' => 'required|min:5',
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->route('home')->withInput()->withErrors($validator);
        }

        // Mail sending code
        
        $mailData = [
            'subject' => 'Email Form',
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('admin@gmail.com')->send(new FormMail($mailData));

        // this code save data into DB
        $user->name = $request->name;
        $user->email = $request->email;
        $user->message = $request->message;
        $user->save();

        return redirect()->route('home')->with('success','Your email has been sent. We will get back to you soon.');


    }
}
