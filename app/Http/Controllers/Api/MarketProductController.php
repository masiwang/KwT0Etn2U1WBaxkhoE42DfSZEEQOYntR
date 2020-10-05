<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarketProduct;
use App\Models\MarketWishlist;
use Auth;
use DB;
use App\Http\Resources\MarketProductCollection as MarketProductResources;

class MarketProductController extends Controller
{
    public function get($page, Request $request){
        $per_page = 6;
        $wishlists = MarketWishlist::where('user_id', 27)->select('product_id');
        if($wishlists){
            $products = MarketProduct::leftJoinSub(
                $wishlists, 'wishlist', function($join){
                    $join->on('market_products.id', '=', 'wishlist.product_id');
            });
            if($request->category){
                $products = $products->where('category_id', $request->category);
            }
            $products = $products->skip(($page-1)*$per_page)->take($per_page)->get();
        }else{
            $products = MarketProduct::skip(($page-1)*$per_page)->take($per_page)->get();
        }
        $products_resource = new MarketProductResources($products);
        return response()->json($products_resource, 200);
    }
}
