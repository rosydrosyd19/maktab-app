<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'name' => 'required||unique:users|min:5|max:20',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'repassword' => 'required_with:password|same:password',
            'terms'=>'required'
        ]);

        User::create($validate_data);
        // notification
        alert()->success('Congrats', 'You\'ve Successfully Registered');

        return redirect('/login');


    }

}
