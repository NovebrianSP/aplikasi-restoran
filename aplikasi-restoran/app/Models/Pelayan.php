<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pelayan';

    protected $fillable = [
        'nama_pelayan',
        'kontak_pelayan',
        'gambar'
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class,'id_pelayan');
    }
}
