<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\FundProduct as FundProductResources;
use App\Models\FundProduct;
use Illuminate\Http\Request;

class FundController extends Controller
{
    public function _detail($slug){
        $product = FundProduct::where('slug', $slug)->first();
        if(!$product){
            return response()->json(['status', 'bad request'], 400);
        }
        $product_res = new FundProductResources($product);
        return response()->json($product_res, 200);
    }
}
