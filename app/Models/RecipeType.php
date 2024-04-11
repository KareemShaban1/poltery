<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class RecipeType extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recipe_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_en','name_ar'];

    /**
     * Get the name attribute based on the current locale.
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return App::getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }

    public function recipes()
    {
        return $this->hasMany(Recipe::class, 'recipe_type_id');
    }
}
