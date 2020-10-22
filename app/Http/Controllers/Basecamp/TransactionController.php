<?php

namespace App\Http\Controllers\Basecamp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Auth;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('basecamp.client.transaction.index', compact('user'));
    }

    public function detail(){
        $user = Auth::user();
        return view('basecamp.client.transaction.detail', compact('user'));
    }

    public function topup(){
        $user = Auth::user();
        return view('basecamp.transaction.topup', compact('user'));
    }

    public function topup_detail(){
        $user = Auth::user();
        return view('basecamp.transaction.topup_detail', compact('user'));
    }

    public function _index(Request $erquest){
        $perpage = 6;
        $transactions = Transaction::skip($request->page*$perpage)->take($perpage)->get();
        $user = Auth::user();
        return response()->json(compact(['transactions', 'user']), 200);
    }

    public function _get(Request $request){
        $transaction = Transaction::where('status', 1)->skip($request->page*$perpage)->take($perpage)->get();
        $user = Auth::user();
        return respinse()->json(compact(['transaction', 'user']), 200);
    }

    public function _topup(){
        $topups = Transaction::where(['status_id' => 1, 'type' => 'in'])->get();
        $user = Auth::user();
        return response()->json(compact(['topups', 'user']), 200);
    }

    public function _topup_detail($id){
        $topup = Transaction::find($id);
        $user = Auth::user();
        return response()->json(compact(['topup', 'user']), 200);
    }

    public function _topup_confirm($id){
        $topup = Transaction::find($id);
        $topup->approved_by = Auth::id();
        $topup->approved_at = Carbon::now();
        $topup->status_id = 2;
        $topup->save();
        $user = Auth::user();
        return response()->json(compact(['topup', 'user']), 200);
    }
}