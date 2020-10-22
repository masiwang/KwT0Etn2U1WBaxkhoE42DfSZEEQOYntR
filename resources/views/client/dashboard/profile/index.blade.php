@extends('client._components.master')
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5">
        <div class="row mt-3">
            <div class="col-12 p-2">
                <header class="row border-bottom">
                    <div class="col-12 col-md-6">
                        <h4 class="text-uppercase">Profile</h4>
                    </div>
                </header>
            </div>
        </div>
        <div id="profileIndexContainer" class="row mt-3 bg-white shadow-sm">
            <div class="col-3 p-4 border-right">
                <div>
                    <img src="/image/assets/makarya-sheep-330x330.jpg" alt="" srcset="" style="width: 100%">
                </div>
                <div class="mt-3">
                    <small class="text-secondary text-uppercase">Menu</small>
                    <ul class="nav flex-column" id="profileTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="personalInfo-tab" data-toggle="tab" href="#personalInfo" role="tab" aria-controls="personalInfo" aria-selected="true">Informasi pribadi</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="transaction-tab" data-toggle="tab" href="#transaction" role="tab" aria-controls="transaction" aria-selected="false">Transaksi</a>
                        </li>
                      </ul>
                </div>
            </div>
            <div class="col-9 p-4">
                <div class="mb-4">
                    <div class="d-flex flex-row align-items-end">
                        <h2 class="mb-1 mr-4">@{{ user.name }}</h2> <p class="mb-2 text-secondary">@{{ user.job }} <span class="badge bg-primary">@{{ (user.gender === 1) ? 'L' : 'P' }}</span></p>
                    </div>
                    <p class="text-info">
                        <span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </span>
                        @{{ user.kabupaten+', '+user.kodepos }}</p>
                </div>
                <div class="mb-4">
                    <small class="text-muted"><span class="text-uppercase mr-3">Saldo</span> <a href="/transaction/topup">
                        <span class="badge bg-success">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                            </svg> Topup
                        </span></a>
                    </small>
                    <h4>Rp.@{{ saldo }}</h4>

                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="personalInfo" role="tabpanel" aria-labelledby="personalInfo-tab">
                        <div class="mb-4">
                            <small class="text-muted text-uppercase">Informasi personal</small>
                            <table class="table table-borderless">
                                <tr>
                                    <th width="20%">Tanggal lahir</th>
                                    <td>
                                        @{{ user.birthday }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>KTP</th>
                                    <td>
                                        @{{ user.ktp }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="mb-4">
                            <small class="text-muted text-uppercase">Informasi kontak</small>
                            <table class="table table-borderless">
                                <tr>
                                    <th width="20%">Alamat</th>
                                    <td>
                                        @{{ user.jalan+', '+user.kelurahan+', '+user.kecamatan+', '+user.kabupaten+', '+user.kodepos }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>
                                        @{{ user.email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Telepon</th>
                                    <td>
                                        @{{ user.phone }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="transaction" role="tabpanel" aria-labelledby="transaction-tab" style="height: 400px; overflow-y: scroll">
                        <div class="p-3">
                            <table class="table table-hover">
                                <tr v-for="transaction in transactions" :class="{ 'text-success' : (transaction.type == 'in'),  'text-danger' : (transaction.type == 'out')}">
                                    <td width="25%">@{{ transaction.time }}</td>
                                    <td class="text-uppercase">@{{ transaction.description }}</td>
                                    <td>Rp.@{{ new Intl.NumberFormat('id-ID').format(transaction.nominal) }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/script/profile-index.js"></script>
    </div>
    @include('client._components.footer')
@endsection