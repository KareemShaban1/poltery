<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

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
    protected $fillable = ['name_ar','name_en','image','content_en','content_ar','category_id'];

    public function facilityCategory(){
        return $this->belongsTo(FacilityCategory::class,'category_id');
    }
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return 'https://scotturb.com/wp-content/uploads/2016/11/product-placeholder-300x300.jpg';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset('storage/thumbnail/facilities/' . $this->image);
        // storage/thumbnail/facilities/{image_name}

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

    /**
    * Get the name attribute based on the current locale.
    *
    * @return string
    */
    public function getContentAttribute()
    {
        return App::getLocale() === 'en' ? $this->content_en : $this->content_ar;
    }
}