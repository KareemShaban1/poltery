<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title_en','title_ar','image','content_en','content_ar','active'];


    // ----------------------------------------------------------------------------------- //

    /// global scope defined on booted function
    protected static function booted()
    {

        // set product slug once enter product name
        static::creating(function (Page $page) {
            $page->slug = Str::slug($page->title_en);
        });
    }

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return 'https://scotturb.com/wp-content/uploads/2016/11/product-placeholder-300x300.jpg';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset('storage/thumbnail/pages/' . $this->image);
        // storage/thumbnail/pages/{image_name}

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