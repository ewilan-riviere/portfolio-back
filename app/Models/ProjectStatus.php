<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectStatus extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'project_status';

    public $translatable = ['name'];

    protected $fillable = [
        'name',
        'slug',
        'order',
    ];
    public $timestamps = false;

    public static function boot()
    {
        static::saving(function (ProjectStatus $projectStatus) {
            if (! empty($projectStatus->slug)) {
                return;
            }
            $projectStatus->slug = Str::slug($projectStatus->name, '-');
        });

        parent::boot();
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
