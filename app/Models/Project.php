<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasTranslations;

    public $translatable = ['subtitle', 'abstract', 'description'];

    protected $fillable = [
        'slug',
        'title',
        'subtitle',
        'order',
        'abstract',
        'description',
        'is_favorite',
        'is_display',
        'is_private',
    ];

    protected $casts = [
        'is_display'  => 'boolean',
        'is_favorite' => 'boolean',
        'is_private'  => 'boolean',
    ];

    public static function boot()
    {
        static::saving(function (Project $project) {
            if (! empty($project->slug)) {
                return;
            }
            $project->slug = Str::slug($project->title, '-');
        });

        parent::boot();
    }

    public function getPictureLogoAttribute()
    {
        $media = $this->getFirstMedia('projects_logo');

        return $media ? $media->getFullUrl() : null;
    }

    public function getColorAttribute()
    {
        $media = $this->getFirstMedia('projects_logo');

        return $media ? $media->getCustomProperty('color') : null;
    }

    public function getPictureTitleAttribute()
    {
        $media = $this->getFirstMedia('projects_title');

        return $media ? $media->getFullUrl() : null;
    }

    public function getPictureBannerAttribute()
    {
        $media = $this->getFirstMedia('projects_banner');

        return $media ? $media->getFullUrl() : null;
    }

    public function getGalleryAttribute()
    {
        $media = $this->getMedia('projects_gallery');
        $gallery = [];
        foreach ($media as $key => $picture) {
            array_push($gallery, [
                'url'  => $picture->getFullUrl(),
                'name' => $picture->name,
            ]);
        }

        return $gallery;
    }

    public function getShowLinkAttribute()
    {
        return route('api.projects.show', [
            'project' => $this->slug,
        ]);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }

    public function developers(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class)->withPivot('role');
    }

    public function formation(): BelongsTo
    {
        return $this->belongsTo(Formation::class);
    }

    public function links(): HasMany
    {
        return $this->hasMany(ProjectLink::class);
    }

    public function experience(): BelongsTo
    {
        return $this->belongsTo(ExperienceType::class, 'experience_type_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(ProjectStatus::class, 'project_status_id');
    }
}
