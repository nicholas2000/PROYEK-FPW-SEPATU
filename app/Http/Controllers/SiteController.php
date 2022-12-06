<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('homeUser');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function cekRegister(Request $req){
        $rules = [
            'name' => ["required"],
            'username' => ["required","unique:tb_user"],
            'email' => ["required", "email","unique:tb_user"],
            'password' => ["required", "confirmed"],
            'password_confirmation' => ["required"]
        ];
        $custom = [
            "required" => "Field Harus Diisi",
            "email" => "Format email salah",
            "confirmed" => "password dan confirm password tidak sama"
        ];
        $this->validate($req, $rules, $custom);
        $user = new User([
            'name' => $req->name,
            'username' => $req->username,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);
        $user->save();

        return view('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
