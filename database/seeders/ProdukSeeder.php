<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $hp = Kategori::where('slug', 'aksesoris-hp')->firstOrFail();
        $tas = Kategori::where('slug', 'aksesoris-tas')->firstOrFail();
        $rambut = Kategori::where('slug', 'aksesoris-rambut')->firstOrFail();

        Produk::create([
            'kategori_id' => $hp->id,
            'nama' => 'Pink Phone Strap',
            'slug' => 'pink-phone-strap',
            'deskripsi' => 'Strap HP pink yang manis dan praktis untuk penggunaan sehari-hari.',
            'harga' => 15000,
            'stok' => 20,
        ]);

        Produk::create([
            'kategori_id' => $tas->id,
            'nama' => 'Pink Bag Charm',
            'slug' => 'pink-bag-charm',
            'deskripsi' => 'Bag charm lucu untuk mempercantik tas favoritmu.',
            'harga' => 18000,
            'stok' => 15,
        ]);

        Produk::create([
            'kategori_id' => $rambut->id,
            'nama' => 'Soft Pink Scrunchie',
            'slug' => 'soft-pink-scrunchie',
            'deskripsi' => 'Scrunchie lembut dengan warna pink pastel.',
            'harga' => 8000,
            'stok' => 25,
        ]);

        Produk::create([
            'kategori_id' => $hp->id,
            'nama' => 'Pearl Phone Charm',
            'slug' => 'pearl-phone-charm',
            'deskripsi' => 'Phone charm dengan detail mutiara yang elegan.',
            'harga' => 22000,
            'stok' => 12,
        ]);

        Produk::create([
            'kategori_id' => $tas->id,
            'nama' => 'Mini Ribbon Keychain',
            'slug' => 'mini-ribbon-keychain',
            'deskripsi' => 'Gantungan kunci pita mini untuk tas atau kunci.',
            'harga' => 12000,
            'stok' => 18,
        ]);
    }
}