<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCategory extends Model
{
    use HasFactory;
    protected  $fillable = [
        'name',
        'is_active',
        'created_by',
        'category_id'
    ];



    /**
     * 
     */
    function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }
}
