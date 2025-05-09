<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CartItem extends Model
{

    protected $fillable = ['cart_id', 'category_id'];
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function category(): belongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
