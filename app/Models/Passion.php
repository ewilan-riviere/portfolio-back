<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Passion extends Model
{
    protected $fillable = [
        'name',
        'icon',
        'text',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public static function boot()
    {
        static::saving(function (Passion $passion) {
            if (! empty($passion->slug)) {
                return;
            }
            $passion->slug = Str::slug($passion->title, '-');

            // if (! empty($project->page_title)) {
            //     return;
            // }
            // $project->page_title = $project->title;
        });

        parent::boot();
    }
}
