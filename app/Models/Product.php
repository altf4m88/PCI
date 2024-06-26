<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'category_id',
        'title',
        'desc',
        'price',
        'unit',
        'stock',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'min_order',
        'marketplace_url',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
