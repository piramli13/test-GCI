<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    use HasFactory;
    //make fillable
    protected $fillable = [
        'user_id',
        'diskon',
        'expired',
        'status'
    ];

}
