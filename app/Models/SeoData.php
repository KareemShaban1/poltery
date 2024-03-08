<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoData extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'seo_data';

    protected $fillable = [
        'entity_type',
        'entity_id',
        'title',
        'meta_description',
        'keywords',
        'canonical_url',
        'structured_data',
    ];

    protected $casts = [
        'structured_data' => 'array',
    ];

    // Define relationship with other models (e.g., Page, Post, Product)
    public function entity()
    {
        return $this->morphTo();
    }
}