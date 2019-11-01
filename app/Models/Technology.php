<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $table = "technologies";
    protected $timestamp = false;

    protected $fillable = [
        "name",
        "display_name",
        "details",
        "logo"
    ];
    protected $guarded = [
        "id"
    ];
}
