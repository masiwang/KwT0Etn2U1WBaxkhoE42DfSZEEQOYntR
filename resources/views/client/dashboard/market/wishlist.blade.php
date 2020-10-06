@extends('client._components.master')
@section('title') Market @endsection
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5">
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="row border-bottom">
                    <div class="col-12 col-md-6">
                        <h4 class="text-uppercase">Produk Market <span id="category-container"></span></h4>
                    </div>
                    <div class="col-12 col md-6">
                        <nav class="nav">
                            <a class="nav-link active action-category" aria-current="page" href="#" data-category="" data-name="">Semua</a>
                            <a class="nav-link action-category" aria-current="page" href="#" data-category="1" data-name="sayur">Sayur</a>
                            <a class="nav-link action-category" href="#" data-category="2" data-name="buah">Buah</a>
                            <a class="nav-link action-category" href="#" data-category="3" data-name="daging">Daging</a>
                            <a class="nav-link action-category" href="#" data-category="4" data-name="ikan">Ikan</a>
                            <a class="nav-link action-category" href="#" data-category="5" data-name="lainnya">Lainnya</a>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
        <div class="mt-3" id="marketProduct">
            <div class="row" id="market-product-container">
                <input type="hidden" name="market_page" value="1">
                <input type="hidden" name="category" value="semua">
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <button class="btn btn-success btn-sm" id="market_more">Muat lebih banyak</button>
                </div>
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection
@section('bottom-script')
    <script src="/script/client-wishlist.js"></script>
@endsection