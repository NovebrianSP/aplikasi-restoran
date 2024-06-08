<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;
    protected $primaryKey ='id_menu';
    protected $fillable = ['nama_menu', 'harga_menu', 'deskripsi'];

    public function promos():HasMany
    {
        return $this->hasMany(Promo::class, 'id_menu');
    }

    public function kategoris():BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class,'id_menu');
    }
}
