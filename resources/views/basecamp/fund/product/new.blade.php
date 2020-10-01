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
                        <label>Nama produk</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="mr-2">Deskripsi produk</label>
                        <small class="text-muted">
                            Tulis menggunakan bahasa HTML
                        </small>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label class="mr-2">Simulasi investasi</label>
                        <small class="text-muted">
                            Tulis menggunakan bahasa HTML
                        </small>
                        <textarea class="form-control" name="simulation" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label class="mr-2">Simulasi investasi</label>
                        <small class="text-muted">
                            Tulis menggunakan bahasa HTML
                        </small>
                        <textarea class="form-control" name="risk_analysis" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label>Kategori produk</label>
                        <select class="form-select form-select-sm" name="category_id" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="row mb-4">
                        <div class="col-4">
                            <label>Harga per slot</label>
                            <input type="number" class="form-control" name="price" placeholder="Rp.">
                        </div>
                        <div class="col-4">
                            <label>Stock slot</label>
                            <input type="number" class="form-control" name="stock" placeholder="unit">
                        </div>
                        <div class="col-4">
                            <label>Return</label>
                            <input type="number" class="form-control" name="return" placeholder="%">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Pendaftaran dibuka</label>
                                <input name="opened_at" type="text" class="form-control flatpickr-input" data-toggle="flatpickr"
                                    readonly="readonly" placeholder="2020-11-01">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Penutupan pendaftaran</label>
                                <input name="closed_at" type="text" class="form-control flatpickr-input" data-toggle="flatpickr"
                                    readonly="readonly"  placeholder="2020-11-09">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Funding dimulai</label>
                                <input name="started_at" type="text" class="form-control flatpickr-input" data-toggle="flatpickr"
                                    readonly="readonly"  placeholder="2020-12-01">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Funding berakhir</label>
                                <input name="ended_at" type="text" class="form-control flatpickr-input" data-toggle="flatpickr"
                                    readonly="readonly"  placeholder="2020-12-09">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="mr-2">Foto produk</label>
                        <small class="text-muted">
                            Please use an image no larger than 1200px * 600px.
                        </small>
                        <input type="file" class="form-control" name="image" />
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
