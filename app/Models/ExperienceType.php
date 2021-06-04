<?php

namespace App\Models;

use Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExperienceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
    ];

    public static function boot()
    {
        static::saving(function (ExperienceType $experience) {
            if (! empty($experience->slug)) {
                return;
            }
            $experience->slug = Str::slug($experience->title, '-');
        });

        parent::boot();
    }

    public function formations(): HasMany
    {
        return $this->hasMany(Formation::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
