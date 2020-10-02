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
                            <label for="jalan" class="form-label">Jalan</label>
                            <input type="text" class="form-control" id="jalan" name="jalan">
                        </div>
                        <div class="row mb-3">
                            <div class="col-xl-6">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input class="form-control" list="provinsiList" name="provinsi" id="provinsi" placeholder="Ketik untuk mencari...">
                                <datalist id="provinsiList">
                                </datalist>
                            </div>
                            <div class="col-xl-6">
                                <label for="kabupaten" class="form-label">Kabupaten/ Kota</label>
                                <input class="form-control" list="kabupatenList" name="kabupaten" id="kabupaten" placeholder="Ketik untuk mencari...">
                                <datalist id="kabupatenList">
                                </datalist>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-xl-4">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input class="form-control" list="kecamatanList" name="kecamatan" id="kecamatan" placeholder="Ketik untuk mencari...">
                                <datalist id="kecamatanList">
                                </datalist>
                            </div>
                            <div class="col-xl-4">
                                <label for="kelurahan" class="form-label">Desa/ Kelurahan</label>
                                <input class="form-control" list="kelurahanList" name="kelurahan" id="kelurahan" placeholder="Ketik untuk mencari...">
                                <datalist id="kelurahanList">
                                </datalist>
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
                        <script>
                            function myFetch(url, data, handle){
                                $.ajax({
                                    type: "get",
                                    url: url,
                                    data: data,
                                    dataType: "json",
                                    success: function (response) {
                                        handle(response);
                                    }
                                });
                            }
                            var token = $('meta[name="_token"]').attr('content');
                            var provinsi = $('input[name="provinsi"]');
                            var provinsiList = $('#provinsiList');
                            $(document).ready(function(){
                                myFetch('/api/provinsi', {}, function(response){
                                    var html = '';
                                    response.map(
                                        (e) => (
                                            html += `<option value="${e.provinsi}">`
                                        )
                                    );
                                    provinsiList.html(html);
                                });
                            });
                            var kabupaten = $('input[name="kabupaten"]');
                            var kabupatenList = $('#kabupatenList');
                            provinsi.on('change', function(){
                                myFetch('/api/kabupaten', {
                                    'provinsi': provinsi.val(),
                                    '_token': token
                                }, function(response){
                                    var html = '';
                                    response.map(
                                        (e) => (
                                            html += `<option value="${e.kabupaten}">`
                                        )
                                    );
                                    kabupatenList.html(html);
                                })
                            });
                            var kecamatan = $('input[name="kecamatan"]');
                            var kecamatanList = $('#kecamatanList');
                            kabupaten.on('change', function(){
                                myFetch('/api/kecamatan', {
                                    'provinsi': provinsi.val(),
                                    'kabupaten': kabupaten.val(),
                                    '_token': token
                                }, function(response){
                                    var html = '';
                                    response.map(
                                        (e) => (
                                            html += `<option value="${e.kecamatan}">`
                                        )
                                    );
                                    kecamatanList.html(html);
                                })
                            });
                            var kelurahan = $('input[name="kelurahan"]');
                            var kelurahanList = $('#kelurahanList');
                            kecamatan.on('change', function(){
                                myFetch('/api/kelurahan', {
                                    'provinsi': provinsi.val(),
                                    'kabupaten': kabupaten.val(),
                                    'kecamatan': kecamatan.val(),
                                    '_token': token
                                }, function(response){
                                    var html = '';
                                    response.map(
                                        (e) => (
                                            html += `<option value="${e.kelurahan}">`
                                        )
                                    );
                                    kelurahanList.html(html);
                                })
                            });
                            var kodepos = $('input[name="kodepos"]');
                            kelurahan.on('change', function(){
                                myFetch('/api/kodepos', {
                                    'provinsi': provinsi.val(),
                                    'kabupaten': kabupaten.val(),
                                    'kecamatan': kecamatan.val(),
                                    'kelurahan': kelurahan.val(),
                                    '_token': token
                                }, function(response){
                                    kodepos.val(response.kodepos);
                                })
                            });
                        </script>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@include('client._components.footer')
@endsection