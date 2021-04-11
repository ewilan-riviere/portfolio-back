<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SkillCategory extends Model
{
    protected $table = 'skill_categories';
    protected $fillable = [
        'slug',
        'title',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public static function boot()
    {
        static::saving(function (SkillCategory $categorySkill) {
            if (! empty($categorySkill->slug)) {
                return;
            }
            $categorySkill->slug = Str::slug($categorySkill->title, '-');

            // if (! empty($project->page_title)) {
            //     return;
            // }
            // $project->page_title = $project->title;
        });

        parent::boot();
    }

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class, 'skill_category_id');
    }

    public function setDisplayAttribute($value)
    {
        $slug = Str::slug($value, '-');

        $this->attributes['slug'] = $slug;
        $this->attributes['display'] = $value;
    }
}
