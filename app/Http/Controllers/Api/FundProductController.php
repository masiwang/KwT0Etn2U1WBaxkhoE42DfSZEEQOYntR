<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FundProductCollection as FundProductResource;
use Illuminate\Http\Request;
use App\Models\FundProduct;

class FundProductController extends Controller
{
    public function get(Request $request){
        $per_page = 1;
        $products = new FundProductResource(FundProduct::skip($request->page*$per_page)->take($per_page)->get());
        return response()->json($products, 200);
    }
}
