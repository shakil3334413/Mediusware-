<?php

namespace App\Models;

use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];
    public function productVariants():HasMany
    {
        return $this->hasMany(ProductVariant::class, 'product_id', 'id');
    }
    public function productImages():HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
    public function productVariantPrices():HasMany
    {
        return $this->hasMany(ProductVariantPrice::class, 'product_id', 'id');
    }
   
}
