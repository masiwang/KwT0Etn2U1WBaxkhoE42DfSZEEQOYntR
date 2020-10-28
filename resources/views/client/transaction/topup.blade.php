@extends('client._components.master')
@section('content')
    @include('client._components.top_nav')
    <div class="container mb-5" id="root">
        <div class="row my-3">
            <div class="col-12 p-2 d-flex justify-content-between">
                <h4 class="text-uppercase">Topup Saldo</h4>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/transaction">Daftar Transaksi</a>
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
                <form class="p-3" action="/transaction/topup" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">  
                        <label for="exampleDataList" class="form-label">Bank</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" name="bank_type">
                            <datalist id="datalistOptions">
                            <option value="BNI">
                            <option value="BNI SYARIAH">
                            <option value="BRI">
                            <option value="BRI SYARIAH">
                            <option value="Mandiri">
                            <option value="BTN">
                            <option value="BCA">
                            <option value="BTPN">        
                        </datalist>
                    </div>        
                    <div class="mb-3">
                        <label for="acc" class="form-label">No. Rekening</label>
                        <input type="number" class="form-control" name="bank_acc">
                    </div>
                    <div class="mb-3">
                        <label for="nominal" class="form-label">Nominal</label>
                        <input type="number" class="form-control" name="nominal">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Bukti Transfer</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <hr>
                    <div class="text-right">
                        <input class="btn btn-success" type="submit" value="Konfirmasi"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection