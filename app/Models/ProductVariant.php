<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductVariant extends Model
{
    protected $guarded = [];
    public function variants():BelongsTo
    {
        return $this->belongsTo(Variant::class, 'variant_id', 'id');
    }
    public function productVariantOne():HasMany
    {
        return $this->hasMany(Variant::class, 'variant_id', 'id');
    }
}
