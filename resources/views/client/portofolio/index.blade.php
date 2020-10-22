@extends('client._components.master')
@section('title') Portofolio @endsection
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5">
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="row border-bottom">
                    <div class="col-12 col-md-6">
                        <h4 class="text-uppercase">Portofolio</span></h4>
                    </div>
                </header>
            </div>
        </div>
        <div class="mt-3" id="portofolio-container">
            <div class="list-group">
                <a v-for="portofolio in portofolios" v-bind:href="'/portofolio/'+portofolio.invoice" class="list-group-item list-group-item-action border-0 shadow-sm">
                    <div class="d-flex flex-row py-2">
                        <div class="mr-3 d-flex align-items-start">
                            <img v-bind:src="portofolio.image" alt="" style="width: 100px; height 100px">
                        </div>
                        <div class="flex-fill">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">@{{ portofolio.invoice }}</h5>
                            </div>
                            <p class="mb-1">@{{ portofolio.product }}</p>
                            <small class="text-muted">Rp.@{{ new Intl.NumberFormat('id-ID').format(parseInt(portofolio.price)*parseInt(portofolio.qty)) }}</small>
                        </div>
                    </div>
                </a>
                <a v-if="loading" class="list-group-item list-group-item-action bg-secondary">
                    <div class="d-flex flex-row">
                        <div class="mr-3 d-flex align-items-start">
                            <div class="bg-white" style="height: 100px; width: 100px">&nbsp;</div>
                        </div>
                        <div class="flex-fill">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 bg-white" style="width: 100px">&nbsp;</h5>
                                <span class="badge bg-white" style="line-height: 2; width: 100px">&nbsp;</span>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <div>
                                    <p class="mb-1 bg-white" style="width: 80px">&nbsp;</p>
                                    <p class="text-muted bg-white" style="width: 50px">&nbsp;</p>
                                </div>
                                <img class="d-none d-xl-block" src="/image/assets/loading-h.gif" alt="" style="height: 2rem">
                                <p style="width: 180px">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <button class="btn btn-success btn-sm" v-on:click="load" v-show="!is_endpage">Muat lebih banyak</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/script/portofolio/index.js"></script>
    @include('client._components.footer')
@endsection