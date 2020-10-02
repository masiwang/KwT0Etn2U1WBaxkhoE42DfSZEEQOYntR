@extends('client._components.master')
@section('content')
    @include('client._components.top_nav')
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: transparent">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Akun</li>
                    </ol>
                </nav>
            </div>
            <hr>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <div class="row p-3">
                    <div class="col-3 shadow-sm bg-white">
                        @include('client.dashboard.profile._components.side_nav')
                    </div>
                    <div class="col-9 bg-white shadow-sm p-3">
                        <form class="card h-100 border-0" action="{{ url('/profile') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                    </div>
                                    <div class="col-6">
                                        <label for="phone" class="form-label">Tanggal Lahir</label>
                                        <input id="datepicker" class="form-control" name="birthday" placeholder="{{ $user->birthday }}"/>
                                        <script>
                                            $("#datepicker").flatpickr();
                                        </script>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control disabled" id="email" name="email" disabled value="{{ $user->email }}">
                                    </div>
                                    <div class="col-6">
                                        <label for="phone" class="form-label">Nomor Ponsel</label>
                                        <input type="phone" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <p class="form-label">Jenis kelamin</p>
                                    <input type="hidden" name="gender">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" @if ($user->gender == 1) {{ 'checked' }} @endif type="radio"  id="genderMale">
                                        <label class="form-check-label" for="genderMale"><i class="fas fa-mars text-primary"></i></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"  @if ($user->gender == 2) {{ 'checked' }} @endif id="genderFemale">
                                        <label class="form-check-label" for="genderFemale"><i class="fas fa-venus text-danger"></i></label>
                                    </div>
                                    <script>
                                        var gender = $('input[name="gender"]')
                                        var male = $('#genderMale');
                                        var female = $('#genderFemale');
                                        male.click(function(){
                                            if( male.prop('checked') ){ gender.val(1) }
                                        });
                                        female.click(function(){
                                            if( female.prop('checked') ){ gender.val(2) }
                                        });
                                    </script>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-6">
                                        <label for="ktp" class="form-label">Kartu Tanda Penduduk</label>
                                        <input type="text" class="form-control" name="ktp" id="ktp" @if ($user->ktp) ?: {{'disabled'}} @endif placeholder="Nomor KTP" value="{{ $user->ktp }}">
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label text-white">&nbsp;</label><br>
                                        @if ($user->ktp_image)
                                            <img src="" alt="" srcset="">
                                        @else
                                            <button class="btn btn-success">Upload Scan KTP</button>
                                        @endif
                                    </div>
                                    <small class="text-info pt-1">*KTP diperlukan apabila Anda ingin berinvestasi di Makarya</small>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-white">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('client._components.footer')
@endsection