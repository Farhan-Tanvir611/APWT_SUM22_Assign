<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\public;

class PublicController extends Controller
{
    //
    function welcome(){
        return view('public.welcome');
    }
    function create(){
        return view('public.registration');
    }
    function registerAction(Request $req){
        $this->validate($req,
            [
                "name"=>"required|max:20|min:3|regex:/^[a-z ,.'-]+$/i",
                "email"=>"required|",
                "password"=>"required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}+$/i",
                "conf_password"=>"required|min:8|same:password"
            ],
            [
                "name.required"=>"Provide your name",
                "name.regex"=>"Provide valid name",
                "password.regex"=>"Password must contain upper case,lower case,number and special characters",
                "conf_password.required"=>"Confirm your password",
                "conf_password.same"=>"Confirm password and password don't match"
            ]
        );
        $publics=new publics();
        $public ->name = $req->name;
        $public ->email =$req->email;
        $public ->password =$req->password;
        $public->save();

        return redirect()->route('welcome');
    }
    function login(){
        return view('public.login');
    }
    function loginAction(Request $req){
        $this->validate($req,
        [
            "email"=>"required",
            "password"=>"required"
        ]);
        $publics= publics::where('email','=',$req->email)
        ->where('password','=',$req->password)->first();
        //return $public;
        if($publics){
            return redirect()->route('public.dashboard');
        }
        else
            return redirect()->route('public.create');
    }
    function dashboard(){
        $publics=publics::all();
        //return $public;
        return view('public.dashboard')->with('public',$public);
    }
    function details($id){
        $publics = publics::where('id',$id)->get();
        return view('public.details')->with('public',$public);
         //return "details $id $public";
    }
}
