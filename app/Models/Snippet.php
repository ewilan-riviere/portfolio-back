<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

/**
 * App\Models\Snippet.
 *
 * @property int                             $id
 * @property string                          $slug
 * @property string|null                     $snippet
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereSnippet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Snippet whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Snippet extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'snippets';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'slug',
        'snippet',
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
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
