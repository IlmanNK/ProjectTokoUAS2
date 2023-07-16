<!-- resources/views/toko/jenisproduk/detail.blade.php -->

@extends('template/main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Tampilkan gambar produk -->
                <img src="{{ asset('storage/gambar/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}"
                    class="img-fluid">
            </div>
            <div class="col-md-6">
                <!-- Tampilkan detail produk -->
                <h2>{{ $produk->nama_produk }}</h2>
                <p>Harga: RP. {{ $produk->harga_produk }}</p>
                <p>Stok: {{ $produk->stok_produk }}</p>
                <p>Deskripsi: {{ $produk->deskripsi_produk }}</p>
                <!-- Tambahkan tombol atau tautan lain yang diperlukan -->
            </div>
        </div>
    </div>
@endsection
