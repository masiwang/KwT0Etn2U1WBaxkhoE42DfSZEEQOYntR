<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function from()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function to(){
        return $this->belongsTo('App\Models\User', 'to');
    }

    public function status(){
        return $this->belongsTo('App\Models\TransactionStatus', 'status_id');
    }
}
