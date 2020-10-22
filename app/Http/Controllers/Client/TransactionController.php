<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionCollection;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Str;

class TransactionController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('client.transaction.index', compact('user'));
    }

    public function topup(){
        $user = Auth::user();
        return view('client.transaction.topup', compact('user'));
    }

    public function withdraw(){
        $user = Auth::user();
        return view('client.transaction.withdraw', compact('user'));
    }

    public function _index(){
        $transactions = Transaction::where('user_id', Auth::id())->get();
        $transactions_res = new TransactionCollection($transactions);
        return response()->json($transactions_res, 200);
    }

    public function _topup(Request $request){
        if(!$request->image){
            return back()->with('error', 'Harap masukkan bukti pembayaran.');
        }
        $image_name = Str::random(32).'.jpg';
        $request->image->move('image/transaction/', $image_name);

        $transaction = new Transaction;
        $transaction->user_id = Auth::id();
        $transaction->type = 'in';
        $transaction->bank_type = $request->bank_type;
        $transaction->bank_acc = $request->bank_acc;
        $transaction->nominal = $request->nominal;
        $transaction->image = '/image/transaction/'.$image_name;
        $transaction->status_id = 1;
        $transaction->created_at = Carbon::now();
        $transaction->save();
        return response()->json(['status' => 'success'], 200);
    }

    public function _withdraw(Request $request){
        $transaction = new Transaction;
        $transaction->user_id = Auth::id();
        $transaction->type = 'out';
        $transaction->bank_type = $request->bank_type;
        $transaction->bank_acc = $request->bank_acc;
        $transaction->nominal = (-1)*(int)$request->nominal;
        $transaction->created_at = Carbon::now();
        $transaction->save();
        return response()->json(['status' => 'success'], 200);
    }

    public function _saldo(){
        $saldo = Transaction::where(['user_id' => Auth::id(), 'status_id' => 2])->sum('nominal');
        return $saldo;
    }
}