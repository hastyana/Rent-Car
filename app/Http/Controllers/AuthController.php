<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login () {
        return view('/auth/login');
    }

    public function proses_login(Request $request) {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $credential=$request->only('username','password');
        if(Auth::attempt($credential)) {
            $user=Auth::user();
            if($user->level=='admin') {
                return redirect()->intended('/admin/dashboard');
            }
                else if($user->level=='user') {
                return redirect()->intended('/users/home_login');
            }
            return redirect()->intended('/auth/login');
        }
        return redirect('/login')->withInput()->withErrors(['login_gagal'=>'These credentials does not match our records']);
    }
 
    public function register() {
        return view('/auth/register');
    }
 
    public function proses_register(Request $request) { 
        $validator=Validator::make($request->all(),[
            'nama'=>'required',
            'username'=>'required|unique:users',
            'email'=>'required|email',
            'alamat'=>'required',
            'no_telp'=>'required',
            'sim'=>'required',
            'no_sim'=>'required',
            'password'=>'required'
        ]);
        if($validator->fails()) {
            return redirect('/register')->withErrors($validator)->withInput();
        }
        $request['level']='user';
        $request['password']=bcrypt($request->password);
        User::create($request->all());
        return redirect()->route('login');
    }
 
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/login');
    }
}
