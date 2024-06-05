<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_pesanan extends Model
{
    use HasFactory;

    protected $table = 'details';
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
}
