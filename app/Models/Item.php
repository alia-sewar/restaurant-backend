<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;
    protected  $fillable = [
        'name',
        'is_active',
        'created_by',
        'sub_category_id'
    ];

    function subCategory(): BelongsTo
    {
        return $this->belongsTo(SUbCategory::class, 'sub_category_id', 'id');
    }
}
