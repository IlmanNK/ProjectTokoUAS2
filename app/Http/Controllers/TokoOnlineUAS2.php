<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produk;


class TokoOnlineUAS2 extends Controller
{

    // public function showProduk()
    // {
    //     $produk = new Produk();
    //     $produk->nama_produk = 'Nama Produk';
    //     $produk->harga_produk = 'Harga Produk';
    //     $produk->stok_produk = 'Stok Produk';
    //     $produk->min_stok = 'Minimal stok Produk';
    //     $produk->deskripsi_produk = 'Deskripsi';
    //     // $produk->kategori_produk_id = 'Kategori Produk';


    //     return view('template.main')->with('produk', $produk);
    // }

    // public function index()
    // {
    //     return view('toko/index');
    // }

    // public function detail()
    // {
    //     return view('toko/detail');
    // }

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


        $validatedData = $request->validate([
            // 'kode' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required |numeric',
            'stok_produk' => 'required |numeric',
            'min_stok' => 'required |numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_produk' => 'required',
            // 'kategori_produk_id' => 'required',
        ]);

        // Simpan gambar ke dalam database
        $gambar = $request->file('gambar');
        $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->storeAs('public/gambar', $gambarName);

        if ($request->file('gambar')) {
            $request->all()['gambar'] = $request->file('gambar')->store('post-gambar');
        }

        Produk::create($validatedData);
        return redirect()->route('toko.admin')->with('success', 'Produk berhasil disimpan');
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
            // 'kode' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
            'min_stok' => 'required',
            // 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_produk' => 'required',
        ]);

        

        $produk->update($request->all());
        return redirect()->route('produk.admin')->with('update', 'Product updated successfuly');
    }
}
