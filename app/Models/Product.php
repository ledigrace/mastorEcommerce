<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoryId',
        'name',
        'slug',
        'smallDescription',
        'description',
        'originalPrice',
        'salePrice',
        'images',
        'qty',
        'bestSeller',
        'feature',
        'saleProduct',
        'metaTitle',
        'metaDescription',
        'metaKeywords',
    ];

    // Cast the 'images' attribute to an array
    protected $casts = [
        'images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId', 'id');
    }
}
