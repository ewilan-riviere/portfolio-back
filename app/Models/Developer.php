<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Developer.
 *
 * @property int                                                            $id
 * @property string                                                         $name
 * @property string                                                         $github
 * @property string                                                         $portfolio
 * @property string                                                         $linkedin
 * @property \Illuminate\Support\Carbon|null                                $created_at
 * @property \Illuminate\Support\Carbon|null                                $updated_at
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property int|null                                                       $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Developer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Developer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Developer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Developer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Developer whereGithub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Developer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Developer whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Developer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Developer wherePortfolio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Developer whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $slug
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereSlug($value)
 * @property-read mixed $image
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DeveloperLink[] $links
 * @property-read int|null $links_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\DeveloperLink|null $primaryLink
 */
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
