<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Perintah untuk mengubah nama tabel
        Schema::rename('m_category', 'm_kategori');
    }

    public function down(): void
    {
        // Kembalikan nama tabel jika migrasi di-rollback
        Schema::rename('m_kategori', 'm_category');
    }
};