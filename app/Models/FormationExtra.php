<?php

namespace App\Models;

use App\Enums\FormationExtraType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormationExtra extends Model
{
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
