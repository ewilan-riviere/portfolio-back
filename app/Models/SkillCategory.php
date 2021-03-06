<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Category.
 *
 * @property int                                                          $id
 * @property string                                                       $slug
 * @property string|null                                                  $display
 * @property \Illuminate\Support\Carbon|null                              $created_at
 * @property \Illuminate\Support\Carbon|null                              $updated_at
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @property int|null                                                     $skills_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $title
 * @method static \Illuminate\Database\Eloquent\Builder|CategorySkill whereTitle($value)
 */
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
