<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Video extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'videos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','image','video','type'];


    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return 'https://scotturb.com/wp-content/uploads/2016/11/product-placeholder-300x300.jpg';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset('storage/thumbnail/videos/' . $this->image);
        // storage/thumbnail/videos/{image_name}

    } // $video->image_url

    public function getVideoUrlAttribute()
    {
        if (!$this->video) {
            return 'https://scotturb.com/wp-content/uploads/2016/11/product-placeholder-300x300.jpg';
        }
        if (Str::startsWith($this->video, ['http://', 'https://'])) {
            return $this->video;
        }
        return asset('storage/thumbnail/videos/' . $this->video);
        // storage/thumbnail/videos/{image_name}

    } // $video->image_url
}