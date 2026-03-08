<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::table('m_barang', function (Blueprint $table) {
            // Mengubah nama kolom category_id menjadi kategori_id
            $table->renameColumn('category_id', 'kategori_id');
        });
    }

    /**
     * Batalkan migrasi (Rollback).
     */
    public function down(): void
    {
        Schema::table('m_barang', function (Blueprint $table) {
            // Mengembalikan kategori_id menjadi category_id
            $table->renameColumn('kategori_id', 'category_id');
        });
    }
};