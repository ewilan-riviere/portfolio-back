<?php

namespace App\Models;

use App\Models\Enums\FormationLinkType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormationLink extends Model
{
    protected $table = 'formations_links';
    protected $fillable = [
        'name',
        'link',
        'type',
    ];
    protected $casts = [
        'type' => FormationLinkType::class,
    ];

    public function formation(): BelongsTo
    {
        return $this->belongsTo(Formation::class);
    }
}
