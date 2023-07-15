<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function NewProduk()
    {
        $produk = Produk::all();
        // $produk = Produk::orderBy('created_at', 'desc')->get();
        return view('produk/NewProduk', compact('produk'));
    }
}