@if($errors->any())
    <div class="alert alert-danger">
        <strong>Periksa kembali input kamu:</strong>
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-3">
    <label class="form-label">Nama Produk</label>
    <input type="text" name="nama" class="form-control"
        value="{{ old('nama', $produk->nama ?? '') }}" required maxlength="100">
</div>

<div class="mb-3">
    <label class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control"
        value="{{ old('slug', $produk->slug ?? '') }}" required maxlength="120">
    <small class="text-muted">Contoh: pink-phone-strap</small>
</div>

<div class="mb-3">
    <label class="form-label">Kategori</label>
    <select name="kategori_id" class="form-select" required>
        <option value="">Pilih kategori</option>

        @foreach($kategoris as $kategori)
            <option value="{{ $kategori->id }}"
                @selected(old('kategori_id', $produk->kategori_id ?? '') == $kategori->id)>
                {{ $kategori->nama }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea name="deskripsi" class="form-control" rows="4"
        required maxlength="1000">{{ old('deskripsi', $produk->deskripsi ?? '') }}</textarea>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Harga (Rp)</label>
        <input type="number" name="harga" class="form-control"
            value="{{ old('harga', $produk->harga ?? '') }}"
            required min="1000">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Stok</label>
        <input type="number" name="stok" class="form-control"
            value="{{ old('stok', $produk->stok ?? 0) }}"
            required min="0">
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Foto Produk</label>
    <input type="file" name="gambar" class="form-control"
        accept=".jpg,.jpeg,.png,.webp">

    <small class="text-muted">
        Format JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
    </small>
</div>

@if(isset($produk) && $produk->gambar)
    <div class="mb-3">
        <p>Foto saat ini:</p>
        <img src="{{ asset('storage/'.$produk->gambar) }}"
            width="150" class="rounded-3">
    </div>
@endif