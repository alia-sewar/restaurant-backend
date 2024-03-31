<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    use HasFactory;
    protected  $fillable = [
        'name',
        'is_active',
        'number',
    ];
    function subCategories(): HasMany
    {
        return $this->hasMany(SUbCategory::class, 'level_id', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
