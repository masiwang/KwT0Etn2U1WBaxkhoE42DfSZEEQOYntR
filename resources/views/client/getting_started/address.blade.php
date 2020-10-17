@extends('client._components.master')
@section('content')
@include('client._components.top_nav')
<div class="container mb-5 px-xl-5">
    <div class="row mt-4" id="menu">
        <div id="root">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        @include('client.getting_started._components.side_nav')
                    </div>
                    <div class="col-9">
                        <div class="mb-3">
                            <label for="jalan" class="form-label">Jalan</label>
                            <input type="text" class="form-control" v-model="jalan" name="jalan">
                        </div>
                        <div class="row mb-3">
                            <div class="col-xl-6">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input class="form-control" list="provinsiList" v-model="provinsi" @change="getKabupaten" placeholder="Ketik untuk mencari...">
                                <datalist id="provinsiList">
                                    <option v-for="provinsi in provinsiList" :value="provinsi.provinsi"></option>
                                </datalist>
                            </div>
                            <div class="col-xl-6">
                                <label for="kabupaten" class="form-label">Kabupaten/ Kota</label>
                                <input class="form-control" list="kabupatenList" v-model="kabupaten" @change="getKecamatan" placeholder="Ketik untuk mencari...">
                                <datalist id="kabupatenList">
                                    <option v-for="kabupaten in kabupatenList" :value="kabupaten.kabupaten"></option>
                                </datalist>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-xl-4">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input class="form-control" list="kecamatanList" v-model="kecamatan" @change="getKelurahan" placeholder="Ketik untuk mencari...">
                                <datalist id="kecamatanList">
                                    <option v-for="kecamatan in kecamatanList" :value="kecamatan.kecamatan"></option>
                                </datalist>
                            </div>
                            <div class="col-xl-4">
                                <label for="kelurahan" class="form-label">Desa/ Kelurahan</label>
                                <input class="form-control" list="kelurahanList" v-model="kelurahan" @change="getKodepos" placeholder="Ketik untuk mencari...">
                                <datalist id="kelurahanList">
                                    <option v-for="kelurahan in kelurahanList" :value="kelurahan.kelurahan"></option>
                                </datalist>
                            </div>
                            <div class="col-xl-4">
                                <label for="kodepos" class="form-label">Kode pos</label>
                                <input type="text" class="form-control" :value="kodepos">
                            </div>
                        </div>
                        <hr>
                        <div class="text-right">
                            <button class="btn btn-success" @click="save">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('client._components.footer')
@endsection
@section('bottom-script')
    <script>
        var _base = document.querySelector('base').getAttribute('href');
        var _token = document.querySelector('meta[name="_token"]').getAttribute('content');
        var script = new Vue({
            el: '#root',
            data(){
                return {
                    provinsiList: [],
                    kabupatenList: [],
                    kecamatanList: [],
                    kelurahanList: [],
                    jalan: '',
                    provinsi: '',
                    kabupaten: '',
                    kecamatan: '',
                    kelurahan: '',
                    kodepos: '',
                }
            },
            mounted(){
                this.getProvinsi();
            },
            methods: {
                getProvinsi: function(){
                    axios.get(_base+'/api/provinsi')
                    .then(
                        response => {
                            response.data.map(
                                data => this.provinsiList.push(data)
                            )
                        }
                    )
                },
                getKabupaten: function(){
                    axios.get(_base+'/api/kabupaten', {
                        params: {
                            provinsi: this.provinsi
                        }
                    })
                    .then(
                        response => {
                            response.data.map(
                                data => this.kabupatenList.push(data)
                            )
                        }
                    )
                },
                getKecamatan: function(){
                    axios.get(_base+'/api/kecamatan', {
                        params: {
                            provinsi: this.provinsi,
                            kabupaten: this.kabupaten
                        }
                    })
                    .then(
                        response => {
                            response.data.map(
                                data => this.kecamatanList.push(data)
                            )
                        }
                    )
                },
                getKelurahan: function(){
                    axios.get(_base+'/api/kelurahan', {
                        params: {
                            provinsi: this.provinsi,
                            kabupaten: this.kabupaten,
                            kecamatan: this.kecamatan
                        }
                    })
                    .then(
                        response => {
                            response.data.map(
                                data => this.kelurahanList.push(data)
                            )
                        }
                    )
                },
                getKodepos: function(){
                    axios.get(_base+'/api/kodepos', {
                        params: {
                            provinsi: this.provinsi,
                            kabupaten: this.kabupaten,
                            kecamatan: this.kecamatan,
                            kelurahan: this.kelurahan
                        }
                    })
                    .then(
                        response => {
                            this.kodepos = response.data.kodepos
                        }
                    )
                },
                save: function(){
                    axios.post(_base+'/v1/getting-started/2', {
                        provinsi: this.provinsi,
                        kabupaten: this.kabupaten,
                        kecamatan: this.kecamatan,
                        kelurahan: this.kelurahan,
                        kodepos: this.kodepos,
                        jalan: this.jalan,
                        _token: _token
                    }, {
                        validateStatus: function(status){
                            return status
                        }
                    })
                    .then(
                        response => {
                            console.log(response.status)
                            if(response.status === 200){
                                window.location.replace(_base+'/getting-started');
                            }
                        }
                    );
                }
            }
        });
    </script>
@endsection