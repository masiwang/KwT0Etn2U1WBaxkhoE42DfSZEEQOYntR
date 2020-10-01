<?php

namespace App\Http\Controllers\Basecamp\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class IndexController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('basecamp.market.index', ['user' => $user]);
    }
}
