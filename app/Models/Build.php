<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    use HasFactory;

//    protected $with = ['images'];

    public function getCompletionDateAttribute($value)
    {
        return date("M d,Y", strtotime($value));
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function cover()
    {
        return $this->morphMany(Image::class, 'imageable')->where('tag', '
        =', 'cover');
    }

    public function promotion()
    {
        return $this->morphMany(Image::class, 'imageable')->where('tag', '=', 'promotion');

    }

    public function getImageGalleryAttribute()
    {

        return $this->images()->where('tag', '=', '')->get();
    }

    public function getCoverImageAttribute()
    {

        return $this->images()->where('tag', '=', 'cover')->first();
    }

    public function getPromotionImageAttribute()
    {
        return $this->images()->where('tag', '=', 'promotion')->first();
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

}
