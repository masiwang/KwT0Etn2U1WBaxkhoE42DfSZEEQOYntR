@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3 bg-light h-100" style="margin-left: 250px">
    @include('basecamp.fund._components.header')
    <div class="container-fluid">
        <div class="row d-flex align-items-stretch">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <form class="card-body p-4" action="{{ url('basecamp/fund/payment/'.$payment->invoice) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="invoice" class="form-label">Invoice</label>
                                        <input type="text" disabled class="form-control-plaintext" id="invoice" name="invoice" value="{{ $payment->invoice }}">
                                    </div>
                                    <div class="col-4">
                                        <label for="invoice" class="form-label">Produk</label>
                                        <input type="text" disabled class="form-control-plaintext" id="invoice" value="{{ $payment->product->name }}">
                                    </div>
                                    <div class="col-4">
                                        <label for="invoice" class="form-label">No. rekening</label>
                                        <input type="text" disabled class="form-control-plaintext" id="invoice" value="{{ $payment->pay_by }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="invoice" class="form-label">Harga produk</label>
                                        <input type="text" disabled class="form-control-plaintext" id="invoice" value="Rp.{{ $payment->product->price }}">
                                    </div>
                                    <div class="col-4">
                                        <label for="invoice" class="form-label">Kuantitas</label>
                                        <input type="text" disabled class="form-control-plaintext" id="invoice" value="{{ $payment->qty }}">
                                    </div>
                                    <div class="col-4">
                                        <label for="invoice" class="form-label">Total tagihan</label>
                                        <input type="text" disabled class="form-control-plaintext" id="invoice" value="Rp.{{ (int)$payment->qty * (int)$payment->product->price }}">
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <div class="row d-flex align-items-stretch">
                                        <div class="col">
                                            <label for="password" class="form-label">Masukkan password untuk konfirmasi</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="******">
                                        </div>
                                        <div class="col d-flex align-items-end">
                                            <button type="submit" class="btn btn-success">Konfirmasi</button>
                                        </div>
                                    </div>
                                    @if( \Session::has('error') )
                                    <div class="row">
                                        <small class="text-danger">Password salah</small>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset($payment->pay_image) }}" alt="" srcset="" style="width: 100%">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
