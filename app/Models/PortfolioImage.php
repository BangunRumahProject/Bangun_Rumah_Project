<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Support\Facades\Storage;

class PortfolioImage extends Model
{
    protected $fillable = [
        'portfolio_id',
        'image',
        'title',
        'description',
        'sort_order'
    ];

    // Accessor untuk image URL
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

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
