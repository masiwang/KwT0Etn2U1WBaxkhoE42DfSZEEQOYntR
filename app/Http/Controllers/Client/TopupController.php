<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Topup;

class TopupController extends Controller
{
    public function index(){
        return view('client.dashboard.profile.topup', ['user' => Auth::user()]);
    }

    public function _new(Request $request){
        $topup = new Topup;
        $topup->user_id = Auth::id();
        $topup->nominal = $request->nominal;
        $topup->bank_type = $request->bank_type;
        $topup->bank_acc = $request->bank_acc;
        $topup->pay_image = $request->pay_image;
        $topup->pay_at = Carbon::now();
        $topup->status = 0;
        $topup->save();
        return response()->json($data, 200, $headers);
    }
}
