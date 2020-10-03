@extends('basecamp._components.master')
@section('content')
@include('basecamp._components.side_nav')
<div class="main-content p-3" style="margin-left: 250px; background-color: #f9fbfd">
    <div class="container-fluid">
        <div class="header mb-4" style="border-bottom:1px solid rgb(227, 235, 246)">
            <div class="container-fluid">
                <div class="header-body py-3">
                    <div class="row d-flex align-items-end">
                        <div class="col">
                            <h6 class="mb-0 subtitle">PRODUK MARKET</h6>
                            <h1>Ubah Produk Market</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-lg-10 col-xl-8">
                <form class="mb-4" action="{{ url('/basecamp/market/product/'.$product->slug.'/edit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product" value="{{ $product->slug }}">
                    <div class="form-group mb-4">
                        <label>Nama produk</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="form-group mb-4">
                        <label class="mr-2">Deskripsi produk</label>
                        <small class="text-muted">
                            Tulis menggunakan bahasa HTML
                        </small>
                        <textarea class="form-control" name="description" rows="3">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label>Kategori produk</label>
                        <select class="form-select form-select-sm" name="category_id" aria-label=".form-select-sm example">
                            @foreach ($categories as $category)
                                @if ($category->id == $product->category_id)
                                <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-4">
                        <div class="col-4">
                            <label>Harga per satuan</label>
                            <input type="number" class="form-control" name="price" placeholder="Rp." value="{{ $product->price }}">
                        </div>
                        <div class="col-4">
                            <label>Stock</label>
                            <input type="number" class="form-control" name="stock" placeholder="0" value="{{ $product->stock }}">
                        </div>
                        <div class="col-4">
                            <label>Satuan</label>
                            <input type="text" class="form-control" name="size" value="{{ $product->size }}">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="mr-2">Foto produk</label><br/>
                        <img src="{{ asset($product->image) }}" alt="" height="180px"><br/>
                        <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editImage">Ubah foto produk</a>
                    </div>
                    <hr class="mt-5 mb-5">
                    <button type="submit" class="btn btn-block btn-primary">
                        Simpan produk
                    </button>
                    <a href="#" class="btn btn-block btn-link text-muted text-decoration-none">
                        Batal
                    </a>
                </form>
            </div>
        </div> <!-- / .row -->
    </div>
</div>
<div class="modal fade" id="editImage" tabindex="-1" aria-labelledby="editImageLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <form class="modal-content" action="{{ url('/basecamp/market/product/'.$product->slug.'/edit_image') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Foto Produk</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>    
            <div class="modal-body">
                <input type="hidden" name="product" value="{{ $product->slug }}">
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</a>
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            </div>
      </form>
    </div>
  </div>
@endsection
