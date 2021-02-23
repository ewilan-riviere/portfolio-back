<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectLink extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'back_repository',
        'back_project',
        'front_repository',
        'front_project',
        'app_repository',
        'app_project',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Game::class, 'game_name');
    }
}
