<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarketProduct;
use App\Models\MarketProductCategory;
use App\Models\MarketWishlist;
use Auth;
use DB;
use App\Http\Resources\MarketProductCollection as MarketProductResources;

class MarketProductController extends Controller
{
    public function get(Request $request){
        $per_page = 6;
        $wishlists = MarketWishlist::where('user_id', 27)->select('product_id');
        if($wishlists){
            $products = MarketProduct::leftJoinSub(
                $wishlists, 'wishlist', function($join){
                    $join->on('market_products.id', '=', 'wishlist.product_id');
            });
            if($request->category){
                $category = MarketProductCategory::where('slug', $request->category)->first();
                if($category){
                    $products = $products->where('category_id', $category->id);
                }
            }
            $products = $products->skip(($request->page)*$per_page)->take($per_page)->get();
        }else{
            $products = MarketProduct::skip(($request->page)*$per_page)->take($per_page)->get();
        }
        $products_resource = new MarketProductResources($products);
        return response()->json($products_resource, 200);
    }
}
