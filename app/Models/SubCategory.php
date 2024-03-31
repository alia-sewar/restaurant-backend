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
        'added_by',
        'level_id',
        'category_id'
    ];
    public function addedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'added_by', 'id')
            ->select('name', 'id');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')
            ->select('name', 'id');
    }
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'level_id', 'id')
            ->select('name', 'id');
    }
}
