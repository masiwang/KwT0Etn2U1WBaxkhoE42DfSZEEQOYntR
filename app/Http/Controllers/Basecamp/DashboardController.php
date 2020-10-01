<?php

namespace App\Http\Controllers\Basecamp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('basecamp.index', ['user' => $user]);
    }
}
