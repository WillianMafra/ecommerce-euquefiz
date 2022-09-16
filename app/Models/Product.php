<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'slug', 'image', 'price', 'description', 'stock','category_id'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
