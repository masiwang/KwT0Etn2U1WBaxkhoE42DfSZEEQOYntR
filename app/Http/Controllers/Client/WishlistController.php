<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\WishlistCollection;
use Illuminate\Http\Request;
use Auth;
use App\Models\MarketWishlist;

class WishlistController extends Controller
{
    public function index(){
        return view('client.wishlist.index', ['user' => Auth::user()]);
    }
    public function _get(){
        $products = MarketWishlist::where('user_id', Auth::id())->get();
        return response()->json($products, 200);
    }
}
