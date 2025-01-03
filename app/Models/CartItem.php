<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'product_variation_id',
        'quantity',
    ];

    public function productVariation()
    {
        return $this->belongsTo(ProductVariation::class);
    }
}
