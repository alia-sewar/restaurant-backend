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
        'added_by',
        'sub_category_id'
    ];
    public function addedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'added_by', 'id')
            ->select('name', 'id');
    }
    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id')
            ->select('name', 'id');
    }
}
