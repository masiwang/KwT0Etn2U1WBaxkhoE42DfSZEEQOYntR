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
                            <label for="no_ktp" class="form-label">No. KTP</label>
                            <input type="text" class="form-control" id="no_ktp" name="no_ktp">
                        </div>
                        <div class="mb-3">
                            <label for="ktp_image" class="form-label">Foto KTP</label>
                            <input type="file" class="form-control" id="ktp_image" name="ktp_image">
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
