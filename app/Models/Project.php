<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Enums\ProjectStatus;
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

    public $translatable = ['description'];

    protected $fillable = [
        'slug',
        'title',
        'order',
        'description',
        'is_favorite',
        'is_display',
        'status',
    ];

    protected $casts = [
        'is_display'  => 'boolean',
        'is_favorite' => 'boolean',
        'status'      => ProjectStatus::class,
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

    public function getImageAttribute()
    {
        $media = $this->getFirstMedia('projects');

        return $media ? $media->getFullUrl() : null;
    }

    public function getImageTitleAttribute()
    {
        $media = $this->getFirstMedia('projects_title');

        return $media ? $media->getFullUrl() : null;
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

    public function projectLinks(): HasMany
    {
        return $this->hasMany(ProjectLink::class);
    }

    public function experienceType(): BelongsTo
    {
        return $this->belongsTo(ExperienceType::class);
    }
}
