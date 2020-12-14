<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project.
 *
 * @property int                                                              $id
 * @property string                                                           $title
 * @property int                                                              $order
 * @property string|null                                                      $image
 * @property string|null                                                      $image-title
 * @property string|null                                                      $resume
 * @property string|null                                                      $github_link
 * @property string|null                                                      $try_it
 * @property string|null                                                      $font
 * @property int                                                              $is_collective
 * @property \Illuminate\Support\Carbon|null                                  $created_at
 * @property \Illuminate\Support\Carbon|null                                  $updated_at
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Developer[] $developers
 * @property int|null                                                         $projects_members_count
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[]     $skills
 * @property int|null                                                         $skills_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereFont($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereGithubLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereImageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereIsCollective($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereTryIt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $slug
 * @property string|null $image_title
 * @property string|null $link_github
 * @property string|null $link_project
 * @property string|null $formation_slug
 * @property-read int|null $developers_count
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereFormationSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLinkGithub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLinkProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSlug($value)
 */
class Project extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'projects';
    protected $primaryKey = 'slug';
    public $incrementing = false;
    protected $keyType = 'string';
    // public $timestamps = false;
    protected $fillable = [
        'slug',
        'title',
        'order',
        'resume',
        'image',
        'image_title',
        'font',
        'link_github',
        'link_project',
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
        static::saving(function (Project $project) {
            if (! empty($project->slug)) {
                return;
            }
            $project->slug = Str::slug($project->title, '-');

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
        return $this->belongsToMany(Skill::class);
    }

    public function developers()
    {
        return $this->belongsToMany(Developer::class);
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
