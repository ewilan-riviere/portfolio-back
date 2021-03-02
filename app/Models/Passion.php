<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Passion.
 *
 * @property int                             $id
 * @property string                          $name
 * @property string|null                     $icon
 * @property string|null                     $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Passion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Passion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Passion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Passion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Passion whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Passion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Passion whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Passion whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Passion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
