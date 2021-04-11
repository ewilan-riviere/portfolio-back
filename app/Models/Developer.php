<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Developer extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public static function boot()
    {
        static::saving(function (Developer $developer) {
            if (! empty($developer->slug)) {
                return;
            }
            $developer->slug = Str::slug($developer->name, '-');
        });

        parent::boot();
    }

    public function getImageAttribute()
    {
        $media = $this->getFirstMedia('developers');

        return $media ? $media->getFullUrl() : null;
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class)->withPivot('role');
    }

    public function links(): HasMany
    {
        return $this->hasMany(DeveloperLink::class);
    }

    public function primaryLink()
    {
        $link = $this->hasOne(DeveloperLink::class)->where('is_primary', '=', true);

        return $link;
    }
}
