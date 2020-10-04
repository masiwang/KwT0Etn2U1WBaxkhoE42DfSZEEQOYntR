@extends('client._components.master')
@section('title') Market @endsection
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5">
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="d-flex justify-content-between">
                    <h4 class="text-uppercase">Produk Market <span id="category-container"></span></h4>
                    <nav class="nav">
                        <a class="nav-link active action-category" aria-current="page" href="#" data-category="">Semua</a>
                        <a class="nav-link action-category" aria-current="page" href="#" data-category="sayur">Sayur</a>
                        <a class="nav-link action-category" href="#" data-category="buah">Buah</a>
                        <a class="nav-link action-category" href="#" data-category="daging">Daging</a>
                        <a class="nav-link action-category" href="#" data-category="ikan">Ikan</a>
                        <a class="nav-link action-category" href="#" data-category="lainnya">Lainnya</a>
                    </nav>
                </header>
            </div>
        </div>
        <div class="row mt-3" id="marketProduct">
            <div class="row" id="market-product-container">
                <input type="hidden" name="page" value="1">
                <input type="hidden" name="category" value="semua">
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <button class="btn btn-success btn-sm" id="more">Muat lebih banyak</button>
                </div>
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection
@section('bottom-script')
    <script src="/script/client-market.js"></script>
@endsection