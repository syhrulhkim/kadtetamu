<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'preview_image',
        'price',
        'template_data',
        'customizable_fields',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'template_data' => 'array',
        'customizable_fields' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
    ];

    // Relationships
    public function cards()
    {
        return $this->hasMany(Card::class, 'template_id');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }
}
