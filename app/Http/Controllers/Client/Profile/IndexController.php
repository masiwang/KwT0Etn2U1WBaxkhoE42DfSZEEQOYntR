<?php

namespace App\Http\Controllers\Client\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class IndexController extends Controller
{
    public function profile(){
        $user = Auth::user();
        $saldo = $this->saldo();
        return view('client.dashboard.profile.index', ['user' => $user, 'saldo' => $saldo]);
    }

    public function profile_save(Request $request){
        $user = User::find(Auth::id());
        $user->name = $request->name;
        if($request->birthday){
            $user->birthday = $request->birthday;
        }
        if($request->gender){
            $user->gender = $request->gender;
        }
        $user->phone = $request->phone;
        $user->ktp = $request->ktp;
        $user->save();
        return redirect('profile');
    }
}