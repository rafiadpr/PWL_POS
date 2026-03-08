<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'Supplier 1',
                'supplier_alamat' => 'Jl. Danau Sentani No. 1, Malang',
            ],
            [
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'Supplier 2',
                'supplier_alamat' => 'Jl. Danau Sentani No. 2, Malang',
            ],
            [
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'Supplier 3',
                'supplier_alamat' => 'Jl. Danau Sentani No. 3, Malang',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}