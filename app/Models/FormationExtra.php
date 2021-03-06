<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Enums\FormationExtraType;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\FormationExtra
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $link
 * @property FormationExtraType|null $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $formation_id
 * @property-read \App\Models\Formation|null $formation
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereFormationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FormationExtra extends Model
{
    use HasFactory;

    protected $table = 'formations_extra';
    protected $fillable = [
        'name',
        'link',
        'type',
    ];
    protected $casts = [
        'type' => FormationExtraType::class,
    ];

    public function formation(): BelongsTo
    {
        return $this->belongsTo(Formation::class);
    }
}
