<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('welcome');
    }

    public function cekRegister(Request $req){
        $rules = [
            'username' => ["required"],
            'email' => ["required", "email"],
            'password' => ["required", "confirmed"],
            'password_confirmation' => ["required"]
        ];

        $custom = [
            "required" => "Field Harus Diisi",
            "email" => "Format email salah",
            "confirmed" => "password dan confirm password tidak sama"
        ];
        $this->validate($req, $rules, $custom);
        return view('register');
    }
}
