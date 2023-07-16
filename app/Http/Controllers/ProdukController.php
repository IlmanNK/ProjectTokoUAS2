<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\TokoOnlineUAS2;
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
    // TokoOnlineUAS2.php
    // public function showProdukVul()
    // {
    //     // Ambil data produk dari database berdasarkan kode 'Vul'
    //     $produkVul = Produk::where('kode', 'Vul')->get();

    //     return view('vul', compact('produkVul'));
    // }




    public function JenisProduk()
    {

        $produk = Produk::all();
        return view('produk/JenisProduk', compact('produk'));
    }
    // public function Vul()
    // {
    //     $produk = Produk::all();
    //     $produk = Produk::where('kode', 'Vul')->get();
    //     return view('produk.Vul', compact('produk'));
    // }

    // TokoOnlineUAS2.php
    public function showProdukVul()
    {
        // Ambil data produk dari database berdasarkan kode 'Vul'
        $produk = Produk::all();
        $produkVul = Produk::where('kode', 'Vul')->get();

        return view('produk.Vul', compact('produkVul'));
    }
    public function showProdukSne()
    {
        $produk = Produk::all();
        $produkSne = Produk::where('kode', 'Sne')->get();
        return view('produk.Sne', compact('produkSne'));
    }

    public function showProdukSo()
    {
        $produk = Produk::all();
        $produkSo = Produk::where('kode', 'So')->get();
        return view('produk.So', compact('produkSo'));
    }
}

