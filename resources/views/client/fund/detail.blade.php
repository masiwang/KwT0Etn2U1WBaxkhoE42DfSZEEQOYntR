@extends('client._components.master')
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5" id="fund-product-detail-container">
        <div class="row my-3">
            <div class="col-12 p-2">
                <h4 class="text-uppercase">Produk Pendanaan "<span> {{ $product->name }}</span>"</h4>
            </div>
            <hr>
            <div class="col-sm-12 bg-white shadow-sm py-3">
                <div>
                    <div class="row m-3">
                        <div class="col-sm-5 text-center" style="overflow:hidden; height: 400px">
                            <img src="/image/assets/funding.jpg" alt="" srcset="" style="width: 100%">
                        </div>
                        <div class="col-sm-7">
                            <form class="row" action="/fund/{{ $product->category->slug }}/{{ $product->slug }}" method="POST">
                                @csrf
                                <h4 class="col-12 mb-4"> {{ $product->name }}</h4>
                                <div class="col-12 mb-2"> 
                                    <h4 class="text-success" style="font-weight: 600">Rp. {{ ($product->price) }}/unit</h4>
                                </div>
                                <div class="col-12">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th width="10%">ROI</th>
                                            <td>
                                                {{ $product->return_per_periode }}%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Periode</th>
                                            <td>
                                                {{ $product->started_at }}-{{ $product->ended_at }} hari
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">Qty</span>
                                            <input v-model="qty" type="number" class="form-control" :class="{'border-danger text-danger' : qtyAlert}" placeholder="0" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p v-else>Tersedia : {{ $product->stock}} paket</p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-12">
                                        <input class="btn btn-success" value="danai" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-12 bg-white shadow-sm p-3" style="min-height: 400px">
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding: 1rem 0;">
                    <li class="nav-item" role="presentation">
                        <a class="ma-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Deskripsi</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="ma-link" id="prospectus-tab" data-toggle="tab" href="#prospectus" role="tab" aria-controls="prospectus" aria-selected="false">Prospectus</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="row">
                            <div class="col-12 p-4">
                                {{$product->description}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="prospectus" role="tabpanel" aria-labelledby="prospectus-tab">
                        <div class="row">
                            <div class="col-12 p-4">
                                {{$product->risk_analysis}}
                                <iframe class="" style="width: 100%; height: 600px" :src="product.prospectus"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection