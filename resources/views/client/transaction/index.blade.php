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
                  </ul>
            </div>
            <hr>
            <div class="col-sm-12 bg-white shadow-sm py-3">
                <table id="Example1" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Tipe Transaksi</th>
                            <th>Akun Bank</th>
                            <th>No Rekening</th>
                            <th>Nominal</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Waktu Konfirmasi</th>
                            {{-- <th>&nbsp;</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->created_at }}</td>
                            <td>{{ ($transaction->type == 'in') ? 'Masuk' : 'Keluar'}}</td>
                            <td>{{ $transaction->bank_type }}</td>
                            <td>{{ $transaction->bank_acc }}</td>
                            <td>Rp.{{ $transaction->nominal }},00</td>
                            <td>{{ $transaction->description }}</td>
                            <td>{{ $transaction->status->name }}</td>
                            <td>{{ $transaction->approved_at }}</td>
                            {{-- <td><a href="">Detail</a></td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(function () {
          $('#example1').DataTable()
          $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
          })
        })
      </script>
    @include('client._components.footer')
@endsection