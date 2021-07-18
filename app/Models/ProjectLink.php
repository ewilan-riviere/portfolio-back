<?php

namespace App\Models;

use App\Models\Enums\ProjectLinkType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectLink extends Model
{
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
