<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'category_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Mouse Wireless', 'harga_beli' => 50000, 'harga_jual' => 75000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 2, 'category_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Keyboard Mekanik', 'harga_beli' => 300000, 'harga_jual' => 450000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 3, 'category_id' => 2, 'barang_kode' => 'BRG03', 'barang_nama' => 'Kaos Polos Hitam', 'harga_beli' => 30000, 'harga_jual' => 50000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 4, 'category_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 100000, 'harga_jual' => 150000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 5, 'category_id' => 3, 'barang_kode' => 'BRG05', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3500, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 6, 'category_id' => 3, 'barang_kode' => 'BRG06', 'barang_nama' => 'Roti Tawar', 'harga_beli' => 12000, 'harga_jual' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 7, 'category_id' => 4, 'barang_kode' => 'BRG07', 'barang_nama' => 'Air Mineral 600ml', 'harga_beli' => 2000, 'harga_jual' => 3500, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 8, 'category_id' => 4, 'barang_kode' => 'BRG08', 'barang_nama' => 'Kopi Susu Botol', 'harga_beli' => 6000, 'harga_jual' => 9000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 9, 'category_id' => 5, 'barang_kode' => 'BRG09', 'barang_nama' => 'Sabun Cair 450ml', 'harga_beli' => 18000, 'harga_jual' => 25000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 10, 'category_id' => 5, 'barang_kode' => 'BRG10', 'barang_nama' => 'Pasta Gigi 190g', 'harga_beli' => 12000, 'harga_jual' => 17000, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('m_barang')->insert($data);
    }
}