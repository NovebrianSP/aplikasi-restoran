<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resto extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey = 'id_resto';
    protected $fillable = [
        'nama_resto',
        'alamat',
        'gambar'
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class, 'id_resto');
    }
}
