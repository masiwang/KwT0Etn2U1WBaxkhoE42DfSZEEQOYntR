@extends('client._components.master')
@section('title') Home @endsection
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5">
        <div class="row mt-4" id="slide">
            <div class="col-12">
                <div class="card-body p-0">
                    <div class="row">
                        <aside class="col-xl-3">
                            <nav class="nav-home-aside p-4 d-none d-md-block shadow-sm bg-white ">
                                <h6 class="font-weight-bold">Menu kategori <i class="d-md-none icon fa fa-chevron-down"></i>
                                </h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item top-slide-list">
                                        <a href="{{ url('/fund') }}" class="text-dark text-decoration-none py-3">Pendanaan</a>
                                    </li>
                                    <li class="list-group-item top-slide-list">
                                        <a href="{{ url('/market') }}" class="text-dark text-decoration-none py-3">Produk Petani</a>
                                    </li>
                                    <li class="list-group-item top-slide-list">
                                        <a href="{{ url('/market/sayur') }}" class="text-dark text-decoration-none py-3">Sayuran</a>
                                    </li>
                                    <li class="list-group-item top-slide-list">
                                        <a href="{{ url('/market/buah') }}" class="text-dark text-decoration-none py-3">Buah-buahan</a>
                                    </li>
                                    <li class="list-group-item top-slide-list">
                                        <a href="{{ url('/market/daging') }}" class="text-dark text-decoration-none py-3">Daging</a>
                                    </li>
                                    <li class="list-group-item top-slide-list">
                                        <a href="{{ url('/market/ikan') }}" class="text-dark text-decoration-none py-3">Ikan</a>
                                    </li>
                                    <li class="list-group-item top-slide-list">
                                        <a href="{{ url('/market/lainnya') }}" class="text-dark text-decoration-none py-3">Lainnya</a>
                                    </li>
                                </ul>
                            </nav>
                        </aside>
                        <div class="col-xl-9 px-0">
                            <div id="carouselExampleIndicators" class="carousel carousel-index slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://images.unsplash.com/photo-1511576661531-b34d7da5d0bb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" height="370px" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://images.unsplash.com/photo-1500964757637-c85e8a162699?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=778&q=80" height="370px" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://images.unsplash.com/photo-1532274402911-5a369e4c4bb5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" height="370px" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Funding start --}}
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="section-heading heading-line">
                    <h4 class="text-uppercase">Funding</h4>
                </header>
            </div>
        </div>
        <div class="row mt-3" id="fund-product-container" style="min-height: 80px;">
            <div style="min-width: 100%; overflow-x: auto; white-space: nowrap">
                <div v-for="product in products" class="card card-product shadow-sm mr-2" style="display: inline-block; width: 240px">
                    <div style="overflow: hidden">
                        <img v-bind:src="product.image" alt="Avatar" class="card-img" style="width: 100%">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <p class="card-title align-self-stretch" style="max-height: 44px; overflow: hidden; font-size: .9rem;">
                            <a v-bind:href="'/fund/'+product.category+'/'+product.slug" class="text-decoration-none text-dark">@{{ product.name }}</a>
                        </p>
                        <p class="card-text mb-1 text-success"><b>Rp.@{{ product.price }}/unit</b>
                            </p>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-7"><b>Kontrak</b></div>
                                <div class="col-5">@{{ product.periode }} Tahun</div>
                            </div>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-7"><b>Return</b></div>
                                <div class="col-5">@{{ product.return_per_periode }}%</div>
                            </div>
                            <div class="d-flex flex-row w-100" style="font-size: .8rem">
                                <div class="col-7"><b>Stock</b></div>
                                <div class="col-5">@{{ product.stock }} @{{ product.size }}</div>
                            </div>
                            <div class="d-flex flex-row w-100 mb-3" style="font-size: .8rem">
                                <div class="col-7"><b>Batas waktu</b></div>
                                <div class="col-5">@{{ product.closed_at }}</div>
                            </div>
                            <div class="w-100">
                                <a v-bind:href="'/fund/product/'+product.slug" class="btn btn-success btn-sm w-100">Danai</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3" v-if="loading">
                        <div class="spinner">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                </div>
            
        </div>
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="section-heading heading-line">
                    <h4 class="text-uppercase">Market</h4>
                </header>
            </div>
        </div>
        <div class="mt-3" id="market-product-container">
            <div class="row">
                <div v-for="(product, index) in products" class="col-6 col-md-2 p-2">
                    <div class="card card-product h-100 shadow-sm">
                        <div class="card-product__image-container" style="overflow: hidden">
                            <img v-bind:src="product.image" alt="Avatar" class="card-img-top" style="width: 100%;">
                        </div>
                        <div class="card-body p-2 d-flex flex-column">
                            <p class="product-title align-self-stretch" style="max-height: 44px; overflow: hidden; font-size: .9rem;">
                                <a v-bind:href="'/market/'+product.category+'/'+product.slug" class="text-decoration-none">@{{ product.name }}</a>
                            </p>
                            <p class="card-text mb-1 text-success"><strong>Rp.@{{ product.price }}</strong></p>
                            <hr>
                            <div class="mb-1 d-flex justify-content-between">
                                <a v-on:click="like(product)" class="btn btn-white text-danger w-100 btn-sm btn-action-like">
                                    <svg v-if="product.is_wishlist" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                    <svg v-else width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                </a>
                                <a v-bind:href="'/market/'+product.category+'/'+product.slug" class="btn btn-white text-success w-100 btn-sm">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                        <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3" v-if="loading">
                    <div class="spinner">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <button class="btn btn-success btn-sm" v-on:click="more" v-show="!is_endpage">Muat lebih banyak</button>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="section-heading heading-line">
                    <h4 class="text-uppercase">Request</h4>
                </header>
            </div>
        </div>
        <div class="row mb-4" id="fundProduct">
            <div class="col-12">
                <div class="d-flex align-items-stretch bg-white p-0 shadow-sm">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="h-100" style="background-image: url('https://images.unsplash.com/photo-1599372477648-bc918851435b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); background-size: cover; background-position: center;">
                                <div class="p-3">
                                    <h3 class="font-weight-bold text-white">Cara mudah untuk mempertemukan Anda dengan supplier</h3>
                                    <p class="text-light" style="max-width: 400px">Sisipkan pesan Anda untuk kami. Temukan produk yang Anda inginkan.</p>
                                    <a href="" class="btn btn-warning rounded-pill">Kirim kami pesan</a>
                                </div>
                            </div>
                        </div> <!-- col // -->
                        <div class="col-md-4">
                            <div class="card-body">
                                <form>
                                    <div class="form-group mb-3">
                                        <input class="form-control" name="product" placeholder="Produk apa yang Anda inginkan?" type="text">
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Qty" name="qty" type="text">
                                            <select name="size" class="custom-select form-control">
                                                <option value="1">liter</option>
                                                <option value="2">kilogram</option>
                                                <option value="3">unit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" name="contact" placeholder="Email/WA untuk kami hubungi?" type="text">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-warning rounded-pill">Kirim permintaan</button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- col // -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection
@section('bottom-script')
    <script>
        var _token = document.querySelector("meta[name='_token']").getAttribute('content');
        var marketProductGet = new Vue({
            el: '#market-product-container',
            data(){
                return{
                    loading: true,
                    products: [],
                    page: 0,
                    category: 'all',
                    is_endpage: false,
                }
            },
            mounted(){
                this.load()
            },
            methods:{
                load: function(){
                    axios.get('http://127.0.0.1:8000/v1/market', {
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
                like: function(product){
                    axios.post('http://127.0.0.1:8000/market/wishlist/new', {
                        product: product.id,
                        _token: _token
                    })
                    .then(response => {
                        console.log(response)
                        // (response.data.length < 6 ) ? this.is_endpage = true : this.is_endpage = false;
                        // response.data.map(data => this.products.push(data))
                    })
                    .finally(() => {
                        product.is_wishlist = !product.is_wishlist
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
        });
        var fundProductGet = new Vue({
            el: '#fund-product-container',
            data(){
                return {
                    page: 0,
                    loading: true,
                    products: [],
                    is_endpage: false
                }
            },
            mounted(){
                this.load()
            },
            methods: {
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
                }
            }
        });
    </script>
@endsection