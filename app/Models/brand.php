<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $table = 'brand';
    protected $primaryKey = 'Id_Brand';
    public $timestamps = false;

    protected $fillable = [
        'Nama_brand'
    ];
}
