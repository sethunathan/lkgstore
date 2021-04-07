<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia;

    protected $guarded = [];

    public $translatable = ['name','description'];
    

    // One level child
    public function child() {
        return $this->hasMany( Category::class , 'parent_category_id');
    }

    // Recursive children
    public function children() {
        return $this->hasMany( Category::class , 'parent_category_id')->with('children');
    }

    // One level parent
    public function parent() {
        return $this->belongsTo( Category::class , 'parent_category_id');
    }

    // Recursive parents
    public function parents() {
        return $this->belongsTo( Category::class , 'parent_category_id')->with('parent');
    }

    public function listings()
    {
        return $this->belongsToMany('App\Models\Listing', 'listing_categories', 'category_id', 'listing_id');
    }


    public function registerMediaConversions(Media $media = null) : void
    {
        $this->addMediaConversion('thumb')
              ->width(100)
              ->height(100)
              ->sharpen(10);

        $this->addMediaConversion('square')
              ->width(412)
              ->height(412)
              ->sharpen(10);
    }
}
