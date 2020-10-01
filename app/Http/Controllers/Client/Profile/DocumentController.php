<?php

namespace App\Http\Controllers\Client\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DocumentController extends Controller
{
    public function index(){
        $user = User::first();
        return view('client.dashboard.profile.document', ['user' => $user]);
    }
}
