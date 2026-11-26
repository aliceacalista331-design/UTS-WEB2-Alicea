@extends('layouts.app')

@section('title', 'Alicea Store | Aksesoris Cantik')

@section('content')

<section class="hero mb-5">
    <div class="row align-items-center">
        <div class="col-md-7">
            <p class="text-uppercase small fw-bold" style="color:#b76e91">
                Welcome to Alicea Store
            </p>

            <h1 class="display-5 fw-bold">
                Little things,<br>big happiness.
            </h1>

            <p class="mt-3">
                Temukan aksesoris manis untuk melengkapi gaya sehari-harimu.
                Dari phone charm hingga scrunchie, semuanya dipilih dengan
                sentuhan feminin dan elegan.
            </p>

            <a href="#katalog" class="btn btn-pink rounded-pill px-4">
                Lihat Katalog
            </a>
        </div>

        <div class="col-md-5 text-center mt-4 mt-md-0">
            <div style="font-size:100px">🎀</div>
            <h4 class="brand-name">Alicea Store</h4>
            <p class="text-muted">Your daily little accessories</p>
        </div>
    </div>
</section>

<section id="katalog">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Our Collection</h2>
            <p class="text-muted mb-0">Aksesoris pilihan untukmu</p>
        </div>
    </div>

    <div class="row g-4">
        @forelse($produks as $produk)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card product-card h-100">
                    <img
                        class="product-image"
                        src="{{ $produk->gambar ? asset('storage/'.$produk->gambar) : 'https://placehold.co/600x400/fceaf2/9b5574?text=Alicea+Store' }}"
                        alt="{{ $produk->nama }}"
                    >

                    <div class="card-body">
                        <small class="text-muted">
                            {{ $produk->kategori->nama }}
                        </small>

                        <h5 class="mt-2">{{ $produk->nama }}</h5>

                        <p class="fw-bold brand-name">
                            Rp{{ number_format($produk->harga, 0, ',', '.') }}
                        </p>

                        <p class="small text-muted">
                            Stok: {{ $produk->stok }}
                        </p>

                        <a href="{{ route('produk.show', $produk->slug) }}"
                            class="btn btn-pink rounded-pill w-100">
                            Detail Produk
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Belum ada produk tersedia.
                </div>
            </div>
        @endforelse
    </div>
</section>

@endsection