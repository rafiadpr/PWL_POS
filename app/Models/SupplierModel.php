<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    protected $table = 'm_supplier'; // Nama tabel 
    protected $primaryKey = 'supplier_id'; // Nama primary key
    
    // Kolom yang boleh diisi secara massal
    protected $fillable = ['supplier_kode', 'supplier_nama', 'supplier_alamat'];
}