<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarketProduct;
use App\Models\MarketWishlist;
use Auth;
use Carbon\Carbon;

class WishlistController extends Controller
{
    public function new(Request $request){
        $product = MarketProduct::where('slug', $request->product)->first();
        $wishlist = new MarketWishlist;
        $wishlist->user_id = Auth::id();
        $wishlist->product_id = $product->id;
        $wishlist->created_at = Carbon::now();
        $wishlist->save();
        return response()->json(['status' => 'success'], 200);
    }
}
