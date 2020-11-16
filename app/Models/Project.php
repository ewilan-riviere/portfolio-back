<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project.
 *
 * @property int                                                                  $id
 * @property string                                                               $title
 * @property int                                                                  $order
 * @property string|null                                                          $image
 * @property string|null                                                          $image-title
 * @property string|null                                                          $resume
 * @property string|null                                                          $github_link
 * @property string|null                                                          $try_it
 * @property string|null                                                          $font
 * @property int                                                                  $is_collective
 * @property \Illuminate\Support\Carbon|null                                      $created_at
 * @property \Illuminate\Support\Carbon|null                                      $updated_at
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\ProjectMember[] $projectsMembers
 * @property int|null                                                             $projects_members_count
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[]         $skills
 * @property int|null                                                             $skills_count
 *
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
 */
class Project extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'projects';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'order',
        'image',
        'resume',
        'github_link',
        'try_it',
        'font',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function projectsMembers()
    {
        return $this->belongsToMany(ProjectMember::class);
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
