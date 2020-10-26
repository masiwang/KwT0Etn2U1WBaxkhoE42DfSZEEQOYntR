@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3 bg-light" style="margin-left: 250px; min-height: 100%">
    <div class="header mb-3" style="border-bottom:1px solid rgb(227, 235, 246)">
        <div class="container-fluid">
            <div class="header-body py-3">
                <div class="row d-flex align-items-end">
                    <div class="col">
                        <h6 class="mb-0">CLIENT</h6>
                        <h1>Verifikasi KTP Client</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-flex align-items-stretch">
            <div class="col-12 col-xl-12">
                <div class="card p-4" id="index">
                    <div class="row">
                        <div class="col-3">
                            <img :src="client.ktp_image" style="width: 100%" alt="" srcset="">
                        </div>
                        <div class="col-9">
                            <h3 class="border-bottom">{{$client->name }} <span v-show="isVerified" class="text-success">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                </span>
                            </h3>
                            <table class="table table-borderless">
                                <tr>
                                    <td><strong>Alamat</strong></td>
                                    <td>{{$client->jalan.', '.$client->kelurahan.', '.$client->kecamatan.', '.$client->kabupaten.', '.$client->kodepos }}</td>
                                </tr>
                                <tr>
                                    <td><strong>No. KTP</strong></td>
                                    <td>{{$client->ktp }}</td>
                                </tr>
                                <tr>
                                    <form action="/basecamp/client/ktp/{{$client->ktp}}" method="POST">
                                        @csrf
                                        <td>
                                            <input class="btn btn-success"type='submit' value='Konfirmasi'>
                                            
                                        </td>
                                        <td>
                                            <input name="password" type="password" class="form-control" placeholder="password">
                                        </td>
                                    </form>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            TODO: Funding history
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
