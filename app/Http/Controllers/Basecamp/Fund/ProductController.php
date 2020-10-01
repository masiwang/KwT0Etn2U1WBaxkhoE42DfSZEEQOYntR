<?php

namespace App\Http\Controllers\Basecamp\Fund;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FundProduct;
use App\Models\FundProductImage;
use Carbon\Carbon;
use Auth;
use Str;

class ProductController extends Controller
{
    private function store($method, $request){
        if($method == 'new'){
            $product = new FundProduct;
            $product->created_at = Carbon::now();
            $image = $request->file('image');
            $image_name = 'produk-'.Str::random(32).'.jpg';
            $image->move('image/fund/', $image_name);
            $product->image = '/image/fund/'.$image_name;
        }
        if($method == 'update'){
            $product = FundProduct::find($request->id);
            $product->updated_at = Carbon::now();
        }
        $product->slug = Str::of($request->name)->slug('-').'-'.Str::random(5);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->return_per_periode = $request->return;
        $product->stock = $request->stock;
        $product->opened_at = $request->opened_at;
        $product->closed_at = $request->closed_at;
        $product->started_at = $request->started_at;
        $product->ended_at = $request->ended_at;
        $product->category_id = $request->category_id;
        $product->simulation = $request->simulation;
        $product->risk_analysis = $request->risk_analysis;
        $product->vendor_id = 1;
        $product->save();
    }

    public function index(Request $request){
        $products = new FundProduct;
        if( $request->name ){
            $products = $products->where('name', 'like', '%'.$request->name.'%');
        }
        $products = $products->paginate(10);
        $user = Auth::user();
        return view('/basecamp/fund/product/index', ['products' => $products, 'user' => $user]);
    }

    public function new(){
        return view('basecamp.fund.product.new');
    }

    public function new_save(Request $request){
        // $request->validate();
        $this->store('new', $request);
        return redirect('basecamp/fund/product');
    }

    public function edit($id){
        $product = FundProduct::find($id);
        return view('/invest/product/'.$request->slug.'/edit');
    }

    public function edit_save(Request $request){
        $this->store('update', $request);
        return redirect('/invest/product/'.$request->slug);
    }

    public function delete_save(Request $request){
        $product = FundProduct::find($id)->delete();
        return redirect('/invest/product');
    }

    public function image_save(Request $request){
        $last_product = FundProduct::orderBy('id', 'desc')->limit(1)->first();
        $image = $request->file('document[]');
        $image_name = $this->upload_image('invest-product', $image);
            $product_image = new FundProductImage;
            $product_image->product_id = ($last_product) ? (int)$last_product->id + 1 : 1;
            $product_image->url = 'assets/image/fund/product/'.$image_name;
            $product_image->created_at = Carbon::now();
            $product_image->save();
        return response()->json($images);
    }
    
}
