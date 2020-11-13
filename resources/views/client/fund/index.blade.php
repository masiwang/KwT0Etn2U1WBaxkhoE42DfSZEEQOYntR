@extends('client._components.master')

@section('title') Pendanaan @endsection

@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5" id="fund-product-container">
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="row border-bottom">
                    <div class="col-12 col-md-6">
                        <h4 class="text-uppercase">Produk Pendanaan <span>@{{ category }}</span></h4>
                    </div>
                    <div class="col-12 col md-6">
                        <nav class="nav">
                            <a class="nav-link active" v-on:click="setCategory('semua')">Semua</a>
                            <a class="nav-link" v-on:click="setCategory('pertanian')">Pertanian</a>
                            <a class="nav-link" v-on:click="setCategory('peternakan')">Peternakan</a>
                            <a class="nav-link" v-on:click="setCategory('perikanan')">Perikanan</a>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
        <div class="mt-3">
            <div class="row">
                @foreach ($products as $product)
                <div v-for="(product, index) in products" class="col-6 col-md-2 p-2">
                    <div class="card card-product h-100 shadow-sm">
                        <div class="card-product__image-container" style="overflow: hidden">
                            <img v-bind:src="product.image" alt="Avatar" class="card-img-top" style="width: 100%;">
                        </div>
                        <div class="card-body d-flex align-items-start flex-column">
                            <p class="card-title mb-auto" style="max-height: 44px; overflow: hidden; font-size: .9rem;">
                                <a href="fund/{{$product->category}}/{{$product->slug}}" class="btn btn-success btn-sm w-100"
                                    class="text-decoration-none text-dark">
                                    {{ $product->name }}
                                </a>
                            </p>
                            <p class="card-text mb-1 text-success"><b>Rp.{{ ($product->price) }}/unit</b>
                            </p>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-6">
                                    <b>Kontrak</b>
                                </div>
                                <div class="col-6">
                                    {{ $product->periode }} hari
                                </div>
                            </div>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-6">
                                    <b>ROI</b>
                                </div>
                                <div class="col-6">
                                    {{ $product->return }}%
                                </div>
                            </div>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-6">
                                    <b>Stok</b>
                                </div>
                                <div class="col-6">
                                    {{ $product->stock }} paket
                                </div>
                            </div>
                            <div class="d-flex flex-row w-100 mb-3" style="font-size: .8rem">
                                <div class="col-6">
                                    <b>Penutupan</b>
                                </div>
                                <div class="col-6">
                                    {{ $product->closed_at }}
                                </div>
                            </div>
                            <div class="w-100">
                                
                                <a href="fund/{{$product->category}}/{{$product->slug}}" class="btn btn-success btn-sm w-100">
                                    Danai
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection
