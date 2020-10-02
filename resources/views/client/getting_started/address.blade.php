@extends('client._components.master')
@section('content')
@include('client._components.top_nav')
<div class="container mb-5 px-xl-5">
    <div class="row mt-4" id="menu">
        <form class="card col-12 p-4 border-0 shadow-sm" action="{{ url('/getting-started') }}">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        @include('client.getting_started._components.side_nav')
                    </div>
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="address" class="form-label">Jalan</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="row mb-3">
                            <div class="col-xl-6">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi">
                            </div>
                            <div class="col-xl-6">
                                <label for="kabupaten" class="form-label">Kabupaten/ Kota</label>
                                <input type="text" class="form-control" id="kabupaten" name="kabupaten">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-xl-4">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                            </div>
                            <div class="col-xl-4">
                                <label for="kelurahan" class="form-label">Desa/ Kelurahan</label>
                                <input type="text" class="form-control" id="kelurahan" name="kelurahan">
                            </div>
                            <div class="col-xl-4">
                                <label for="kodepos" class="form-label">Kode pos</label>
                                <input type="text" class="form-control" id="kodepos" name="kodepos">
                            </div>
                        </div>
                        <hr>
                        <div class="text-right">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@include('client._components.footer')
@endsection