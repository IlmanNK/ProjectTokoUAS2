<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TokoOnlineUAS2;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function NewProduk()
    {
        $produk = Produk::all();
        // $produk = Produk::orderBy('created_at', 'desc')->get();
        return view('produk/NewProduk', compact('produk'));
    }

    // TokoOnlineUAS2.php
    public function showProduk($kode)
    {
        // Ambil data produk dari database berdasarkan kode
        $produk = Produk::where('kode', $kode)->first();

        // Jika produk tidak ditemukan, bisa ditambahkan penanganan error sesuai kebutuhan
        if (!$produk) {
            abort(404, 'Produk tidak ditemukan');
        }

        // Kirim data produk ke halaman 'detail' untuk ditampilkan
        return view('toko/detail', compact('produk'));

        
    }
    public function JenisProduk(){
        
        $produk = Produk::all();
        return view('produk/JenisProduk', compact('produk'));
    }
}
