<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\singup;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class projectcontroller extends Controller
{


    public function signupview()
    {
        return view('signup');
    }

    public function signup(Request $request)
    { 
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique:users', 
        'phonenumber' => 'required',
        'gender' => 'required',
        'password' => 'required',
        'cpassword' => 'required|same:password',
    ]);

    if ($validator->fails()) {
        return redirect('signup')
            ->withErrors($validator)
            ->withInput();
    }
        $singup = new User();
        $singup->name = $request->name;
        $singup->email = $request->email;
        $singup->mobile = $request->phonenumber;
        $singup->gender = $request->gender;
        $singup->password = Hash::make($request->password);
        $singup->save();


        return redirect('login');
    }
    public function loginview()
    {

        return view('login');
    }
    public function login(request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = User::find(Auth::user()->id);
            return redirect('/');
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors(['email' => 'Invalid Email or Password']);
        }
    }

}
