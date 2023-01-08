<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Carbon\CarbonPeriod;

class Course extends Model
{

    use HasFactory;
    use HasTags;
    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }



    public function batches()
    {
        return $this->belongsToMany(Batch::class,'course_batches')->withTimestamps();
    }

    public function getTagListAttribute()
    {
        return $this->tags()->pluck('name');
    }


    public function getCategoryListAttribute()
    {
        return $this->categories()->get()->pluck('id')->toArray();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'course_categories');
    }

}
