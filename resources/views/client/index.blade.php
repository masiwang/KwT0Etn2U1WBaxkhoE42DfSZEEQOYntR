@extends('client._components.master')
@section('content')
@include('client._components.top_nav')
<div class="container-fluid mb-5">
    <div class="row mt-4" id="slide">
        <div class="col-12">
            <div class="card-body shadow-sm bg-white p-0">
                <div class="row">
                    <aside class="col-xl-3">
                        <nav class="nav-home-aside p-4">
                            <h6 class="font-weight-bold">Menu kategori <i class="d-md-none icon fa fa-chevron-down"></i>
                            </h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item top-slide-list">
                                    <a href="{{ url('/fund') }}" class="text-dark text-decoration-none py-3">Pendanaan</a>
                                </li>
                                <li class="list-group-item top-slide-list">
                                    <a href="{{ url('/market') }}" class="text-dark text-decoration-none py-3">Produk Petani</a>
                                </li>
                                <li class="list-group-item top-slide-list">
                                    <a href="{{ url('/market/sayur') }}" class="text-dark text-decoration-none py-3">Sayuran</a>
                                </li>
                                <li class="list-group-item top-slide-list">
                                    <a href="{{ url('/market/buah') }}" class="text-dark text-decoration-none py-3">Buah-buahan</a>
                                </li>
                                <li class="list-group-item top-slide-list">
                                    <a href="{{ url('/market/daging') }}" class="text-dark text-decoration-none py-3">Daging</a>
                                </li>
                                <li class="list-group-item top-slide-list">
                                    <a href="{{ url('/market/ikan') }}" class="text-dark text-decoration-none py-3">Ikan</a>
                                </li>
                                <li class="list-group-item top-slide-list">
                                    <a href="{{ url('/market/lainnya') }}" class="text-dark text-decoration-none py-3">Lainnya</a>
                                </li>
                            </ul>
                        </nav>
                    </aside> <!-- col.// -->
                    <div class="col-xl-9 px-0">
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
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->

            </div>
        </div>
    </div>
    <div class="row mt-4" id="menu">
        <div class="col-12 p-2">
            <div class="card-body shadow-sm bg-white px-2 py-0">
                <div class="row">
                    <div class="col-4 p-3 bg-danger">
                        <header class="section-heading h-100" style="background: url('/image/assets/undraw_Notify_re_65on.svg'); background-size: cover; background-position: bottom; background-size: 300px; background-repeat: no-repeat;">
                            <h3 class="font-weight-bold text-white">Hampir tutup</h3>
                            <p class="text-light">Segera danai sebelum waktu berakhir.</p>
                        </header><!-- sect-heading -->
                    </div> <!-- col.// -->
                    <div class="col-8">
                        <div class="row">
                            <div class="col-3 border-left">
                                <figure class="card-body">
                                    <a href="#" class="img-wrap">
                                        <img src="/image/fund-product/chicken-egg-b-300x295.jpg" style="max-width: 100%">
                                    </a>
                                    <div class="text-center p-3">
                                        <a class="text-decoration-none text-dark" href="#"><h6>Another category</h6></a>
                                        <div><span class="badge bg-success">15%</span></div>
                                        <em style="font-size: .7rem">per periode</em>
                                    </div>
                                </figure>
                            </div> <!-- col.// -->
                            <div class="col-3 border-left">
                                <figure class="card-body ">
                                    <a href="#" class="img-wrap">
                                        <img src="/image/fund-product/chicken-egg-b-300x295.jpg" style="max-width: 100%">
                                    </a>
                                    <div class="text-center p-3">
                                        <a class="text-decoration-none text-dark" href="#"><h6>Another category</h6></a>
                                        <div><span class="badge bg-success">15%</span></div>
                                        <em style="font-size: .7rem">per periode</em>
                                    </div>
                                </figure>
                            </div> <!-- col.// -->
                            <div class="col-3 border-left">
                                <figure class="card-body ">
                                    <a href="#" class="img-wrap">
                                        <img src="/image/fund-product/chicken-egg-b-300x295.jpg" style="max-width: 100%">
                                    </a>
                                    <div class="text-center p-3">
                                        <a class="text-decoration-none text-dark" href="#"><h6>Another category</h6></a>
                                        <div><span class="badge bg-success">15%</span></div>
                                        <em style="font-size: .7rem">per periode</em>
                                    </div>
                                </figure>
                            </div> <!-- col.// -->
                            <div class="col-3 border-left">
                                <figure class="card-body">
                                    <a href="#" class="img-wrap">
                                        <img src="/image/fund-product/chicken-egg-b-300x295.jpg" style="max-width: 100%">
                                    </a>
                                    <div class="text-center p-3">
                                        <a class="text-decoration-none text-dark" href="#"><h6>Another category</h6></a>
                                        <div><span class="badge bg-success">15%</span></div>
                                        <em style="font-size: .7rem">per periode</em>
                                    </div>
                                </figure>
                            </div> <!-- col.// -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 p-2">
            <header class="section-heading heading-line">
                <h4 class="text-uppercase">Funding</h4>
            </header>
        </div>
    </div>
    <div class="row mt-3" id="fundProduct" style="min-height: 80px;">
        <div class="" style="min-width: 100%; overflow-x: auto; white-space: nowrap">
            @foreach ($fund_products as $product)
                <div class="card shadow-sm" style="display: inline-block; width: 240px">
                    @if ($product->image)
                    <div style="height: 180px; overflow: hidden">
                        <img src="{{ $product->image }}" alt="Avatar" class="card-img-top" style="width: 100%; transform: translateY(-20%)">
                    </div>
                    @else
                    <div style="height: 180px; overflow: hidden">
                        <img src="/image/assets/product-default.png" alt="Avatar" class="card-img-top" style="width: 100%;">
                    </div>
                    @endif
                    <div class="card-body d-flex align-items-start flex-column">
                        <p class="card-title mb-auto" style="max-height: 44px; overflow: hidden; font-size: .9rem;">
                            <a href="{{ url('fund/'.$product->category.'/'.$product->slug) }}"
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
                            <a href="{{ url('/fund/product/'.$product->slug) }}" class="btn btn-success btn-sm w-100">
                                Danai
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
    <div class="row mt-3">
        <div class="col-12 p-2">
            <header class="section-heading heading-line">
                <h4 class="text-uppercase">Market</h4>
            </header>
        </div>
    </div>
    <div class="row" id="marketProduct">
            <div class="col-12">
                <div class="d-flex align-items-stretch">
                    <div class="row p-2">
                        @foreach ($market_products as $product)
                        <div class="col-2 p-2">
                            <div class="card h-100 shadow-sm">
                                @if ($product->image)
                                <div style="height: 160px; overflow: hidden">
                                    <img src="{{ $product->image }}" alt="Avatar" class="card-img-top" style="height: 100%;">
                                </div>
                                @else
                                <div style="height: 160px; overflow: hidden">
                                    <img src="/image/assets/product-default.png" alt="Avatar" class="card-img-top" style="height: 100%;">
                                </div>
                                @endif
                                <div class="card-body">
                                    <p class="product-title mb-auto" style="max-height: 44px; overflow: hidden; font-size: .9rem;">
                                        <a href="{{ url('fund/'.$product->category.'/'.$product->slug) }}" class="text-decoration-none">
                                            {{ $product->name }}
                                        </a>
                                    </p>
                                    <p class="card-text mb-1 text-success"><strong>Rp{{ number_format($product->price,0,",",".") }}</strong></p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <button data-product="{{ $product->slug }}"  class="btn btn-white text-danger w-100 btn-sm action-like"><i class="far fa-heart"></i></button>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ url('/market/'.$product->category->slug.'/'.$product->slug) }}" class="btn btn-white text-success w-100 btn-sm"><i class="fas fa-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 p-2">
            <header class="section-heading heading-line">
                <h4 class="text-uppercase">Request</h4>
            </header>
        </div>
    </div>
    <div class="row mb-4" id="fundProduct">
        <div class="col-12 shadow-sm">
            <div class="d-flex align-items-stretch bg-white p-0">
                <div class="row">
                    <div class="col-md-8">
                        <div class="h-100" style="background-image: url('/image/assets/banner9.jpg'); background-size: cover">
                            <div class="p-3">
                                <h3 class="font-weight-bold text-white">Cara mudah untuk mempertemukan Anda dengan supplier</h3>
                                <p class="text-light" style="max-width: 400px">Sisipkan pesan Anda untuk kami. Temukan produk yang Anda inginkan.</p>
                                <a href="" class="btn btn-warning rounded-pill">Kirim kami pesan</a>
                            </div>
                        </div>
                    </div> <!-- col // -->
                    <div class="col-md-4">
                        <div class="card-body">
                            <form>
                                <div class="form-group mb-3">
                                    <input class="form-control" name="product" placeholder="Produk apa yang Anda inginkan?" type="text">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Qty" name="qty" type="text">
                                        <select name="size" class="custom-select form-control">
                                            <option value="1">liter</option>
                                            <option value="2">kilogram</option>
                                            <option value="3">unit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control" name="contact" placeholder="Email/WA untuk kami hubungi?" type="text">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-warning rounded-pill">Kirim permintaan</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- col // -->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    async function postData(url = '', data = {}) {
        const response = await fetch(url, {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            mode: 'cors', // no-cors, *cors, same-origin
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            credentials: 'same-origin', // include, *same-origin, omit
            headers: {
                'Content-Type': 'application/json'
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
            redirect: 'follow', // manual, *follow, error
            referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            body: JSON.stringify(data) // body data type must match "Content-Type" header
        });
        return response.json(); // parses JSON response into native JavaScript objects
    }
    
    postData('https://example.com/answer', {
            answer: 42
        })
        .then(data => {
            console.log(data); // JSON data parsed by `data.json()` call
        });
</script>
@include('client._components.footer')
@endsection
