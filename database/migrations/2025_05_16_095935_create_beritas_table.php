<?php

// database/migrations/xxxx_xx_xx_create_beritas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_id'); // FK ke kategoris.id
            $table->string('judul');
            $table->integer('id_kategori');
            $table->text('abstrak');
            $table->string('penulis');
            $table->year('tahun');
            $table->string('file');
            $table->enum('status', ['pending', 'diterima', 'ditolak'])->default('pending');
            $table->timestamps();

            // FOREIGN KEY
            $table->foreign('kategori_id')->references('id')->on('kategoris');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
