<?php

namespace App\Models;

use App\Models\Enums\DeveloperLinkType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
