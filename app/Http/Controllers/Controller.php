<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Transaction;
use Auth;
use Str;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function getUser(){
    return Auth::user();
  }

  public function getSaldo(){
    $saldo = (Auth::user()) ? Transaction::where('user_id', Auth::id())->whereNotNull('approved_at')->sum('nominal') : null;
    return $saldo;
  }

  public function setImage($file){
    $name = Str::random(32).'.jpg';
    $file->move('assets/', $name);
    return 'http://127.0.0.1:8000/assets/'.$name;
  }

  public function setNotification($user_id, $title, $body){
    $notification = new Notification();
    $notification->user_id = $user_id;
    $notification->title = $title;
    $notification->body = $body;
    return $notification->save();
  }
}
