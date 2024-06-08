<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_detail';
    protected $fillable = ['id_menu', 'id_pelanggan'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class, 'id_detail');
    }
}
