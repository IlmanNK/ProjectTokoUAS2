<!-- resources/views/toko/jenisproduk/detail.blade.php -->

@extends('template.toko.index')

@section('content')
<br>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="../assets/foto/Vulcanize.png" alt="Vulcanize" />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h1 class="fw-bolder" style="font-family: Bebas Neue">Vulcanize</h1>
                            <!-- Product price-->
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="Vul">Liat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="../assets/foto/Sneakers.png" alt="Sneakers" />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h1 class="fw-bolder" style="font-family: Bebas Neue">Sneakers</h1>
                            <!-- Product price-->

                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="Sne">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="../assets/foto/Slip On.png" alt="Slip On" />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h1 class="fw-bolder" style="font-family: Bebas Neue">Slip On</h1>
                            <!-- Product price-->

                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="So">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@include('partial.script')
@endsection
