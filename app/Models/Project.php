<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\Publishable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
 *
 * @property string|null $slug
 * @property string|null $image_title
 * @property string|null $link_github
 * @property string|null $link_project
 * @property string|null $formation_slug
 * @property int|null    $developers_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereFormationSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLinkGithub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLinkProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSlug($value)
 *
 * @property mixed $is_draft
 * @property mixed $is_published
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Project draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Project published()
 *
 * @property string $status
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 *
 * @property string|null $extract
 * @property string|null $description
 * @property string|null $link_repository
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereExtract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLinkRepository($value)
 */
class Project extends Model
{
    use Publishable;

    protected $table = 'projects';
    protected $primaryKey = 'slug';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'slug',
        'title',
        'order',
        'resume',
        'image',
        'image_title',
        'is_favorite',
        'font',
        'status',
    ];

    protected $casts = [
        'is_favorite' => 'boolean',
    ];

    public static function boot()
    {
        static::saving(function (Project $project) {
            if (! empty($project->slug)) {
                return;
            }
            $project->slug = Str::slug($project->title, '-');
        });

        parent::boot();
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function developers()
    {
        return $this->belongsToMany(Developer::class)->withPivot('role');
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

    public function projectLink(): HasOne
    {
        return $this->hasOne(ProjectLink::class);
    }
}
