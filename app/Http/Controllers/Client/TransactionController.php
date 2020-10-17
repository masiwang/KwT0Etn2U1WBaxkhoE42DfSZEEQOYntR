<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionCollection;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Auth;

class TransactionController extends Controller
{
    public function index(){
        return view('client.dashboard.profile.transaction', ['user' => Auth::user()]);
    }

    public function _get(){
        $transactions = Transaction::where('user_id', Auth::id())->get();
        $transactions_res = new TransactionCollection($transactions);
        return response()->json($transactions_res, 200);
    }
}
