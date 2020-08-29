<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

/**
 * App\Models\ProjectMember.
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProjectMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProjectMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProjectMember query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProjectMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProjectMember whereGithub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProjectMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProjectMember whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProjectMember whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProjectMember wherePortfolio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProjectMember whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectMember extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'projects_members';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
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

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function projects()
    {
        return $this->belongsToMany(Project::class);
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
