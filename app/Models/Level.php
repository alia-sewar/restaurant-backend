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
        'created_by',
    ];
    function subCategories(): HasMany
    {
        return $this->hasMany(SUbCategory::class, 'level_id', 'id');
    }
}
