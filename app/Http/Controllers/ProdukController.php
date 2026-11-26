<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::with('kategori')
            ->where('stok', '>', 0)
            ->latest()
            ->get();

        return view('produk.index', compact('produks'));
    }

    public function show(Produk $produk)
    {
        $produk->load('kategori');

        return view('produk.detail', compact('produk'));
    }
}