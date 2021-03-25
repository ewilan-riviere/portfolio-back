<?php

namespace App\Models;

use App\Enums\DeveloperRole;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\DeveloperProject.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperProject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperProject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperProject query()
 * @mixin \Eloquent
 */
class DeveloperProject extends Pivot
{
    use HasFactory;

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
