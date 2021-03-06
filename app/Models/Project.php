<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
 * @property int|null    $developers_count
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereFormationSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLinkGithub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLinkProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSlug($value)
 * @property mixed $is_draft
 * @property mixed $is_published
 * @method static \Illuminate\Database\Eloquent\Builder|Project draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Project published()
 * @property string $status
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 * @property string|null $extract
 * @property string|null $description
 * @property string|null $link_repository
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereExtract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLinkRepository($value)
 * @property bool                         $is_favorite
 * @property \App\Models\Formation|null   $formation
 * @property \App\Models\ProjectLink|null $projectLink
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereIsFavorite($value)
 * @property int|null                                                                                                                      $formation_id
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property int|null                                                                                                                      $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereFormationId($value)
 * @property bool $is_display
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereIsDisplay($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProjectLink[] $projectLinks
 * @property-read int|null $project_links_count
 */
class Project extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'slug',
        'title',
        'order',
        'description',
        'is_favorite',
        'is_display',
    ];

    protected $casts = [
        'is_display'  => 'boolean',
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

    public function getImageAttribute()
    {
        $media = $this->getFirstMedia('projects');

        return $media ? $media->getFullUrl() : null;
    }

    public function getImageTitleAttribute()
    {
        $media = $this->getFirstMedia('projects_title');

        return $media ? $media->getFullUrl() : null;
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }

    public function developers(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class)->withPivot('role');
    }

    public function formation(): BelongsTo
    {
        return $this->belongsTo(Formation::class);
    }

    public function projectLinks(): HasMany
    {
        return $this->hasMany(ProjectLink::class);
    }
}
