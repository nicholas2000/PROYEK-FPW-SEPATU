<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function input(){
        return view('welcome');
    }

    public function cekLogin(Request $request){
        $username = $request->username;
        $password = $request->password;
        $this->validate(
            $request,
            [
                'username' => ['required'],
                'password' => ['required'],
            ],
            [
                "required" => "Field Harus Diisi",
            ],
            [
                'uname' => 'Username',
                'upass' => 'Password',
            ],
        );
        if($username == "admin" && $password == "admin"){
            return redirect("/admin");
        }
        else{
            $check = DB::table("user")->where('username', $username)->count();
            if($check){
                $tempUser = DB::table("user")->where('username', $username)->get();
                if($tempUser[0]->Password == $password){
                    return redirect("/home");
                }
                else{
                    return view('login', ['error' => 'wrong password']);
                }
            }
            else{
                return view('login', ['error' => 'username could not be found']);
            }
        }
    }

    public function cekRegister(Request $req){
        $rules = [
            'username' => ["required"],
            'email' => ["required", "email"],
            'password' => ["required", "confirmed"],
            'password_confirmation' => ["required"]
        ];

        $custom = [
            "required" => "Please fill in all the fields",
            "email" => "Email Format is not valid",
            "confirmed" => "Password and Confirm Password doesn't match"
        ];
        $this->validate($req, $rules, $custom);
        return view('register');
    }
}
