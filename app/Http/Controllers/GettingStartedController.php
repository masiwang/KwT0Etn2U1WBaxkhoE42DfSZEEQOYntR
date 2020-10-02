<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\Kodepos;
use Carbon\Carbon;
use Str;

class GettingStartedController extends Controller
{
    public function getting_started(){
        $getting_started_level = Auth::user()->getting_started_level;
        if( $getting_started_level == 0 ){
            $user = Auth::user();
            return view('client.getting_started.email', ['user' => $user]);
        }
        if( $getting_started_level == 1 ){
            $user = Auth::user();
            return view('client.getting_started.profile', ['user' => $user]);
        }
        if( $getting_started_level == 2 ){
            $user = Auth::user();
            return view('client.getting_started.address', ['user' => $user]);
        }
        if( $getting_started_level == 3 ){
            $user = Auth::user();
            return view('client.getting_started.document', ['user' => $user]);
        }
        if( $getting_started_level == 4 ){
            $user = Auth::user();
            return view('client.getting_started.agreement', ['user' => $user]);
        }
    }

    public function getting_started_save(Request $request){
        $user = Auth::user();
        $getting_started_level = $user->getting_started_level;
        if( $getting_started_level == 0 ){
            $user = User::find(Auth::id());
            if( $user->email_token == $request->email_token ){
                $user->email_verified_at = Carbon::now();
                $user->getting_started_level = 1;
                $user->save();
            }
            return redirect('/getting-started');
        }
        if( $getting_started_level == 1 ){
            $user = User::find(Auth::id());
            $user->name = $request->name;
            $user->birthday = $request->birthday;
            $user->gender = $request->gender;
            $user->phone = $request->phone;
            $user->job = $request->job;
            $user->getting_started_level = 2;
            $user->save();
            return redirect('/getting-started');
        }
        if( $getting_started_level == 2 ){
            $user = User::find(Auth::id());
            $user->getting_started_level = 3;
            $user->save();
            $address = new UserAddress;
            $address->jalan = $request->jalan;
            $address->kelurahan = $request->kelurahan;
            $address->kecamatan = $request->kecamatan;
            $address->kabupaten = $request->kabupaten;
            $address->provinsi = $request->provinsi;
            $address->kodepos = $request->kodepos;
            $address->user_id = Auth::id();
            $address->is_default = 1;
            $address->created_at = Carbon::now();
            $address->save();
            return redirect('/getting-started');
        }
        if( $getting_started_level == 3 ){
            $image_name = 'ktp-'.Str::random(32).'.jpg';
            $request->file('ktp_image')->move('image/user/', $image_name);
            $user = User::find(Auth::id());
            $user->ktp = $request->no_ktp;
            $user->ktp_image = '/image/user/'.$image_name;
            $user->getting_started_level = 4;
            $user->save();            
            return redirect('/getting-started');
        }
        if( $getting_started_level == 4 ){
            $image_name = 'ttd-'.Str::random(32).'.jpg';
            $request->file('ttd')->move('image/user/', $image_name);
            $user = User::find(Auth::id());
            $user->ttd = '/image/user/'.$image_name;
            $user->getting_started_level = 5;
            $user->save();
            return redirect('/');
        }
    }
}
