@extends('layouts.app')

@section('title', 'Admin Produk | Alicea Store')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold">Admin Produk</h2>
        <p class="text-muted">Kelola katalog Alicea Store</p>
    </div>

    <a href="{{ route('admin.produk.create') }}" class="btn btn-pink">
        + Tambah Produk
    </a>
</div>

<div class="table-responsive bg-white rounded-4 p-3">
    <table class="table align-middle">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($produks as $produk)
                <tr>
                    <td>
                        @if($produk->gambar)
                            <img src="{{ asset('storage/'.$produk->gambar) }}"
                                width="60" height="60"
                                style="object-fit:cover;border-radius:10px">
                        @else
                            <span>🎀</span>
                        @endif
                    </td>

                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->kategori->nama }}</td>
                    <td>Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
                    <td>{{ $produk->stok }}</td>

                    <td>
                        <a href="{{ route('admin.produk.edit', $produk) }}"
                            class="btn btn-sm btn-outline-secondary">
                            Edit
                        </a>

                        <form action="{{ route('admin.produk.destroy', $produk) }}"
                            method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-sm btn-outline-danger">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">
                        Belum ada produk.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection