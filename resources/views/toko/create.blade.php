@extends('template/admin/index')

@section('content')
<<<<<<< HEAD
<div style="background-color: orange">
  <h3 style="color:rgb(255, 255, 255); margin:10px">Tambah Produk</h3>
</div>
<form action="{{ route("produk.store")}}" method="POST">
<h1>Tambah Produk</h1>

<form action="{{ route("products.store")}}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode :</label>
        <div class="col-8">
            <input type="text" name="kode" id="kode" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_produk" class="col-4 col-form-label">Nama Produk :</label>
        <div class="col-8">
            <input type="text" name="nama_produk" id="nama_produk" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_produk" class="col-4 col-form-label">Harga Produk :</label>
        <div class="col-8">
            <input type="text" name="harga_produk" id="nama_produk" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="stok_produk" class="col-4 col-form-label">Stok Produk :</label>
        <div class="col-8">
            <input type="text" name="stok_produk" id="stok_produk" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Min Stok :</label>
        <div class="col-8">
            <input type="text" name="min_stok" id="min_stok" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="deskripsi_produk" class="col-4 col-form-label">Deskripsi :</label> 
        <div class="col-8">
          <textarea id="textarea" name="deskripsi_produk" cols="40" rows="5" class="form-control"></textarea>
        </div>
    </div> 
    {{-- <div class="form-group row">
        <label class="col-4">Kategori Produk</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="kategori_produk_id" id="kategori_produk_id_0" type="radio" class="custom-control-input" value="slip on"> 
            <label for="kategori_produk_id_0" class="custom-control-label">Slip On</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="kategori_produk_id" id="kategori_produk_id_1" type="radio" class="custom-control-input" value="sneakers"> 
            <label for="kategori_produk_id_1" class="custom-control-label">Sneakers</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="kategori_produk_id" id="kategori_produk_id_2" type="radio" class="custom-control-input" value="vulcanize"> 
            <label for="kategori_produk_id_2" class="custom-control-label">Vulcanize</label>
          </div>
        </div>
      </div>  --}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection