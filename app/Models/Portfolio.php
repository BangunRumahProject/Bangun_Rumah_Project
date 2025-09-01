<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    // Accessor untuk image
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return asset('img/placeholder-portfolio.jpg');
        }

        // Jika image sudah berupa URL lengkap
        if (filter_var($this->image, FILTER_VALIDATE_URL)) {
            return $this->image;
        }

        // Jika image berupa path relatif
        if (str_starts_with($this->image, 'storage/')) {
            return Storage::url($this->image);
        }

        // Jika image berupa path absolut di storage
        if (str_starts_with($this->image, '/')) {
            return Storage::url($this->image);
        }

        // Default: coba Storage::url
        return Storage::url($this->image);
    }

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
