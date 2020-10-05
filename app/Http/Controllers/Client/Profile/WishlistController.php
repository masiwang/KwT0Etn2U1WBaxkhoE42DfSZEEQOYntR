<?php

namespace App\Http\Controllers\Client\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class WishlistController extends Controller
{
    public function wishlist(){
        $wishlists = MarketWishlist::where('user_id', Auth::id())->get();
        return view('client.wishlist.index', ['user' => Auth::user(), 'wishlists' => $wishlists]);
    }
}
