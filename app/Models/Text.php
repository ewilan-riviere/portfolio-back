<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

/**
 * App\Models\Text.
 *
 * @property int                             $id
 * @property string                          $slug
 * @property string                          $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Text newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Text newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Text query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Text whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Text whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Text whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Text whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Text whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Text extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'texts';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'slug',
        'text',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setSlugAttribute($value)
    {
        $value = str_slug($value, '-');

        $this->attributes['slug'] = $value;
    }
}
