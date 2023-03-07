<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;
use App\Models\User;

class Lelang extends Model
{
    use HasFactory;
    // protected $table='lelangs';
    protected $primaryKey = 'id_lelang';
    protected $fillable = [
        'id_produk',
        'id',
        'penawaran_harga',
        'status',
        
    ];

    public function produks(){
        return $this->belongsTo(Produk::class, 'id_produk');
    }
    public function users(){
        return $this->belongsTo(User::class, 'id');
    }

}
