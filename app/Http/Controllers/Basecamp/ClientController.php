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
        return view('basecamp/client/ktp/index', ['user' => Auth::user()]);
    }

    public function ktp_detail(){
        return view('basecamp/client/ktp/detail', ['user' => Auth::user()]);
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
