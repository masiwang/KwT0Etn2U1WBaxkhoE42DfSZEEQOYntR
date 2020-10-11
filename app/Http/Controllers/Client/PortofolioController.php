<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\PortofolioCollection;
use App\Http\Resources\Portofolio as PortofolioResources;
use Illuminate\Http\Request;
use App\Models\FundCheckout;
use App\Models\FundProduct;
use Auth;
use Carbon\Carbon;
use Str;

class PortofolioController extends Controller
{
    public function index(){
        return view('client.portofolio.index', ['user' => Auth::user()]);
    }

    public function detail(){
        return view('client.portofolio.detail', ['user' => Auth::user()]);
    }

    public function pay(){
        return view('client.portofolio.pay', ['user' => Auth::user()]);
    }

    public function pay_save(Request $request){
        $image_name = 'payment-'.Str::random(32).'.jpg';
        $request->file('pay_image')->move('image/fund/', $image_name);
        $invoice = FundCheckout::where('invoice', $request->invoice)->first();
        $invoice->pay_by = $request->pay_by;
        $invoice->pay_at = Carbon::now();
        $invoice->pay_image = '/image/fund/'.$image_name;
        $invoice->status_id = 2;
        $invoice->save();

        // minus stock
        $product = FundProduct::where('id', $invoice->product_id)->first();
        $old_stock = $product->stock;
        $product->stock = (int)$old_stock - (int)$invoice->qty;
        $product->save();
        return redirect('portofolio');
    }

    public function _get(Request $request){
        $per_page = 6;
        $checkout = FundCheckout::where('user_id', Auth::id())
            ->skip((int)$request->page*$per_page)->take($per_page)->get();
        $checkout = new PortofolioCollection($checkout);
        return response()->json($checkout, 200);
    }

    public function _detail($invoice){
        $portofolio = FundCheckout::where('invoice', $invoice)->first();
        $portofolio = new PortofolioResources($portofolio);
        return response()->json($portofolio, 200);
    }


}
