<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    // make fillable
    protected $fillable = [
        'user_id',
        'barangs_id',
        'total_harga',
        'status',
        
    ];

    //make relation
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barangs_id', 'id');
    }

}
