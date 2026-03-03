<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detail_id = 1;

        for ($penjualan_id = 1; $penjualan_id <= 10; $penjualan_id++) {
            for ($j = 1; $j <= 3; $j++) {
                $barang_id = rand(1, 10);
                $barang = DB::table('m_barang')->where('barang_id', $barang_id)->first();
                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_id,
                    'harga' => $barang->harga_jual,
                    'jumlah' => rand(1, 5), // Pembeli membeli 1-5 pcs per barang
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}