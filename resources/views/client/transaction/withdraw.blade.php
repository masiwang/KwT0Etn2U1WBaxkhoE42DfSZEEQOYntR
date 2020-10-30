@extends('client._components.master')
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5" id="root">
        <div class="row my-3">
            <div class="col-12 p-2 d-flex justify-content-between">
                <h4 class="text-uppercase">Withdraw</h4>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/transaction">Daftar Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/transaction/topup">Topup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Saldo</a>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="col-sm-12 bg-white shadow-sm py-3">
                <form class="p-3" action="/transaction/withdraw" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="bank" class="form-label">Bank Tujuan</label>
                        <input type="text" class="form-control" name="bank_type">
                    </div>
                    <div class="mb-3">
                        <label for="acc" class="form-label">No. Rekening</label>
                        <input type="number" class="form-control" name="bank_acc">
                    </div>
                    <div class="mb-3">
                        <label for="nominal" class="form-label">Nominal</label>
                        <input type="number" class="form-control" name="nominal">
                    </div>
                    <hr>
                    <div class="text-right">
                        <input type="submit" class="btn btn-success" value="konfirmasi">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection