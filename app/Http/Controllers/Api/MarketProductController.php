<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarketProduct;
use Auth;
use DB;

class MarketProductController extends Controller
{
    public function get($page, Request $request){
        $per_page = 6;
        $wishlists = DB::table('market_wishlists')->where('user_id', Auth::id());
        $products = MarketProduct::leftJoin('market_wishlists', function ($join) {
                $join->on('market_products.id', '=', 'market_wishlists.product_id')
                    ->where('market_wishlists.user_id', 27);
            })
            ->leftJoin('market_product_categories', 'market_products.category_id', 'market_product_categories.id')
            ->select(
                'market_products.id as id',
                'market_products.image as image',
                'market_products.slug as slug',
                'market_products.name as name',
                'market_products.price as price',
                'market_wishlists.id as wishlist_id',
                'market_product_categories.slug as category'
            );

        switch ($request->category) {
            case 'sayur':
                $products = $products->where('market_products.category_id', 1);
                break;
            case 'buah':
                $products = $products->where('market_products.category_id', 2);
                break;
            case 'daging':
                $products = $products->where('market_products.category_id', 3);
                break;
            case 'ikan':
                $products = $products->where('market_products.category_id', 4);
                break;
            case 'lainnya':
                $products = $products->where('market_products.category_id', 5);
                break;
            default:
            $products = $products;
                break;
        }

        $products = $products->skip(($page-1)*$per_page)->take($per_page)
            ->get();
        return response()->json($products, 200);
    }
}
