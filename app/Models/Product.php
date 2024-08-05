<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'title',
        'category_id',
        'color_id',
        'brand_id',
        'image_src',
        'price'
    ];

    use HasFactory;
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
