@extends('client._components.master')
@section('content')
@include('client._components.top_nav')
<div class="container mb-5 px-xl-5">
    <div class="row mt-4" id="menu">
        <form class="card col-12 p-4 border-0 shadow-sm" action="{{ url('/getting-started') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        @include('client.getting_started._components.side_nav')
                    </div>
                    <div class="col-9 d-flex flex-column" style="min-height: 400px">
                        <div class="mb-3 flex-fill">
                            <label for="email_token" class="form-label">Token konfirmasi</label>
                            <input type="text" class="form-control" id="email_token" name="email_token">
                            @if (\Session::has('error'))
                                <small class="text-danger">{{ \Session::get('error') }}</small>
                            @endif
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
