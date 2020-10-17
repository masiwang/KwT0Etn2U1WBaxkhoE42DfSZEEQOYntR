<?php

namespace App\Http\Controllers\Basecamp\Fund;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FundProduct;
use App\Models\FundProductCategory;
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
        $product->risk_analysis = $request->prospectus;
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
        return view('basecamp.fund.product.new', ['user' => Auth::user()]);
    }

    public function new_save(Request $request){
        // $request->validate();
        $this->store('new', $request);
        return redirect('basecamp/fund/product');
    }

    public function edit($slug){
        $product = FundProduct::where('slug', $slug)->first();
        $user = Auth::user();
        $categories = FundProductCategory::all();
        return view('basecamp.fund.product.edit', ['user' => $user, 'product' => $product, 'categories' => $categories]);
    }

    public function edit_save(Request $request){
        $product = FundProduct::where('slug', $request->product)->first();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->risk_analysis = $request->prospectus;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->return_per_periode = $request->return;
        $product->opened_at = $request->opened_at;
        $product->closed_at = $request->closed_at;
        $product->started_at = $request->started_at;
        $product->ended_at = $request->ended_at;
        $product->updated_at = Carbon::now();
        $product->save();
        return redirect('/basecamp/fund/product/'.$request->product);
    }

    public function edit_image_save(Request $request){
        $image_name = 'product-'.Str::random(32).'.jpg';
        $request->file('image')->move('image/fund/', $image_name);
        $product = FundProduct::where('slug', $request->product)->first();
        $product->image = '/image/fund/'.$image_name;
        $product->updated_at = Carbon::now();
        $product->save();
        return back();
    }

    public function delete_save(Request $request){
        $product = FundProduct::find($id)->delete();
        return redirect('/invest/product');
    }

    public function detail($slug){
        $product = FundProduct::where('slug', $slug)->first();
        $user = Auth::user();
        return view('basecamp.fund.product.detail', ['user' => $user, 'product' => $product]);
    }
}
