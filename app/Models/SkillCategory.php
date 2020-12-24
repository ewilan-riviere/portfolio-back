<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

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
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 *
 * @property string $title
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereTitle($value)
 */
class SkillCategory extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'skills_categories';
    protected $primaryKey = 'slug';
    public $incrementing = false;
    protected $keyType = 'string';
    // public $timestamps = false;
    protected $fillable = [
        'slug',
        'title',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function boot()
    {
        static::saving(function (SkillCategory $skillCategory) {
            if (! empty($skillCategory->slug)) {
                return;
            }
            $skillCategory->slug = Str::slug($skillCategory->title, '-');

            // if (! empty($project->page_title)) {
            //     return;
            // }
            // $project->page_title = $project->title;
        });

        parent::boot();
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setDisplayAttribute($value)
    {
        $slug = Str::slug($value, '-');

        $this->attributes['slug'] = $slug;
        $this->attributes['display'] = $value;
    }
}
