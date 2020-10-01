@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3 bg-light" style="margin-left: 250px">
    @include('basecamp.market._components.header')
    <div class="container-fluid">
        <div class="row d-flex align-items-stretch">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <form>
                            <div class="input-group input-group-flush mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control form-control-flush" placeholder="Search"aria-label="search" aria-describedby="basic-addon1">
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="orders-order">
                                            Invoice
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="orders-product">
                                            Produk
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="orders-total">
                                            Tagihan
                                        </a>
                                    </th>
                                    <th>
                                      <a href="#" class="text-muted list-sort" data-sort="orders-date">
                                          Tanggal Pembayaran
                                      </a>
                                    </th>
                                    <th colspan="2">
                                        <a href="#" class="text-muted list-sort" data-sort="orders-method">
                                            No. Rekening
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($payments as $payment)
                                <tr>
                                  <td class="orders-order">
                                      <a class="text-success font-weight-bold text-decoration-none" href="{{ url('/basecamp/market/payment/'.$payment->invoice) }}">{{ $payment->invoice }}</a>
                                  </td>
                                  <td class="orders-product">
                                      {{ $payment->product->name }}
                                  </td>
                                  <td class="orders-total">
                                      {{ number_format((int)$payment->product->price * (int)$payment->qty, 0, ',', '.') }}
                                  </td>
                                  <td class="orders-date">
                                      {{ $payment->pay_at }}
                                  </td>
                                  <td class="orders-method">
                                      {{ $payment->pay_by }}
                                  </td>
                              </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
