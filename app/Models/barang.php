<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'Nama_Barang',
        'Ukuran',
        'Id_Brand',
        'Kategori',
        'Harga'
    ];
}
