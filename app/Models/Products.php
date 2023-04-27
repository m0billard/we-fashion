<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'visible', 'state', 'reference'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }

    public function sizes(): HasMany
    {
        return $this->hasMany(ProductsSizes::class);
    }
}