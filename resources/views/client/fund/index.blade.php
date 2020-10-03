@extends('client._components.master')
@section('content')
@include('client._components.top_nav')
<div class="container-fluid mb-5">
    {{-- <div class="row mt-4" id="slide">
        <div class="col-12">
            <div class="card-body shadow-sm bg-white p-0">
                <div class="row">
                    <div class="col-xl-12 px-0">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/image/fund-product/3ejGHsZzjTJktFodIsoXQnNsRrBJb7YZ.jpg" height="370px"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/image/fund-product/3ejGHsZzjTJktFodIsoXQnNsRrBJb7YZ.jpg" height="370px"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/image/fund-product/3ejGHsZzjTJktFodIsoXQnNsRrBJb7YZ.jpg" height="370px"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div>
        </div>
    </div> --}}
    <div class="row mt-3">
        <div class="col-12 p-2">
            <header class="section-heading heading-line">
                <h4 class="text-uppercase">Funding {{ $category_name }}</h4>
            </header>
        </div>
    </div>
    <div class="row mt-3" id="fundProduct">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-6 col-md-2 p-2">
                    <div class="card card-product h-100 shadow-sm">
                        @if ($product->image)
                        <div class="card-product__image-container" style="overflow: hidden">
                            <img src="{{ $product->image }}" alt="Avatar" class="card-img-top" style="width: 100%;">
                        </div>
                        @else
                        <div style="height: 160px; overflow: hidden">
                            <img src="/image/assets/product-default.png" alt="Avatar" class="card-img-top" style="width: 100%;">
                        </div>
                        @endif
                        <div class="card-body d-flex align-items-start flex-column">
                            <p class="card-title mb-auto" style="max-height: 44px; overflow: hidden; font-size: .9rem;">
                                <a href="{{ url('fund/'.$product->category->name.'/'.$product->slug) }}"
                                    class="text-decoration-none text-dark">
                                    {{ $product->name }}
                                </a>
                            </p>
                            <p class="card-text mb-1 text-success"><b>Rp{{ number_format($product->price,0,",",".") }}/unit</b>
                            </p>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-7">
                                    <b>Kontrak</b>
                                </div>
                                <div class="col-5">
                                    {{ $product->periode }} Tahun
                                </div>
                            </div>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-7">
                                    <b>Return</b>
                                </div>
                                <div class="col-5">
                                    {{ $product->return_per_periode }}%
                                </div>
                            </div>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-7">
                                    <b>Stock</b>
                                </div>
                                <div class="col-5">
                                    {{ $product->stock }} {{ $product->size }}
                                </div>
                            </div>
                            <div class="d-flex flex-row w-100 mb-3" style="font-size: .8rem">
                                <div class="col-7">
                                    <b>Batas waktu</b>
                                </div>
                                <div class="col-5">
                                    {{ date('d M Y', strtotime($product->closed_at)) }}
                                </div>
                            </div>
                            <div class="w-100">
                                <a href="{{ url('fund/'.$product->category->slug.'/'.$product->slug) }}" class="btn btn-success btn-sm w-100">
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
