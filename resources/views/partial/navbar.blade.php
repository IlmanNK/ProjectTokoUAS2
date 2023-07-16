<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container px-10 px-lg-10">
        <a class="navbar-brand" href="/home">Aphelion Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4" style="font-family: Roboto, sans-serif; font-size: 20px;">
                <li class="nav-item "><a class="nav-link " href="/home">Home</a></li>
                <li class="nav-item "><a class="nav-link" href="/tentang">Tentang</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Artikel</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Artikel</a></li>
                        {{-- <li><hr class="dropdown-divider" /></li> --}}
                        <li><a class="dropdown-item" href="/produk/NewProduk">Produk Terbaru</a></li>
                        <li><a class="dropdown-item" href="/produk/JenisProduk">Jenis Sepatu</a></li>
                    </ul>
                </li>
            </ul>
            
            {{-- <form class="d-flex">
                <button class="btn btn-outline-light" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-black text-white ms-1 rounded-pill">0</span>
                </button>
            </form> --}}
        
            
            @if (Auth::user()->role == 'admin')
      <a href=" {{ route('produk.admin') }}" class="btn btn-primary mx-3 my-3">ADMIN</a>
      @else
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
      @endif


    
        </div>
    </div>
</nav>