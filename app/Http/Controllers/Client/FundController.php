<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\FundProduct as FundProductResources;
use App\Models\FundProduct;
use Illuminate\Http\Request;
use Auth;


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

    public function detail($category, $product){
        $product = FundProduct::where('slug', $product)->first();
        $user = Auth::user();
        $saldo = $this->saldo(); 
        return view('client.fund.detail', ['user' => $user,'product' => $product, 'saldo' => $saldo]);
    }

      public function funding_save(Request $request){
        // TODO: validasi
        
        // cek ketersediaan produk
        $product = InvestProduct::find($request->product_id);
        if( (int)$product->stock < (int)$request->qty ){
            return back()->with('error', 'Periksa kembali stock produk ini');
        }

        // minus stock
        $product = MarketProduct::where('id', $invoice->product_id)->first();
        $old_stock = $product->stock;
        $product->stock = (int)$old_stock - (int)$invoice->qty;
        $product->save();
        return redirect('checkout');

    }
}
