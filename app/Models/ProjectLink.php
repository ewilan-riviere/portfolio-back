<?php

namespace App\Models;

use App\Models\Enums\ProjectLinkType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\ProjectLink.
 *
 * @property int         $id
 * @property string      $project_slug
 * @property string|null $back_repository
 * @property string|null $back_project
 * @property string|null $front_repository
 * @property string|null $front_project
 * @property string|null $app_repository
 * @property string|null $app_project
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereAppProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereAppRepository($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereBackProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereBackRepository($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereFrontProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereFrontRepository($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereProjectSlug($value)
 * @mixin \Eloquent
 * @property int|null $project_id
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereProjectId($value)
 * @property \App\Models\Project|null $project
 * @property string|null $repository
 * @property ProjectLinkType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereRepository($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereType($value)
 */
class ProjectLink extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'repository',
        'project',
        'type',
    ];
    protected $casts = [
        'type'        => ProjectLinkType::class,
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
