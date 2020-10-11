@extends('client._components.master')
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5" id="portofolio-detail-container">
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="row border-bottom">
                    <div class="col-12 col-md-6">
                        <h4 class="text-uppercase">Portofolio <span>@{{ portofolio.invoice }}</span></h4>
                    </div>
                </header>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 bg-white shadow-sm p-3">
                <form action="" method="POST">
                    <div class="row m-3">
                        <div class="col-12 col-md-5 text-center">
                            <div v-if="loading" class="bg-secondary" style="height: 400px; width: 100%"></div>
                            <img v-else v-bind:src="portofolio.image" alt="" srcset="" style="width: 100%">
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="">
                                <h4>@{{ portofolio.product }}</h4>
                                <h4 v-show="loading" class="bg-secondary mb-1" style="width: 150px">&nbsp;</h4>

                                <p class="text-info mb-1">@{{ portofolio.vendor }}</p>
                                <p v-show="loading" class="bg-secondary mb-1" style="width: 100px">&nbsp;</p>

                                <span class="badge mb-3" v-bind:class="{
                                    'bg-danger': (portofolio.status == 'menunggu pembayaran'),
                                    'bg-warning': (portofolio.status == 'menunggu konfirmasi'),
                                    'bg-info': (portofolio.status == 'pendanaan berlangsung'),
                                    'bg-success': (portofolio.status == 'pendanaan selesai'),
                                }">@{{ portofolio.status }}</span> <a v-bind:href="'/portofolio/'+portofolio.invoice+'/pay'" class="badge bg-success text-white" v-show="(portofolio.status == 'menunggu pembayaran')">Bayar sekarang</a>
                                <p v-show="loading" class="bg-secondary mb-3" style="width: 160px">&nbsp;</p>
                                <hr>
                                <div v-show="loading" class="bg-secondary mb-2" style="width: 100%; height: 220px">&nbsp;</div>
                                <table v-show="!loading" class="table">
                                    <tr>
                                        <td>&nbsp;</td>
                                        <th>Estimasi</th>
                                        <th>Aktual</th>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>Rp.@{{ portofolio.price }}</td>
                                        <td>Rp.@{{ portofolio.price }}</td>
                                    </tr>
                                    <tr>
                                        <th>Slot</th>
                                        <td>@{{ portofolio.qty }}</td>
                                        <td>@{{ portofolio.qty }}</td>
                                    </tr>
                                    <tr>
                                        <th>Return</th>
                                        <td>@{{ portofolio.return }}%</td>
                                        <td>@{{ portofolio.actual_return }}%</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <th>Rp.@{{ portofolio.portofolio }}</th>
                                        <th>Rp.@{{ portofolio.actual_portofolio }}</th>
                                    </tr>
                                </table>
                                <span class="small text-primary">*) Aktual return muncul ketika pendanaan berakhir</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 bg-white shadow-sm p-3" style="min-height: 400px">
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding: 1rem 0;">
                    <li class="nav-item" role="presentation">
                        <a class="ma-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Deskripsi</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="ma-link" id="simulasi-tab" data-toggle="tab" href="#simulasi" role="tab" aria-controls="simulasi" aria-selected="false">Simulasi</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="ma-link" id="risk-analysis-tab" data-toggle="tab" href="#risk-analysis" role="tab" aria-controls="risk-analysis" aria-selected="false">Risk Analysis</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="row">
                            <div class="col-12 p-4">
                                <iframe class="bg-secondary" style="width: 100%; height: 600px" v-bind:src="portofolio.description"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="simulasi" role="tabpanel" aria-labelledby="simulasi-tab">
                        <div class="row">
                            <div class="col-12 p-4">
                                <iframe class="bg-secondary" style="width: 100%; height: 600px" v-bind:src="portofolio.simulation"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="risk-analysis" role="tabpanel" aria-labelledby="risk-analysis-tab">
                        <div class="row">
                            <div class="col-12 p-4">
                                <iframe class="bg-secondary" style="width: 100%; height: 600px" v-bind:src="portofolio.risk_analysis"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection

@section('bottom-script')
    <script>
        var _base = document.querySelector("base").getAttribute('href');
        var portofolioDetail = new Vue({
        el: '#portofolio-detail-container',
        data(){
            return{
                loading:true,
                portofolio: '',
                page: 0,
                is_endpage: false,
            }
        },
        mounted(){
            this.load()
        },
        methods:{
            load: function(){
                this.loading = true;
                axios.get(_base+'/v1/portofolio/'+window.location.pathname.split('/')[2])
                .then(response => {
                    this.portofolio = response.data
                })
                .finally(() => {
                    this.loading = false;
                    this.page = this.page + 1;
                })
            }
        }
    });
    </script>
@endsection