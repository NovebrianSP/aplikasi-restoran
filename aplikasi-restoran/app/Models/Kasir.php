<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kasir';

    protected $fillable = [
        'nama_kasir',
        'kontak_kasir',
        'gambar'
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class,'id_kasir');
    }
}
