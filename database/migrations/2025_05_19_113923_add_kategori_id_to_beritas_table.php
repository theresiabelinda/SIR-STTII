<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

public function up() {
    Schema::table('beritas', function (Blueprint $table) {
        $table->dropForeign(['kategori_id']); // tambahkan ini
        $table->dropColumn('kategori_id');
    });
}

public function down()
{
    Schema::table('beritas', function (Blueprint $table) {
        $table->unsignedBigInteger('kategori_id')->nullable();
        // Jika ingin, tambahkan kembali foreign key-nya:
        // $table->foreign('kategori_id')->references('id')->on('kategoris');
    });
}
};
