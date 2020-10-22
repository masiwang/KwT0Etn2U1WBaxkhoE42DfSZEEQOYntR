@extends('client._components.master')
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5" id="root">
        <div class="row my-3">
            <div class="col-12 p-2 d-flex justify-content-between">
                <h4 class="text-uppercase">Daftar transaksi</h4>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/transaction/topup">Topup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/transaction/withdraw">Withdraw</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Saldo</a>
                    </li>
                  </ul>
            </div>
            <hr>
            <div class="col-sm-12 bg-white shadow-sm py-3">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Akun Bank</th>
                            <th>Nominal</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            {{-- <th>&nbsp;</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="transaction in transactions" :class="{'text-success': (transaction.type == 'in'), 'text-danger' : (transaction.type == 'out')}">
                            <td>@{{ transaction.time }}</td>
                            <td>@{{ transaction.bank_type }} @{{ transaction.bank_acc }}</td>
                            <td>@{{ transaction.nominal }}</td>
                            <td>@{{ transaction.description }}</td>
                            <td>@{{ transaction.status }}</td>
                            {{-- <td><a href="">Detail</a></td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="/script/transaction/index.js"></script>
    @include('client._components.footer')
@endsection