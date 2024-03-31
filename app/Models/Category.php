<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'is_active',
        'added_by'
    ];
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
    public function addedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'added_by', 'id')
            ->select('name', 'id');
    }
}
