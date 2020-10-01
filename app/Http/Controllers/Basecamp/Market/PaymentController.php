<?php

namespace App\Http\Controllers\Basecamp\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarketCheckout;
use Auth;
use Hash;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function index(){
        $payments = MarketCheckout::where('status_id', 2)->get();
        $user = Auth::user();
        return view('basecamp.market.payment.index', ['user' => $user, 'payments' => $payments]);
    }

    public function detail($invoice){
        $payment = MarketCheckout::where('invoice', $invoice)->first();
        $user = Auth::user();
        return view('basecamp.market.payment.detail', ['user' => $user, 'payment' => $payment]);
    }

    public function confirm(Request $request){
        $payment = MarketCheckout::where('invoice', $request->invoice)->first();
        $user = Auth::user();

        if( Hash::check($request->password, $user->password) ){
            $payment->status_id = 3;
            $payment->pay_confirmed_by = $user->id;
            $payment->pay_confirmed_at = Carbon::now();
            $payment->save();
            return redirect('/basecamp/market/payment');
        }

        return back()->with('error', 'Password salah bung!');
    }
}
