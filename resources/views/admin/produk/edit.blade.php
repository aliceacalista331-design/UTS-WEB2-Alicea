@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')

<div class="card border-0 shadow-sm rounded-4 p-4">
    <h2 class="fw-bold mb-4">Edit Produk</h2>

    <form action="{{ route('admin.produk.update', $produk) }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('admin.produk.form')

        <button class="btn btn-pink">Simpan Perubahan</button>
        <a href="{{ route('admin.produk.index') }}"
            class="btn btn-light">Kembali</a>
    </form>
</div>

@endsection