@extends('template.main')


<!-- resources/views/toko/jenisproduk/detail.blade.php -->



@section('content2')
<div class="container-fluid ">
    <div class="col-md-10 mx-auto">
        {{-- <div class="container-fluid"> --}}
        <div class="row">
            @foreach ($produkSne as $product)
                <div class="col-md-4 mb-5">
                    <div class="card h-80">
                        <!-- Product image -->
                        <img class="card-img-top" src="{{ asset('storage/'. $product->gambar) }}"
                            alt="{{ $product->nama_produk }}"  width="300" height="350"/>
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h3 class="fw-bolder" style="font-family: Bebas Neue">{{ $product->nama_produk }}
                                </h3>
                                <!-- Product price -->
                                <p>Harga: RP. {{ $product->harga_produk }}</p>
                                <!-- Product stock -->
                                <p>Stok: {{ $product->stok_produk }}</p>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- </div> --}}
    </div>
</div>
@endsection

