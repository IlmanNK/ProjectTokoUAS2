<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;


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
        $produk = Admin::all();
        return view('toko/admin', compact('produk'));
    }

    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Admin::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Produk berhasil disimpan');
    }

}