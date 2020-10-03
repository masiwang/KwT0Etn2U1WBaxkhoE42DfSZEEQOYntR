<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarketProduct;
use Auth;
use DB;

class MarketProductController extends Controller
{
    public function get($page){
        $per_page = 6;
        $wishlists = DB::table('market_wishlists')->where('user_id', Auth::id());
        $products = DB::table('market_products')
            ->leftJoin('market_wishlists', function ($join) {
                $join->on('market_products.id', '=', 'market_wishlists.product_id')
                    ->where('market_wishlists.user_id', 27);
            })
            ->select(
                'market_products.id as id',
                'market_products.image as image',
                'market_products.slug as slug',
                'market_products.name as name',
                'market_products.price as price',
                'market_wishlists.id as wishlist_id'
                )
            ->skip(($page-1)*$per_page)->take($per_page)
            ->get();
        return response()->json($products, 200);
    }
}
