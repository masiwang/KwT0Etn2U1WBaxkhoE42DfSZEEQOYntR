<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use Str;

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }

    public function login_do(Request $request){
        $credential = $request->only('email', 'password');

        if( Auth::attempt($credential) ){
            $user = Auth::user();
            if( $user->profile_is_complete ){
                return redirect('/getting-started');
            }
            return redirect('/');
        }
    }

    public function register(){
        return view('auth/register');
    }

    public function register_do(Request $request){
        // TODO: validate
        if(!($request->password == $request->password_confirm)){
            return back()->withErrors(['password' => 'Periksa kembali password Anda.']);
        }
        // write data
        $email_token = Str::random(64);
        $user = new User;
        $user->email = $request->email;
        $user->email_token = $email_token;
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(100);
        $user->created_at = Carbon::now();
        $user->save();
        // TODO: kirim verifikasi email
        // Mail::send('template.email-verification', ['token' => $user->email_verification_token], function ($m) use ($user) {
        //     $m->from('no-reply@makarya.in', 'Makarya - PT. Inspira Karya Teknologin Nusantara');
        //     $m->to($user->email)->subject('Email verification @makarya.in');
        // });

        // Login
        $credential = $request->only('email', 'password');

        if( Auth::attempt($credential) ){
            return redirect('/getting-started');
        }
    }

    public function getting_started(){
        $getting_started_level = Auth::user()->getting_started_level;
        if( $getting_started_level == 0 ){
            $user = Auth::user();
            return view('client.getting_started.index', ['user' => $user]);
        }
        if( $getting_started_level == 1 ){
            $user = Auth::user();
            return view('client.getting_started.address', ['user' => $user]);
        }
        if( $getting_started_level == 2 ){
            $user = Auth::user();
            return view('client.getting_started.document', ['user' => $user]);
        }
        if( $getting_started_level == 3 ){
            $user = Auth::user();
            return view('client.getting_started.agreement', ['user' => $user]);
        }
    }

    public function register_success(){
        // $user = Auth::user();
        $user = User::first();
        return view('auth.register_success', ['user' => $user]);
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
