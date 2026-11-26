<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('produks', function (Blueprint $table) {
        $table->id();

        $table->foreignId('kategori_id')
            ->constrained('kategoris')
            ->cascadeOnDelete();

        $table->string('nama', 100);
        $table->string('slug', 120)->unique();
        $table->text('deskripsi');
        $table->unsignedBigInteger('harga');
        $table->unsignedInteger('stok')->default(0);
        $table->string('gambar')->nullable();

        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('produks');
}
};
