<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class projectcontroller extends Controller
{
    public function signup(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phonenumber' => 'required|digits:10|numeric',
            'gender' => 'required|in:male,female,other',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->route('signup')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }



        return view('signup');
    }
    public function login(){

        return view ('login');
    }
}
