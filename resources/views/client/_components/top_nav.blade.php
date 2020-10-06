<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/image/assets/makarya-dark-160x48.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-none d-md-flex ml-3 mr-auto">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                        </svg>
                    </span>
                    <input type="text" style="width: 20vw" class="form-control" placeholder="Cari produk" aria-label="Cari produk" aria-describedby="basic-addon1">
                </div>
            </form>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/market') }}">Market</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-chart-line"></i>
                        <span>Funding</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('fund')}}">Semua Pendanaan</a></li>
                        <li><a class="dropdown-item" href="{{ url('/fund/pertanian') }}">Pertanian</a></li>
                        <li><a class="dropdown-item" href="{{ url('/fund/peternakan') }}">Peternakan</a></li>
                        <li><a class="dropdown-item" href="{{ url('/fund/perikanan') }}">Perikanan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-bell"></i>
                        <span class="ma-menu-title">Notifikasi</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                @if ($user)
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-user"></i>
                        {{ $user->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('profile') }}">Akun</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ url('wishlist') }}">Wishlist</a></li>
                        <li><a class="dropdown-item" href="{{ url('cart') }}">Keranjang</a></li>
                        <li><a class="dropdown-item" href="{{ url('checkout') }}">Pesanan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ url('portofolio') }}">Portofolio</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ url('logout') }}">Keluar</a></li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/login') }}">Login</a>
                </li>
                @endif
                
            </ul>
        </div>
    </div>
</nav>
@if (\Auth::user())
<nav class="navbar navbar-expand-lg navbar-dark text-light bg-success shadow-sm d-none d-md-block">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/profile/market/wishlist') }}">Wishlist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/profile/market/cart') }}">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/profile/market/checkout') }}">Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/profile/fund') }}">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/help') }}">Bantuan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endif
