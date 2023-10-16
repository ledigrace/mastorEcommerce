<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    protected $table = 'variations';
    protected $fillable = [
        'name', 
        'image', 
        'bestSellerVar', 
        'outOfStock',
        'variationCode'
    ];
}
