<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Arr;

class Build extends Model
{
    use HasFactory;


    protected $fillable = ['name',
        'location', 'description', 'completion_date', 'assignment', 'maintenance', 'pet', 'slug', 'developer',
        'promotion_title', 'promotion_text'];

//    protected $with = ['images'];

//    public function getCompletionDateAttribute($value)
//    {
//        return date("M d,Y", strtotime($value));
//    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function phases(): HasMany
    {
        return $this->hasMany(Phase::class);
    }

    public function deposits(): HasMany
    {
        return $this->hasMany(Deposit::class);
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class);
    }


    public function developer()
    {

        return $this->hasOne(User::class, 'id', 'developer');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function cover(): morphMany
    {

        return $this->morphMany(Image::class, 'imageable')->where('tag', 'cover');
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

    public function getCoverImageUrlAttribute()
    {

        $image_object = $this->images()->where('tag', '=', 'cover')->first();

        if ($image_object) return asset('storage') . DIRECTORY_SEPARATOR . $image_object?->slug;
    }

    public function getPromotionImageUrlAttribute()
    {
        $image_object = $this->images()->where('tag', '=', 'promotion')->first();
        if ($image_object) return asset('storage') . DIRECTORY_SEPARATOR . $image_object?->slug;
    }

    public function getPromotionImageAttribute()
    {
        return $this->images()->where('tag', '=', 'promotion')->first();

    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function getUnitCountAttribute()
    {
        return $this->units()->count();
    }

    public function getMaxPriceAttribute()
    {
        $unit = $this->units()->orderBy('price', 'desc')->first();
        if ($unit) return $unit->price;
    }

    public function getMinPriceAttribute()
    {
        $unit = $this->units()->orderBy('price', 'asc')->first();
        if ($unit) return $unit->price;
    }

    public function getSumDepositAttribute()
    {
        $deposits = $this->deposits()->pluck('number')->toArray();
        $sum = 0;
        foreach ($deposits as $deposit){
            $sum = $sum + intval($deposit);
        };
        return $sum;
    }
}
