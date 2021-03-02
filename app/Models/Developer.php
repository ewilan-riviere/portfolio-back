<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

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
 *
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
 *
 * @property string|null $slug
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereSlug($value)
 */
class Developer extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $fillable = [
        'name',
        'slug',
        'github',
        'portfolio',
        'linkedin',
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
        static::saving(function (Developer $developer) {
            if (! empty($developer->slug)) {
                return;
            }
            $developer->slug = Str::slug($developer->name, '-');

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

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('role');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
