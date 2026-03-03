<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['category_id' => 1, 'category_kode' => 'KAT01', 'category_nama' => 'Elektronik', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 2, 'category_kode' => 'KAT02', 'category_nama' => 'Pakaian', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 3, 'category_kode' => 'KAT03', 'category_nama' => 'Makanan', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 4, 'category_kode' => 'KAT04', 'category_nama' => 'Minuman', 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'category_kode' => 'KAT05', 'category_nama' => 'Peralatan Mandi', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('m_category')->insert($data);
    }
}