<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pesanan';
    protected $fillable = ['nomor_meja', 'tanggal', 'total_harga'];

    public function chefs()
    {
        return $this->belongsTo(Chef::class, 'id_chef');
    }
    
    public function pelayans()
    {
        return $this->belongsTo(Pelayan::class, 'id_pelayan');
    }
    
    public function kasirs()
    {
        return $this->belongsTo(Kasir::class, 'id_kasir');
    }
    
    public function restorans()
    {
        return $this->belongsTo(Resto::class, 'id_resto');
    }
    
    public function pelanggans()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
    
    public function menus()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
    
    public function promos()
    {
        return $this->belongsTo(Promo::class, 'id_promo');
    }
    
    public function details()
    {
        return $this->belongsTo(DetailPesanan::class, 'id_detail');
    }

}