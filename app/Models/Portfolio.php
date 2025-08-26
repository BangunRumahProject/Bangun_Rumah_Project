<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'description',
        'features',
        'advantages',
        'category',
        'status',
        'year',
        'location',
        'area',
        'sort_order',
        'is_featured',
        'image',
        'build_duration',
    ];

    protected $casts = [
        'features' => 'array',
        'advantages' => 'array',
        'is_featured' => 'boolean',
        'area' => 'decimal:2',
        'year' => 'integer',
        'sort_order' => 'integer',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'completed');
    }

    public function images()
    {
        return $this->hasMany(PortfolioImage::class)->orderBy('sort_order');
    }
}
