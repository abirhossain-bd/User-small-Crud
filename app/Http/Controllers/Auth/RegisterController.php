<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }


    public function register_post(Request $request){

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'created_at' =>now(),
        ]);
        return redirect('/');



// another system in comment for create user//


        // $user = new User;
        // $user->first_name = $request->first_name;
        // $user->last_name = $request->last_name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->mobile = $request->mobile;
        // $user->gender = $request->gender;
        // $user->save();
        // return redirect('/');

    }
}
