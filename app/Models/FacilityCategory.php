<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class FacilityCategory extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facilities_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_en','name_ar','image'];

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return 'https://scotturb.com/wp-content/uploads/2016/11/product-placeholder-300x300.jpg';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset('storage/thumbnail/facilitiesCategory/' . $this->image);
        // storage/thumbnail/facilitiesCategory/{image_name}

    } // $page->image_url

    /**
    * Get the name attribute based on the current locale.
    *
    * @return string
    */
    public function getNameAttribute()
    {
        return App::getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }
}
