<?php

namespace App\Models;

use App\Enums\ProjectLinkType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectLink extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'repository',
        'project',
        'type',
        'is_private',
    ];
    protected $casts = [
        'type'        => ProjectLinkType::class,
        'is_private'  => 'boolean',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
