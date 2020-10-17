@extends('client._components.master')
@section('title') Pembayaran portofolio @endsection
@section('top-script')
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
@endsection
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5" id="portofolio-detail-container">
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="row border-bottom">
                    <div class="col-12 col-md-6">
                        <h4 class="text-uppercase">Pembayaran portofolio</h4>
                    </div>
                </header>
            </div>
        </div>
        <div class="row mt-3" id="portofolio-container">
            <div class="col-12 bg-white p-4 shadow">
                <div class="mb-5 text-center">
                    <img src="/image/assets/makarya-dark-160x48.png" alt="">
                    <p>Invoice #@{{ portofolio.invoice }}</p>
                </div>
                <div v-show="loading" class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <div class="bg-secondary" style="width: 100px">&nbsp;</div>
                        <div class="bg-secondary" style="width: 100px">&nbsp;</div>
                    </div>
                    <div class="d-flex justify-content-between mb-1">
                        <div class="bg-secondary" style="width: 250px">&nbsp;</div>
                        <div class="bg-secondary" style="width: 250px">&nbsp;</div>
                    </div>
                    <div class="d-flex justify-content-between mb-1">
                        <div class="bg-secondary" style="width: 160px">&nbsp;</div>
                        <div class="bg-secondary" style="width: 160px">&nbsp;</div>
                    </div>
                    <div class="d-flex justify-content-between mb-1">
                        <div class="bg-secondary" style="width: 100px">&nbsp;</div>
                        <div class="bg-secondary" style="width: 100px">&nbsp;</div>
                    </div>
                    <div class="d-flex justify-content-between mb-1">
                        <div class="bg-secondary" style="width: 60px">&nbsp;</div>
                        <div class="bg-secondary" style="width: 60px">&nbsp;</div>
                    </div>
                </div>
                <div v-show="!loading" class="mb-3">
                    <div class="d-flex justify-content-between">
                        <small class="text-secondary">Pembayaran dari</small>
                        <small class="text-secondary">Pembayaran ke</small>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="font-weight-bold mb-0">@{{ user.name }}</p>
                        <p class="font-weight-bold mb-0">Makarya.in</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <small>@{{ user.jalan }}</small>
                        <small>Jl. Shinta No. 20, Purwo Asri, RT/RW 40B/016</small>
                    </div>
                    <div class="d-flex justify-content-between">
                        <small>@{{ user.kelurahan }}, @{{ user.kecamatan }}</small>
                        <small>Kroyo, Karang Malang</small>
                    </div>
                    <div class="d-flex justify-content-between">
                        <small>@{{ user.kabupaten }} - @{{ user.kodepos }}</small>
                        <small>Sragen 67516</small>
                    </div>
                </div>
                <div class="mb-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama produk</th>
                                <th width="15%">Harga</th>
                                <th width="10%" class="text-center">Qty</th>
                                <th width="10%">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a class="text-decoration-none text-success" v-bind:href="'/fund/'+portofolio.category_slug+'/'+portofolio.product_slug">@{{ portofolio.product }}</a></td>
                                <td>Rp.@{{ portofolio.price }}</td>
                                <td class="text-center">@{{ portofolio.qty }}</td>
                                <td>Rp.@{{ parseInt(portofolio.price) * parseInt(portofolio.qty) }}</td> 
                            </tr>
                            <tr>
                                <td colspan="3" class="font-weight-bold">Total Pembayaran</td>
                                <td>Rp.@{{ parseInt(portofolio.price) * parseInt(portofolio.qty) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mb-3">
                    <small>NOTE</small>
                    <hr>
                    <p>Pembayaran yang melewati tenggat tidak akan di proses. Apabila produk habis sebelum Anda melakukan pembayaran, maka Anda tidak dapat melakukan checkout.</p>
                </div>
                <div class="">
                    <form class="card h-100 border-0 border-top" :action="'/portofolio/'+portofolio.invoice+'/pay'" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body table-responsive">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Invoice</label>
                                <input type="text" disabled class="form-control" id="exampleFormControlInput1" name="invoice" v-bind:value="portofolio.invoice">
                            </div>
                            <div class="mb-3">
                                <label for="payImage" class="form-label">Bukti pembayaran</label><br>
                                <input type="file" class="" id="payImage" name="pay_image">
                            </div>
                            <div class="mb-3">
                                <label for="payBy" class="form-label">No. rekening</label>
                                <input type="number" class="form-control" id="payBy" name="pay_by" value="">
                            </div>
                        </div>
                        <div class="card-footer text-right border-0 bg-white">
                            <button class="btn btn-success">Konfirmasi</button>
                        </div>
                    </form>
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
                user: '',
            }
        },
        mounted(){
            this.load(),
            this.load_user()
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
            },
            load_user: function(){
                this.loading = true;
                axios.get(_base+'/v1/user')
                .then(response => {
                    this.user = response.data
                })
                .finally(() => {
                    this.loading = false;
                })
            },
        }
    });
</script>
@endsection