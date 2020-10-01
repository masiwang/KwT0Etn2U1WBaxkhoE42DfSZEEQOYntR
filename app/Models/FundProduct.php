<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundProduct extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo('App\Models\FundProductCategory', 'category_id', 'id');
    }

    public function vendor(){
        return $this->belongsTo('App\Models\Vendor', 'vendor_id', 'id');
    }

    public function checkout(){
        return $this->hasMany('App\Models\FundCheckout', 'product_id');
    }
}
