<?php

namespace App\Http\Controllers\Basecamp\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarketProduct;
use App\Models\MarketProductCategory;
use Auth;
use Carbon\Carbon;
use Str;

class ProductController extends Controller
{
    private function store($method, $request){
        if($method == 'new'){
            $product = new MarketProduct;
            $product->created_by = Auth::id();
            $product->created_at = Carbon::now();
            $image = $request->file('image');
            $image_name = 'produk-'.Str::random(32).'.jpg';
            $image->move('image/market/', $image_name);
            $product->image = '/image/market/'.$image_name;
        }
        if($method == 'update'){
            $product = MarketProduct::find($request->id);
            $product->updated_by = Auth::id();
            $product->updated_at = Carbon::now();
        }
        $product->slug = Str::of($request->name)->slug('-').'-'.Str::random(5);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->size = $request->size;
        $product->category_id = $request->category_id;
        $product->vendor_id = 1;
        $product->save();
    }

    public function index(Request $request){
        $products = new MarketProduct;
        if( $request->name ){
            $products = $products->where('name', 'like', '%'.$request->name.'%');
        }
        $products = $products->paginate(5);
        $user = Auth::user();
        return view('basecamp.market.product.index', ['products' => $products, 'user' => $user]);
    }

    public function new(){
        $user = Auth::user();
        return view('basecamp.market.product.new', ['user' => $user]);
    }

    public function new_save(Request $request){
        $this->store('new', $request);
        return redirect('basecamp/market/product');
    }

    public function edit($slug){
        $user = Auth::user();
        $product = MarketProduct::where('slug', $slug)->first();
        $categories = MarketProductCategory::all();
        return view('basecamp.market.product.edit', ['user' => $user, 'product' => $product, 'categories' => $categories]);
    }

    public function edit_save(Request $request){
        $product = MarketProduct::where('slug', $request->product)->first();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->size = $request->size;
        $product->category_id = $request->category_id;
        $product->updated_at = Carbon::now();
        $product->save();
        return redirect('/basecamp/market/product/'.$request->slug);
    }

    public function edit_image_save(Request $request){
        $image_name = 'product-'.Str::random(32).'.jpg';
        $request->file('image')->move('image/market/', $image_name);
        $product = MarketProduct::where('slug', $request->product)->first();
        $product->image = '/image/market/'.$image_name;
        $product->updated_at = Carbon::now();
        $product->save();
        return back();
    }

    public function delete_save(Request $request){
        $product = FundProduct::find($id)->delete();
        return redirect('/basecamp/market/product');
    }

    public function detail($slug){
        $user = Auth::user();
        $product = MarketProduct::where('slug', $slug)->first();
        return view('basecamp.market.product.detail', ['user' => $user, 'product' => $product]);
    }
}
