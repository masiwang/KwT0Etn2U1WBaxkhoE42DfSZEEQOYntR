@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3" style="margin-left: 250px; background-color: #f9fbfd; min-height: 100vh">
    <div class="container-fluid">
        <div class="header mb-4" style="border-bottom:1px solid rgb(227, 235, 246)">
            <div class="container-fluid">
                <div class="header-body py-3">
                    <div class="row d-flex align-items-end">
                        <div class="col">
                            <h6 class="mb-0 subtitle">FUND MARKET</h6>
                            <h1>{{ $product->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12 col-lg-4 col-xl-4">
                <img src="{{ asset($product->image) }}" alt="" style="width: 100%">
            </div>
            <div class="col-12 col-lg-8">
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="name" class="text-secondary">Nama produk</label>
                        <p>{{ $product->name }}</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="name" class="text-secondary">Kategori produk</label>
                    <p>{{ $product->category->name }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-3">
                        <label for="name" class="text-secondary">Harga</label>
                        <p>Rp.{{ $product->price }}/slot</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="name" class="text-secondary">Return</label>
                        <p>{{ $product->return_per_periode }}%/periode</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="name" class="text-secondary">Sisa slot</label>
                        <p>{{ $product->stock }}</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="name" class="text-secondary">Max. pembelian</label>
                        <p>{{ $product->max_buy }} slot</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="name" class="text-secondary">Pembukaan pendaftaran</label>
                        <p>{{ $product->opened_at }}</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="name" class="text-secondary">Penutupan pendaftaran</label>
                        <p>{{ $product->closed_at }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="name" class="text-secondary">Pendanaan dimulai</label>
                        <p>{{ $product->started_at }}</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="name" class="text-secondary">Pendanaan selesai</label>
                        <p>{{ $product->ended_at }}</p>
                    </div>
                </div>
                <div class="mb-3">
                    <a href="{{ url('/basecamp/fund/product/'.$product->slug.'/edit') }}" class="btn btn-warning btn-sm w-100">Edit</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <ul class="nav" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Deskripsi</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="simulation-tab" data-toggle="tab" href="#simulation" role="tab" aria-controls="simulation" aria-selected="true">Simulasi</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="risk-analysis-tab" data-toggle="tab" href="#risk-analysis" role="tab" aria-controls="risk-analysis" aria-selected="true">Risk Analysis</a>
                      </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">Daftar Pendana</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="row">
                            <div class="col-12 p-3">
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="simulation" role="tabpanel" aria-labelledby="simulation-tab">
                        <div class="row">
                            <div class="col-12 p-3">
                                {!! $product->simulation !!}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="risk-analysis" role="tabpanel" aria-labelledby="risk-analysis-tab">
                        <div class="row">
                            <div class="col-12 p-3">
                                {!! $product->risk_analysis !!}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                        <div class="row">
                            <div class="col-12 p-3">
                                Pendana
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
