@extends('client._components.master')

@section('title') Pendanaan @endsection

@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5" id="fund-product-container">
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="row border-bottom">
                    <div class="col-12 col-md-6">
                        <h4 class="text-uppercase">Produk Pendanaan <span>@{{ category }}</span></h4>
                    </div>
                    <div class="col-12 col md-6">
                        <nav class="nav">
                            <a class="nav-link active" v-on:click="setCategory('semua')">Semua</a>
                            <a class="nav-link" v-on:click="setCategory('pertanian')">Pertanian</a>
                            <a class="nav-link" v-on:click="setCategory('peternakan')">Peternakan</a>
                            <a class="nav-link" v-on:click="setCategory('perikanan')">Perikanan</a>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
        <div class="mt-3">
            <div class="row">
                <div v-for="(product, index) in products" class="col-6 col-md-2 p-2">
                    <div class="card card-product h-100 shadow-sm">
                        <div class="card-product__image-container" style="overflow: hidden">
                            <img v-bind:src="product.image" alt="Avatar" class="card-img-top" style="width: 100%;">
                        </div>
                        <div class="card-body d-flex align-items-start flex-column">
                            <p class="card-title mb-auto" style="max-height: 44px; overflow: hidden; font-size: .9rem;">
                                <a v-bind:href="'fund/'+product.category+'/'+product.slug"
                                    class="text-decoration-none text-dark">
                                    @{{ product.name }}
                                </a>
                            </p>
                            <p class="card-text mb-1 text-success"><b>Rp.@{{ product.price }}/unit</b>
                            </p>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-6">
                                    <b>Kontrak</b>
                                </div>
                                <div class="col-6">
                                    @{{ product.periode }} Tahun
                                </div>
                            </div>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-6">
                                    <b>Return</b>
                                </div>
                                <div class="col-6">
                                    @{{ product.return_per_periode }}%
                                </div>
                            </div>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-6">
                                    <b>Stock</b>
                                </div>
                                <div class="col-6">
                                    @{{ product.stock }} @{{ product.size }}
                                </div>
                            </div>
                            <div class="d-flex flex-row w-100 mb-3" style="font-size: .8rem">
                                <div class="col-6">
                                    <b>Penutupan</b>
                                </div>
                                <div class="col-6">
                                    @{{ product.closed_at }}
                                </div>
                            </div>
                            <div class="w-100">
                                <a v-bind:href="'fund/'+product.category+'/'+product.slug" class="btn btn-success btn-sm w-100">
                                    Danai
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-show="loading" v-for="n in 6" class="col-6 col-md-2 p-2">
                    <div class="card card-product h-100 shadow-sm bg-secondary">
                        <div style="height: 160px" class="d-flex justify-content-center align-items-center">
                            <img src="/image/assets/loading.gif" alt="" width="80px">
                        </div>
                        <div class="card-body p-2 d-flex flex-column">
                            <p class="product-title align-self-stretch w-100 bg-white" style="max-height: 44px; overflow: hidden; font-size: .9rem;">
                                <a href="#" class="text-decoration-none">
                                    &nbsp;
                                </a>
                            </p>
                            <p class="card-text mb-1 text-success bg-white">&nbsp;</p>
                            <hr>
                            <div class="mb-1 d-flex justify-content-between">
                                <p class="mb-0 btn btn-white w-100 bg-white">
                                    &nbsp;
                                </p>
                                <p class="mb-0 btn btn-white w-100 bg-white">
                                    &nbsp;
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <button class="btn btn-success btn-sm" v-on:click="more" v-show="!is_endpage">Muat lebih banyak</button>
                </div>
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection
@section('bottom-script')
<script>
    var _token = document.querySelector("meta[name='_token']").getAttribute('content');
    console.log(_token);
    var fundProductGet = new Vue({
        el: '#fund-product-container',
        data(){
            return{
                loading: true,
                products: [],
                page: 0,
                category: '',
                is_endpage: false
            }
        },
        mounted(){
            this.load()
        },
        methods:{
            load: function(){
                axios.get('http://127.0.0.1:8000/v1/fund', {
                    params: {
                        category: this.category,
                        page: this.page
                    }
                })
                .then(response => {
                    (response.data.length < 6 ) ? this.is_endpage = true : this.is_endpage = false;
                    response.data.map(data => this.products.push(data))
                })
                .finally(() => {
                    this.loading = false;
                    this.page = this.page + 1
                })
            },
            more: function(){
                this.loading = true
                this.load()
            },
            setCategory: function(category){
                this.loading = true
                this.category = category
                this.page = 0
                this.products = []
                this.load()
            }
        }
    })
</script>
@endsection
