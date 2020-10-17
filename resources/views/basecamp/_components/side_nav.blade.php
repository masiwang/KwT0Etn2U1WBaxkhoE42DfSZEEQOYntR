<nav class="navbar navbar-light bg-white" style="position:fixed; left:0; max-width: 250px; width: 100%; overflow-y:auto; height: 100vh">
    <div class="container-fluid d-flex flex-column align-items-stretch" style="min-height: 100%">
        <div class="w-100 mb-auto">
            <div class="text-center py-4">
                <a class="navbar-brand" href="{{ url('/basecamp') }}">
                    <img src="/makarya-dark.png" class="navbar-brand-img mx-auto" alt="...">
                </a>
            </div>
            <ul class="navbar-nav side-nav px-3">
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/basecamp/') }}">
                        <i class="fe fe-grid"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fe fe-home"></i> Client
                    </a>
                    <div>
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/basecamp/client') }}" class="nav-link nav-link-child">
                                    Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/basecamp/client/ktp') }}" class="nav-link nav-link-child">
                                    Konfirmasi KTP
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fe fe-home"></i> Funding
                    </a>
                    <div>
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/basecamp/fund') }}" class="nav-link nav-link-child  {{ \Request::is('basecamp/fund') ? 'active' : ''}}">
                                    Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/basecamp/fund/product') }}" class="nav-link nav-link-child {{ \Request::is('basecamp/fund/product') ? 'active' : ''}}">
                                    Product
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/basecamp/fund/payment') }}" class="nav-link  nav-link-child  {{ \Request::is('basecamp/fund/payment') ? 'active' : ''}}">
                                    Pending Payment
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fe fe-home"></i> Market
                    </a>
                    <div>
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/basecamp/market') }}" class="nav-link nav-link-child  {{ \Request::is('basecamp/fund') ? 'active' : ''}}">
                                    Rekap
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/basecamp/market/product') }}" class="nav-link nav-link-child {{ \Request::is('basecamp/fund/product') ? 'active' : ''}}">
                                    Produk
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/basecamp/market/payment') }}" class="nav-link  nav-link-child  {{ \Request::is('basecamp/fund/payment') ? 'active' : ''}}">
                                    Pembayaran
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="btn-group dropup w-100 mt-4">
            <button type="button" class="btn btn-white dropdown-toggle w-100" data-toggle="dropdown" aria-expanded="false">
                {{ $user->name }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</nav>
