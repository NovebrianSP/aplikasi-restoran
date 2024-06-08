<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_chef';

    protected $fillable = [
        'nama_chef',
        'kontak_chef',
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class, 'id_chef');
    }
}
