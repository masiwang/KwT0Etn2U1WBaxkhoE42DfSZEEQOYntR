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
        $transactions=Transaction::where('user_id',$user->id)->get();
        // return dd($transactions);
        return view('client.transaction.index', compact('user','transactions'));
    }

    public function topup(){
        $user = Auth::user();
        return view('client.transaction.topup', compact('user'));
    }

    public function withdraw(){
        $user = Auth::user();
        return view('client.transaction.withdraw', compact('user'));
    }

    public function withdraw_save(Request $request){
        $user = Auth::user();
        $withdraw=new Transaction;
        $withdraw->user_id=$user->id;
        $withdraw->bank_type = $request->bank_type;
        $withdraw->bank_acc = $request->bank_acc;
        $withdraw->nominal = $request->nominal*(-1);
        $withdraw->status_id=1;
        $withdraw->type="out";
        $withdraw->save();
        return redirect('/transaction');
    }

    public function topup_save(Request $request){
        if(!$request->image){
            return back()->with('error', 'Harap masukkan bukti pembayaran.');
        }
        $image_name = Str::random(32).'.jpg';
        $request->image->move('image/transaction/', $image_name);
        $user = Auth::user();
        $transaction=new Transaction;
        $transaction->user_id= $user->id;
        $transaction->type='in';
        $transaction->bank_type = $request->bank_type;
        $transaction->bank_acc = $request->bank_acc;
        $transaction->nominal = $request->nominal;
        $transaction->image = '/image/transaction/'.$image_name;
        $transaction->status_id=1;
        $transaction->save();
        return redirect('/transaction');
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