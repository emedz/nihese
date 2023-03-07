<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'name_produk',
        'harga_awal',
        'status_lelang',
        'tanggal_lelang',
        'detail',
        'image',
        
    ];

    public function lelangs(){
        return $this->hasMany(Lelang::class, 'id_produk');
    }
}
