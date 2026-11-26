<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::create([
            'nama' => 'Aksesoris HP',
            'slug' => 'aksesoris-hp',
            'deskripsi' => 'Aksesoris untuk mempercantik dan melengkapi HP.',
        ]);

        Kategori::create([
            'nama' => 'Aksesoris Tas',
            'slug' => 'aksesoris-tas',
            'deskripsi' => 'Aksesoris lucu untuk tas sehari-hari.',
        ]);

        Kategori::create([
            'nama' => 'Aksesoris Rambut',
            'slug' => 'aksesoris-rambut',
            'deskripsi' => 'Aksesoris rambut dengan desain feminin.',
        ]);
    }
}