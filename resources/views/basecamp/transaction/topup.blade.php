@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3 bg-light" style="margin-left: 250px">
    @include('basecamp.transaction._components.header')    
    <div class="container-fluid">
        <div class="row d-flex align-items-stretch">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="table-responsive mb-0" style="overflow-y: auto; height: 400px">
                        <table id="root" class="table table-sm table-nowrap table-hover card-table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="products-sales">
                                            &nbsp;
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="products-product">
                                            ID User
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort asc" data-sort="products-stock">
                                            Akun Bank
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort asc" data-sort="products-stock">
                                            No. Rekening
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted list-sort" data-sort="products-price">
                                            Nominal
                                        </a>
                                    </th>
                                    <th>
                                        <a  class="text-muted list-sort" data-sort="products-sales">
                                            &nbsp;
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($transactions as $topup)
                                <tr>
                                    <td>{{ $topup->created_at }}</td>
                                    <td>{{ $topup->user_id }}</td>
                                    <td>{{ $topup->bank_type}}</td> 
                                    <td>{{ $topup->bank_acc }}</td>
                                    <td>{{ $topup->nominal }}</td>
                                <td><a href="/basecamp/transaction/topup/{{$topup->id}}" class="btn btn-success btn-sm">Detail</a></td>
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
@endsection
