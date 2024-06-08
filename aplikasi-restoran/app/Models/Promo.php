<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_promo';

    public function menus():BelongsTo
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class,'id_promo');
    }
}
