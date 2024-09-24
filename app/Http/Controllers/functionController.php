<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class functionController extends Controller
{
    public function register_user(Request $request){
        // dd($request->all());
        $insert = $request->validate([
            "name" => "required|unique:users",
            "password" => "required|min:3|confirmed",
        ]);

        $insertData = User::create($insert);
            if ($insertData) {
                return redirect()->route("login")->with("success","Register Successfully");
            }else{
                return back()->withErrors("error","Login Failed");
            }
    }

    public function login_user(Request $request){
        $login = $request->validate([
            "name" => "required|max:50",
            "password" => "required|min:3",
        ]);
        $loginData = Auth::attempt($login);
        if ($loginData) {
            $request->session()->regenerate();
            return redirect()->route("index")->with("Success","Login Successfully");
        }else{
            return back()->with("message","Login Failed");
        }
    }
}
