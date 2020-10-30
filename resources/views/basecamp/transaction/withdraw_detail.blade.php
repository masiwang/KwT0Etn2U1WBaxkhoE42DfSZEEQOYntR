@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3" style="margin-left: 250px; background-color: #f9fbfd; min-height: 100vh">
    <div class="container-fluid">
        <div class="header mb-4" style="border-bottom:1px solid rgb(227, 235, 246)">
            <div class="container-fluid">
                <div class="header-body py-3">
                    <div class="row d-flex align-items-end">
                        <div class="col">
                            <h6 class="mb-0 subtitle">KONFIRMASI</h6>
                            <h1>Withdraw Confirm</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="root" class="row my-3">
            <div class="col-12 col-lg-4 col-xl-4">
                <img src="{{$withdraw->image}}" alt="" style="width: 100%">
            </div>
            <div class="col-12 col-lg-8">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th>User</th>
                            <td>{{ $withdraw->user_id }}</td>
                        </tr>
                        <tr>
                            <th>Bank</th>
                            <td>{{ $withdraw->bank_type }}</td>
                        </tr>
                        <tr>
                            <th>No. Rekening</th>
                            <td>{{ $withdraw->bank_acc }}</td>
                        </tr>
                        <tr>
                            <th>Nominal</th>
                            <td>{{ $withdraw->nominal }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right">
                <a href="/basecamp/transaction/topup/{{$withdraw->id}}/confirm" class="btn btn-success">Konfirmasi</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
