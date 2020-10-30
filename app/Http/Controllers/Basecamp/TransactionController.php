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
        $transactions = Transaction::where('type','in')->whereNull('approved_at')->get();
        return view('basecamp.transaction.topup', compact('user','transactions'));
    }

    public function topup_detail($id){
        $user = Auth::user();
        $topup=Transaction::find($id);
        // return dd($topup);
        return view('basecamp.transaction.topup_detail', compact('user','topup'));
    }
    
    public function topup_confirm($id){
        $user=Auth::user();
        $topup=Transaction::find($id);
        $topup->status_id=2;
        $topup->approved_by=$user->id;
        $topup->approved_at=Carbon::now();
        $topup->save();
        return redirect('/basecamp/transaction/topup'); 
    }

    public function withdraw(){
        $user = Auth::user();
        $transactions = Transaction::where('type','out')->whereNull('approved_at')->get();
        return view('basecamp.transaction.withdraw', compact('user','transactions'));
    }

    public function withdraw_detail($id){
        $user = Auth::user();
        $withdraw=Transaction::find($id);
        // return dd($topup);
        return view('basecamp.transaction.withdraw_detail', compact('user','withdraw'));
    }

    public function withdraw_confirm($id){
        $user=Auth::user();
        $withdraw=Transaction::find($id);
        $withdraw->status_id=2;
        $withdraw->approved_by=$user->id;
        $withdraw->approved_at=Carbon::now();
        $withdraw->save();
        return redirect('/basecamp/transaction/withdraw'); 
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