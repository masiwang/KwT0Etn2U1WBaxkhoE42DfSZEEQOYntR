@extends('client._components.master')
@section('content')
@include('client._components.top_nav')
<div class="container mb-5">
    <div class="row mt-4" id="slide">
        <div class="col-12">
            <div class="card-body p-0">
                <div class="row">
                    <aside class="col-xl-3">
                        <nav class="nav-home-aside p-4 d-none d-md-block shadow-sm bg-white ">
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
                        <div id="carouselExampleIndicators" class="carousel carousel-index slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1511576661531-b34d7da5d0bb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" height="370px" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1500964757637-c85e8a162699?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=778&q=80" height="370px" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1532274402911-5a369e4c4bb5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" height="370px" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->

            </div>
        </div>
    </div>
    {{-- <div class="row mt-4" id="menu">
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
    </div> --}}
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
                <div class="card card-product shadow-sm mr-2" style="display: inline-block; width: 240px">
                    @if ($product->image)
                    <div style="height: 180px; overflow: hidden">
                        <img src="{{ $product->image }}" alt="Avatar" class="card-img-top" style="width: 100%; transform: translateY(-20%)">
                    </div>
                    @else
                    <div style="height: 180px; overflow: hidden">
                        <img src="/image/assets/product-default.png" alt="Avatar" class="card-img-top" style="width: 100%;">
                    </div>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <p class="card-title align-self-stretch" style="max-height: 44px; overflow: hidden; font-size: .9rem;">
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
                                <div class="card-body p-2 d-flex flex-column">
                                    <p class="product-title align-self-stretch" style="max-height: 44px; overflow: hidden; font-size: .9rem;">
                                        <a href="{{ url('fund/'.$product->category->slug.'/'.$product->slug) }}" class="text-decoration-none">
                                            {{ $product->name }}
                                        </a>
                                    </p>
                                    <p class="card-text mb-1 text-success"><strong>Rp{{ number_format($product->price,0,",",".") }}</strong></p>
                                    <hr>
                                    <div class="mb-1 d-flex justify-content-between">
                                            <button data-product="{{ $product->slug }}"  class="btn btn-white text-danger w-100 btn-sm action-like">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-suit-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 6.236l.894-1.789c.222-.443.607-1.08 1.152-1.595C10.582 2.345 11.224 2 12 2c1.676 0 3 1.326 3 2.92 0 1.211-.554 2.066-1.868 3.37-.337.334-.721.695-1.146 1.093C10.878 10.423 9.5 11.717 8 13.447c-1.5-1.73-2.878-3.024-3.986-4.064-.425-.398-.81-.76-1.146-1.093C1.554 6.986 1 6.131 1 4.92 1 3.326 2.324 2 4 2c.776 0 1.418.345 1.954.852.545.515.93 1.152 1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
                                                  </svg>
                                            </button>
                                            <a href="{{ url('/market/'.$product->category->slug.'/'.$product->slug) }}" class="btn btn-white text-success w-100 btn-sm">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                            </a>
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
                        <div class="h-100" style="background-image: url('https://images.unsplash.com/photo-1599372477648-bc918851435b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); background-size: cover; background-position: center;">
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
