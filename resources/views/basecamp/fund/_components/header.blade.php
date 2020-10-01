<div class="header mb-3" style="border-bottom:1px solid rgb(227, 235, 246)">
    <div class="container-fluid">
        <div class="header-body py-3">
            <div class="row d-flex align-items-end">
                <div class="col">
                    <h6 class="mb-0">FUNDING</h6>
                    <h1>Semua Tentang Funding</h1>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col">
                  <ul class="nav nav-tabs nav-overflow header-tabs">
                    <li class="nav-item">
                      <a href="{{ url('/basecamp/fund') }}" class="nav-link {{\Request::is('basecamp/fund') ? 'active' : ''}}">
                        Rekap
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('/basecamp/fund/product') }}" class="nav-link {{\Request::is('basecamp/fund/product') ? 'active' : ''}}">
                        Produk
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('/basecamp/fund/payment') }}" class="nav-link {{\Request::is('basecamp/fund/payment') ? 'active' : ''}}">
                        Pembayaran
                      </a>
                    </li>
                  </ul>
  
                </div>
              </div>
        </div>
    </div>
</div>