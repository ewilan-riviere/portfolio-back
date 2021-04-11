<?php

namespace App\Models;

use App\Enums\DeveloperRole;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DeveloperProject extends Pivot
{
    public $incrementing = true;
    protected $table = 'developer_project';
    protected $fillable = [
        'role',
    ];
    protected $casts = [
        'role'        => DeveloperRole::class,
    ];
    public $timestamps = false;

    public function developer(): BelongsTo
    {
        return $this->belongsTo(Developer::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
