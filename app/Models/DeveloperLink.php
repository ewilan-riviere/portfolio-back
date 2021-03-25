<?php

namespace App\Models;

use App\Enums\DeveloperLinkType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\DeveloperLink
 *
 * @property int $id
 * @property DeveloperLinkType|null $type
 * @property string|null $url
 * @property bool $is_primary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $developer_id
 * @property-read \App\Models\Developer|null $developer
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereDeveloperId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereIsPrimary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereUrl($value)
 * @mixin \Eloquent
 */
class DeveloperLink extends Model
{
    use HasFactory;

    protected $table = 'developers_links';
    protected $fillable = [
        'type',
        'url',
        'is_primary',
    ];
    protected $casts = [
        'type'        => DeveloperLinkType::class,
        'is_primary'  => 'boolean',
    ];

    public function developer(): BelongsTo
    {
        return $this->belongsTo(Developer::class);
    }
}
