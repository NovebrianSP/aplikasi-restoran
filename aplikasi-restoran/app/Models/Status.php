<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_status';

    protected $fillable = [
        'nama_status'
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class,'id_status');
    }
}
