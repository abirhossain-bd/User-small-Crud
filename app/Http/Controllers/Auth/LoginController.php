<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function signin(Request $request){
        User::where('email',$request->email)->first();

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->route('user.list');
        }else{
            dd('Credential does not match!');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }


}
