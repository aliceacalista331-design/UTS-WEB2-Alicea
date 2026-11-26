@extends('layouts.app')

@section('title', $produk->nama . ' | Alicea Store')

@section('content')

<div class="row g-4 align-items-center">
    <div class="col-md-6">
        <img
            src="{{ $produk->gambar ? asset('storage/'.$produk->gambar) : 'https://placehold.co/600x400/fceaf2/9b5574?text=Alicea+Store' }}"
            alt="{{ $produk->nama }}"
            class="img-fluid rounded-4 w-100"
        >
    </div>

    <div class="col-md-6">
        <small class="text-muted">
            {{ $produk->kategori->nama }}
        </small>

        <h1 class="fw-bold mt-2">{{ $produk->nama }}</h1>

        <h3 class="brand-name">
            Rp{{ number_format($produk->harga, 0, ',', '.') }}
        </h3>

        <p class="mt-3">{{ $produk->deskripsi }}</p>

        <p>Stok tersedia: <strong>{{ $produk->stok }}</strong></p>

        <a href="{{ route('home') }}" class="btn btn-pink rounded-pill px-4">
            Kembali ke katalog
        </a>
    </div>
</div>

@endsection