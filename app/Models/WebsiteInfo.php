<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteInfo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'website_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['key','value','type','language'];
}