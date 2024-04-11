<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Recipe extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recipes';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title_en','title_ar','type_en','type_ar','image','description_en','description_ar','ingredients_en','ingredients_ar','preparation_en','preparation_ar'];

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return 'https://scotturb.com/wp-content/uploads/2016/11/product-placeholder-300x300.jpg';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset('storage/thumbnail/recipes/' . $this->image);
        // storage/thumbnail/recipes/{image_name}

    } // $recipe->image_url

    /**
     * Get the name attribute based on the current locale.
     *
     * @return string
     */
    public function getTitleAttribute()
    {
        return App::getLocale() === 'en' ? $this->title_en : $this->title_ar;
    }


    public function getTypeAttribute()
    {
        return App::getLocale() === 'en' ? $this->type_en : $this->type_ar;
    }

    public function getDescriptionAttribute()
    {
        return App::getLocale() === 'en' ? $this->description_en : $this->description_ar;
    }

    public function recipeType()
    {
        return $this->belongsTo(RecipeType::class);
    }
}
