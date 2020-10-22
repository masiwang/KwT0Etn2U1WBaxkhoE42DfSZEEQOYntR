@extends('client._components.master')
@section('content')
@include('client._components.top_nav')
<div class="container mb-5 px-xl-5">
    <div class="row mt-4" id="menu">
        <form class="card col-12 p-4 border-0 shadow-sm" action="{{ url('/getting-started') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        @include('client.getting_started._components.side_nav')
                    </div>
                    <div class="col-9" id="root">
                        <div class="mb-3">
                            <label for="no_ktp" class="form-label">No. KTP</label>
                            <input v-model="no_ktp" type="text" class="form-control" name="no_ktp">
                        </div>
                        <div class="mb-3">
                            <label for="ktp_image" class="form-label">Foto KTP</label>
                            <input @change="handleFile" type="file" class="form-control" name="ktp_image">
                        </div>
                        <hr>
                        <div class="text-right">
                            <button v-show="isValid" class="btn btn-success" type="submit">Simpan</button>
                            <a v-show="!isValid" disabled class="btn btn-success disabled">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script>
            var root = new Vue({
                el: '#root',
                data(){
                    return {
                        no_ktp: '',
                        image: ''
                    }
                },
                methods: {
                    handleFile(e){
                        this.image = e.target.files[0]
                    }
                },
                computed:{
                    isValid(){
                        return (this.no_ktp && this.image)
                    }
                }
            });
        </script>
    </div>
</div>
@include('client._components.footer')
@endsection
