<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Social.
 *
 * @property int                             $id
 * @property string                          $name
 * @property string|null                     $type
 * @property string|null                     $file
 * @property string|null                     $link
 * @property string|null                     $icon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Social whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Social extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'socials';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'type',
        'link',
        'file',
        'icon',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function getType()
    {
        return [
            'link'   => 'Lien',
            'file'   => 'Fichier',
        ];
    }

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
}
