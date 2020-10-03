@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3 bg-light" style="margin-left: 250px; min-height: 100vh">
    @include('basecamp.market._components.header')    
    <div class="container-fluid">
        <div class="row d-flex align-items-stretch">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div  class="card-header d-flex flex-row align-items-center">
                        <h4 class="mb-0 mr-auto">Produk Market</h4>
                        <a href ="{{ url('/basecamp/market/product/new') }}" class="btn btn-success">Produk baru</a>
                    </div>
                    <div class="card-header">
                        <form action="{{ url('/basecamp/market/product') }}" method="GET">
                            <div class="input-group input-group-flush mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" name="name" class="form-control form-control-flush" placeholder="Search" aria-label="search" aria-describedby="basic-addon1">
                              </div>
                        </form>
                      </div>
                    <div class="table-responsive mb-0"
                        data-list="{&quot;valueNames&quot;: [&quot;products-product&quot;, &quot;products-stock&quot;, &quot;products-price&quot;, &quot;products-sales&quot;]}"
                        id="productsList" style="overflow-x: hidden; min-heigh: 400px">
                        <table class="table table-sm table-nowrap table-hover card-table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="products-product">
                                            Product
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort asc" data-sort="products-stock">
                                            Stock
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="products-price">
                                            Price
                                        </a>
                                    </th>
                                    <th colspan="2">
                                        <a href="#" class="text-muted list-sort" data-sort="products-sales">
                                            Total penjualan
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($products as $product)
                                <tr>
                                    <td class="products-product">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img rounded mr-3" src="{{ $product->image }}" style="max-height: 40px; width: 40px" alt="...">
                                            </div>
                                            <div class="ml-3">
                                                <h4 class="font-weight-normal mb-1">{{ $product->name }}</h4>
                                                <small class="text-muted">{{ \Str::substr($product->description, 0, 20) }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="products-stock">
                                        {{ $product->stock }} {{ $product->size }}
                                    </td>
                                    <td class="products-price">
                                        Rp.{{ $product->price }}
                                    </td>
                                    <td class="products-sales">
                                        -
                                    </td>
                                    <td class="text-right">
                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <li><a class="dropdown-item" href="#">Detail</a></li>
                                              <li><a class="dropdown-item" href="{{ url('/basecamp/market/product/'.$product->slug.'/edit') }}">Edit</a></li>
                                              <li><a class="dropdown-item" href="#">Hapus</a></li>
                                            </ul>
                                          </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
