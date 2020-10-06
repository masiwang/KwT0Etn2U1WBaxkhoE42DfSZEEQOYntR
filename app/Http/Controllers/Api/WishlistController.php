<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WishlistCollection as WishlistResources;
use Illuminate\Http\Request;
use App\Models\MarketProduct;
use App\Models\MarketWishlist;
use Auth;
use Carbon\Carbon;

class WishlistController extends Controller
{
    public function get($page, Request $request){
        $per_page = 6;
        $wishlists = MarketWishlist::where('user_id', Auth::id())->skip(($page-1)*$per_page)->take($per_page)->get();

        $wishlists_resource = new WishlistResources($wishlists);
        return response()->json($wishlists_resource, 200);
    }

    public function new(Request $request){
        $is_exist = MarketWishlist::where('user_id', Auth::id())->where('product_id', $request->product)->first();
        if($is_exist){
            $is_exist->delete();
        }else{
            $wishlist = new MarketWishlist;
            $wishlist->user_id = Auth::id();
            $wishlist->product_id = $request->product;
            $wishlist->created_at = Carbon::now();
            $wishlist->save();
        }
        return response()->json(['status' => 'success'], 200);
    }
}
