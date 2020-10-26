<?php

namespace App\Http\Controllers\Basecamp;

use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResources;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Hash;
use Response;

class ClientController extends Controller
{
    public function ktp(){
        $user=Auth::user();
        $clients=User::whereNotNull('ktp_image')->whereNull('ktp_verified_at')->whereNotNull('ktp')->get(); 
        return view('basecamp/client/ktp/index', compact(['user','clients']));
    }

    public function ktp_detail($ktp){
        $user=Auth::user();
        $client=User::where('ktp',$ktp)->first();
        return view('basecamp/client/ktp/detail', compact(['user','client']));
    }

    public function ktp_verifikasi(Request $request,$ktp){
        $user=Auth::user();
        if(Hash::check($request->password,$user->password)){
            $client=User::where('ktp',$ktp)->first();
            $client->ktp_verified_at=Carbon::now();
            $client->ktp_verified_by=$user->id;
            $client->save();
            return redirect('/basecamp/client/ktp');
        }
        else{
            return response()->json(['status'=>'Bad request'], 400); 
        }
    }

    public function _ktp(){
        $users = User::whereNull('ktp_verified_at')->get();
        $users_res = new UserCollection($users);
        return response()->json($users_res, 200);
    }

    public function _ktp_detail($ktp){
        $user = User::where('ktp', $ktp)->first();
        $user_res = new UserResources($user);
        return response()->json($user_res, 200);
    }

    public function _ktp_verify($ktp, Request $request){
        if(!Hash::check($request->password, Auth::user()->password)){
            return Response::make(['status' => 'Unauthorized'], 401);
        }
        $user = User::where('ktp', $ktp)->first();
        $user->ktp_verified_at = Carbon::now();
        $user->ktp_verified_by = Auth::id();
        $user->save();
        return response()->json(['status' => 'success'], 200);
    }
}
