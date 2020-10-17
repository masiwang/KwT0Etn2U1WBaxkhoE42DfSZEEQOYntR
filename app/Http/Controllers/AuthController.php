<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use Session;
use Str;
use Mail;

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }

    public function login_do(Request $request){
        $credential = $request->only('email', 'password');

        if( Auth::attempt($credential) ){
            $user = Auth::user();
            if( $user->role == 'admin' ){
                return redirect('/basecamp');
            }
            if( $user->profile_is_complete ){
                return redirect('/getting-started');
            }
            return redirect('/');
        }
        return back()->withError('Email atau password salah.')->withInput();
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
        $email_token = rand (1000,9999);
        $user = new User;
        $user->email = $request->email;
        $user->email_token = $email_token;
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(100);
        $user->created_at = Carbon::now();
        $user->save();
        // TODO: kirim verifikasi email
        Mail::send('template.email.verification', ['token' => $user->email_token], function ($m) use ($request) {
            $m->from('no-reply@makarya.in', 'Makarya - PT. Inspira Karya Teknologi Nusantara');
            $m->to($request->email)->subject('Email verification @makarya.in');
        });

        // Login
        $credential = $request->only('email', 'password');

        if( Auth::attempt($credential) ){
            return redirect('/getting-started');
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
