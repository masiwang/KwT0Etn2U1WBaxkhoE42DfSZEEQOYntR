<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Transaction;
use Auth;
use Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function admin_only(){
        if(! Auth::user()->role == 'admin' ){
            return back();
        }
    }

    public function client_only(){
        if(! Auth::user()->role == 'client' ){
            return back();
        }
    }

    public function getSaldo(){
        $saldo = Transaction::where('user_id', Auth::id())->sum('nominal');
        return $saldo;
    }
}
