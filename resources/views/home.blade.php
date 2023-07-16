@extends('template.main')


@section('content1')
    @include('partial.bg')
@endsection
@section('content2')
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="jumbroton">
                <p>Selamat datang di Aphelion Store, destinasi yang sempurna untuk menemukan sepatu vulcanize, sneakers, dan
                    slip-on yang akan memenuhi kebutuhan gaya dan kenyamanan Anda. Dengan desain klasik dan sentuhan retro,
                    sepatu vulcanize kami menghadirkan pesona yang tak tergoyahkan, sementara sneakers kami menggabungkan
                    teknologi modern dengan gaya yang dinamis. Untuk kenyamanan sehari-hari tanpa ribet mengikat tali
                    sepatu, slip-on kami adalah pilihan yang tepat. Jangan lewatkan penawaran spesial kami, termasuk diskon
                    20% untuk pembelian pertama Anda dengan kode promosi "APH20". Nikmati juga pengiriman gratis untuk semua
                    pembelian. Kunjungi Aphelion Store sekarang dan temukan sepatu yang memancarkan semangat petualangan dan
                    menghadirkan gaya yang tak tertandingi.</p>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="font-family: 'Franklin Gothic Medium', sans-serif">
        <h1 class="text-center fw-bold bg-black text-light p-3">Dapatkan Rilisan Terbaru</h1>
    </div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route(('produk.Vul')) }}">Liat Produk</a>
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
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('produk.Sne') }}">Lihat Produk</a>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('produk.So') }}">Lihat Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"></h5>
                                <!-- Product price-->

                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Lihat Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> --}}
@endsection
