<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductsSizes extends Model
{
    use HasFactory;

    protected $table = 'product_sizes';

    public function product(): BelongsTo
    {
        return $this->belongsTo(Products::class);
    }
}