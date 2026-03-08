<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'm_barang'; // Nama tabel 
    protected $primaryKey = 'barang_id'; // Nama primary key

    // Kolom yang boleh diisi secara massal
    protected $fillable = ['barang_id', 'kategori_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual'];

    public function kategori()
    {
        // Pastikan foreign key di sini adalah 'kategori_id'
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
}
