<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariantPrice extends Model
{
    protected $guarded = [];
    public function variantOne():HasOne
    {
        return $this->hasOne(ProductVariant::class, 'id', 'product_variant_one');
    }

    public function variantTwo():HasOne
    {
        return $this->hasOne(ProductVariant::class, 'id', 'product_variant_two');
    }

    public function variantThree():HasOne
    {
        return $this->hasOne(ProductVariant::class, 'id', 'product_variant_three');
    }
}
