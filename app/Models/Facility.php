<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facilities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_ar','name_en','image','content','category_id'];
}