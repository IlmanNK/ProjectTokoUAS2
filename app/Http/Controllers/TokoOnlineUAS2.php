<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produk;


class TokoOnlineUAS2 extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function admin()
    {
        $produk = Produk::all();
        return view('toko/admin', compact('produk'));
    }

    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
            'min_stok' => 'required',
            'deskripsi_produk' => 'required',
            // 'kategori_produk_id' => 'required',
        ]);

        Produk::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Produk berhasil disimpan');
    }

    public function edit(Produk $produk)
    {
        return view('toko/edit', compact('produk'));
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk.admin')->with('delete', 'Produk berhasil dihapus');
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'kode' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
            'min_stok' => 'required',
            'deskripsi_produk' => 'required',
        ]);

        $produk->update($request->all());
        return redirect()->route('produk.admin')->with('update', 'Product updated successfuly');
    }
}