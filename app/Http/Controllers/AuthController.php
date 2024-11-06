<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        //Validate
            $request->validate([
                'name' => ['required', 'max:255'],
                'email' => ['required','max:255', 'email'],
                'password' => ['required', 'min:6', 'confirmed']

            ]);

            dd('ok');


         //Register user


         //Login


         //Redirect
    }
}
