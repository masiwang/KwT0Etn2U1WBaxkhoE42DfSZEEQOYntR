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
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="row mb-3">
                            <div class="col-xl-6">
                                <label for="phone" class="form-label">Tanggal Lahir</label>
                                <input id="datepicker" class="form-control" name="birthday"/>
                                <script>
                                    $("#datepicker").flatpickr();
                                </script>
                            </div>
                            <div class="col-xl-6">
                                <p class="form-label">Jenis kelamin</p>
                                <input type="hidden" name="gender">
                                <select class="form-select"  id="gender" name="gender">
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="job" class="form-label">Pekerjaan</label>
                            <select class="form-select"  id="job" name="job" aria-label="Default select example">
                                <option value="karyawan">Karyawan</option>
                                <option value="pelajar">Pelajar</option>
                                <option value="petani">Petani</option>
                                <option value="pns">PNS</option>
                                <option value="wirausaha">Wirausaha</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
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
