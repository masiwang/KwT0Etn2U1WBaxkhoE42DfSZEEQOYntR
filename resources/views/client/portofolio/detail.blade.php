@extends('client._components.master')
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5" id="portofolio-detail-container">
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="row border-bottom">
                    <div class="col-12 col-md-6">
                        <h4 class="text-uppercase">Portofolio <span>@{{ portofolio.product }}</span></h4>
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
                        <div class="col-sm-7">
                            <div class="row">
                                <h3 class="col-12 mb-2">@{{ portofolio.product }}</h3>
                                <div class="col-12 mb-2">
                                    <h6 class="text-success" style="font-weight: 600">Rp.@{{ new Intl.NumberFormat('id-ID', { maximumSignificantDigits: 3 }).format(portofolio.price) }}/paket</h6>
                                </div>
                                <div class="col-12">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th width="10%">ROI</th>
                                            <td>
                                                @{{ portofolio.return }}%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Periode</th>
                                            <td>
                                                @{{ portofolio.periode }} hari
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Portofolio</th>
                                            <td>
                                                @{{ portofolio.qty }} paket
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <h5 class="text-success"><span class="text-dark">Estimasi pendapatan: </span>Rp.@{{ estimated_return }}</h5>
                                    </div>
                                    <div class="col-12">
                                        <h4 class="text-success mb-0"><span class="text-dark">Aktual perdapatan: </span>Rp.@{{ actual_return }}</h4>
                                        <small class="text-info" style="font-size: .75rem">*)Aktual pendapatan muncul saat pendanaan selesai</small>
                                    </div>
                                </div>
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
                        <a class="ma-link" id="prospectus-tab" data-toggle="tab" href="#prospectus" role="tab" aria-controls="prospectus" aria-selected="false">Prospektus</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="ma-link" id="report-tab" data-toggle="tab" href="#report" role="tab" aria-controls="report" aria-selected="false">Laporan</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="row">
                            <div class="col-12 p-4">
                                @{{portofolio.description}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="prospectus" role="tabpanel" aria-labelledby="prospectus-tab">
                        <div class="row">
                            <div class="col-12 p-4">
                                <iframe class="text-center" width="100%" height="600" :src="portofolio.prospectus"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report-tab">
                        <div class="row">
                            <div class="col-12 p-4">
                                <iframe class="text-center" width="100%" height="600" :src="portofolio.report"></iframe>
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
                estimated_return: '',
                actual_return: ''
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
                    this.estimatedReturn()
                    this.actualReturn()
                })
            },
            estimatedReturn: function(){
                var low = new Intl.NumberFormat('id-ID', { maximumSignificantDigits: 3 }).format((1+(this.portofolio.return.split('-')[0]/100))*this.portofolio.qty*this.portofolio.price)
                var high = new Intl.NumberFormat('id-ID', { maximumSignificantDigits: 3 }).format((1+(this.portofolio.return.split('-')[1]/100))*this.portofolio.qty*this.portofolio.price)
                this.estimated_return = low+' s/d Rp.'+high;
            },
            actualReturn: function(){
                if(this.portofolio.status === 'pendanaan selesai'){
                    this.actual_return = new Intl.NumberFormat('id-ID', { maximumSignificantDigits: 3 }).format((1+(this.portofolio.actual_return/100))*this.portofolio.qty*this.portofolio.price)
                }else{
                    this.actual_return = 0
                }
            }
        }
    });
    </script>
@endsection