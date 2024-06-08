<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['nama_kategori'];

    public function menus():HasMany
    {
        return $this->hasMany(Menu::class, 'id_kategori');
    }
}
