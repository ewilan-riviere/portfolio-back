<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Formation extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasTranslations;

    public $translatable = ['title', 'resume', 'description'];

    protected $fillable = [
        'title',
        'slug',
        'certificate',
        'logo',
        'color',
        'color_text_white',
        'resume',
        'description',
        'level',
        'date_begin',
        'date_end',
        'is_finished',
        'is_display',
    ];
    protected $casts = [
        'is_finished' => 'boolean',
        'is_display'  => 'boolean',
    ];

    public static function boot()
    {
        static::saving(function (Formation $formation) {
            if (! empty($formation->slug)) {
                return;
            }
            $formation->slug = Str::slug($formation->title, '-');
        });

        parent::boot();
    }

    public function getLogoAttribute()
    {
        return $this->getFirstMedia('logos')?->getPath();
    }

    public function getImageAttribute()
    {
        return $this->getFirstMedia('banners')?->getFullUrl();
    }

    public function links(): HasMany
    {
        return $this->hasMany(FormationLink::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class)->whereIsDisplay(true);
    }

    public function experienceType(): BelongsTo
    {
        return $this->belongsTo(ExperienceType::class);
    }
}
