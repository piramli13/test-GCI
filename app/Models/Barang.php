<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    //make fillabel
    protected $fillable = [
        'nama_barang',
        'harga',
        'stok',
        'keterangan'
    ];

    //make relation
    public function checkout()
    {
        return $this->hasMany(Checkout::class, 'barangs_id', 'id');
    }
}
