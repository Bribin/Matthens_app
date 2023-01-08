<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Tags\HasTags;

class Tag extends Model
{
    protected $fillable = ['name','slug'];
    use HasTags;
    use HasFactory;
    use HasSlug;




    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function syncTagsWithoutLocale($tags)
    {
        $className = static::getTagClassName();

        $tags = collect($className::findOrCreate($tags, null, 'en'));

        $this->tags()->sync($tags->pluck('id')->toArray());

        return $this;
    }

    public function scopeWithAnyTagsWithoutLocale($query, $tags, $type = null)
    {
        $tags = static::convertToTags($tags, $type, 'en');

        return $query
            ->whereHas('tags', function ($query) use ($tags) {
                $tagIds = collect($tags)->pluck('id');

                $query->whereIn('tags.id', $tagIds);
            });
    }
}
