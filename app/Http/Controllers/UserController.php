<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(){
        if(!Auth::user()){
            return redirect('/');
        }
        $users = User::all();
        return view('list',compact('users'));
    }

    public function create(){
        if(!Auth::user()){
            return redirect('/');
        }
        return view('create');
    }


    public function store(Request $request){
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'created_at' =>now(),
        ]);
        return redirect('user/list');
    }



    public function edit($id){
        if(!Auth::user()){
            return redirect('/');
        }
        $user = User::find($id);
        return view('edit',compact('user'));
    }


    public function update(Request $request,$id){
        User::find($id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'updated_at' =>now(),
        ]);
        return redirect('user/list');
    }

    public function delete($id){
        if(!Auth::user()){
            return redirect('/');
        }
        User::find($id)->delete();
        return redirect('user/list');
    }

    public function show($id){
        $show = User::where('id',$id)->get();
        dd($show->toArray());
    }
}




