<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Skill.
 *
 * @property int                                                            $id
 * @property string                                                         $title
 * @property string|null                                                    $version
 * @property string|null                                                    $link
 * @property int                                                            $is_free
 * @property string|null                                                    $color
 * @property int                                                            $color_text_dark
 * @property string|null                                                    $subtitle
 * @property string|null                                                    $details
 * @property int                                                            $is_favorite
 * @property float                                                          $rating
 * @property string|null                                                    $image
 * @property string|null                                                    $blockquote_text
 * @property string|null                                                    $blockquote_who
 * @property \Illuminate\Support\Carbon|null                                $created_at
 * @property \Illuminate\Support\Carbon|null                                $updated_at
 * @property int                                                            $category_id
 * @property \App\Models\Category                                           $category
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property int|null                                                       $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereBlockquoteText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereBlockquoteWho($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereColorTextDark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereIsFavorite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereIsFreeApp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereVersion($value)
 * @mixin \Eloquent
 * @property string|null $slug
 * @property string $skill_category_slug
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereSkillCategorySlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereIsFree($value)
 */
class Skill extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'skills';
    protected $primaryKey = 'slug';
    public $incrementing = false;
    protected $keyType = 'string';
    // public $timestamps = false;
    protected $fillable = [
        'title',
        'slug',
        'version',
        'link',
        'is_free',
        'color',
        'subtitle',
        'details',
        'is_favorite',
        'rating',
        'image',
        'blockquote_text',
        'blockquote_who',
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
        static::saving(function (Skill $skill) {
            if (! empty($skill->slug)) {
                return;
            }
            $skill->slug = Str::slug($skill->title, '-');

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

    // public function projects()
    // {
    //     return $this->belongsToMany(Project::class);
    // }

    public function category()
    {
        return $this->belongsTo(SkillCategory::class);
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
}
