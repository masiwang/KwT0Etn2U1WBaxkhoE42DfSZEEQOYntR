@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3" style="margin-left: 250px; background-color: #f9fbfd">
    <div class="container-fluid">
        <div class="header mb-4" style="border-bottom:1px solid rgb(227, 235, 246)">
            <div class="container-fluid">
                <div class="header-body py-3">
                    <div class="row d-flex align-items-end">
                        <div class="col">
                            <h6 class="mb-0 subtitle">FUND PRODUCT</h6>
                            <h1>Buat Produk Funding Baru</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-lg-10 col-xl-8">
                <form class="mb-4" action="{{ url('/basecamp/fund/product/new') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="mr-2">Foto produk</label>
                        <img src="{{ $product->image }}" alt="">
                    </div>
                    <div class="form-group mb-4">
                        <label>Nama produk</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="form-group mb-4">
                        <label class="mr-2">Deskripsi produk</label>
                        <small class="text-muted">
                            Tulis menggunakan bahasa HTML
                        </small>
                        <textarea class="form-control" name="description" rows="3">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label class="mr-2">Simulasi investasi</label>
                        <small class="text-muted">
                            Tulis menggunakan bahasa HTML
                        </small>
                        <textarea class="form-control" name="simulation" rows="3">{{ $product->simulation }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label class="mr-2">Analisis Risiko</label>
                        <small class="text-muted">
                            Tulis menggunakan bahasa HTML
                        </small>
                        <textarea class="form-control" name="risk_analysis" rows="3">{{ $product->risk_analysis }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label>Kategori produk</label>
                        <select class="form-select form-select-sm" name="category_id" aria-label=".form-select-sm example">
                            @foreach ($categories as $category)
                                @if ($category->id == $product->id)
                                <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-4">
                        <div class="col-4">
                            <label>Harga per slot</label>
                            <input type="number" class="form-control" name="price" placeholder="Rp." value="{{ $product->price }}">
                        </div>
                        <div class="col-4">
                            <label>Stock slot</label>
                            <input type="number" class="form-control" name="stock" placeholder="unit" value="{{ $product->stock }}">
                        </div>
                        <div class="col-4">
                            <label>Return</label>
                            <input type="number" class="form-control" name="return" placeholder="%" value="{{ $product->return_per_periode }}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Pendaftaran dibuka</label>
                                <input name="opened_at" type="text" class="form-control flatpickr-input" data-toggle="flatpickr"
                                    readonly="readonly" placeholder="2020-11-01" value="{{ $product->opened_at }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Penutupan pendaftaran</label>
                                <input name="closed_at" type="text" class="form-control flatpickr-input" data-toggle="flatpickr"
                                    readonly="readonly"  placeholder="2020-11-09" value="{{ $product->closed_at }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Funding dimulai</label>
                                <input name="started_at" type="text" class="form-control flatpickr-input" data-toggle="flatpickr"
                                    readonly="readonly"  placeholder="2020-12-01"  value="{{ $product->started_at }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Funding berakhir</label>
                                <input name="ended_at" type="text" class="form-control flatpickr-input" data-toggle="flatpickr"
                                    readonly="readonly"  placeholder="2020-12-09"  value="{{ $product->closed_at }}">
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5 mb-5">
                    <button type="submit" class="btn btn-block btn-primary">
                        Simpan produk
                    </button>
                    <a href="#" class="btn btn-block btn-link text-muted text-decoration-none">
                        Batal
                    </a>
                </form>
            </div>
        </div> <!-- / .row -->
    </div>
</div>
@endsection
