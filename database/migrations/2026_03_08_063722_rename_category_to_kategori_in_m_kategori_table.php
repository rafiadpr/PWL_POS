<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk mengubah nama kolom.
     */
    public function up(): void
    {
        Schema::table('m_category', function (Blueprint $table) {
            // Mengubah nama kolom id, kode, dan nama agar konsisten
            $table->renameColumn('category_id', 'kategori_id');
            $table->renameColumn('category_kode', 'kategori_kode');
            $table->renameColumn('category_nama', 'kategori_nama');
        });
    }

    /**
     * Kembalikan perubahan (Rollback).
     */
    public function down(): void
    {
        Schema::table('m_category', function (Blueprint $table) {
            $table->renameColumn('kategori_id', 'category_id');
            $table->renameColumn('kategori_kode', 'category_kode');
            $table->renameColumn('kategori_nama', 'category_nama');
        });
    }
};