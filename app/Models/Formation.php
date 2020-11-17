<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Formation.
 *
 * @property int                             $id
 * @property string|null                     $title
 * @property string|null                     $certificate
 * @property string|null                     $logo
 * @property string                          $color
 * @property int                             $color_text_white
 * @property string|null                     $resume
 * @property string|null                     $type
 * @property string|null                     $place
 * @property string|null                     $place_link
 * @property string|null                     $vocational
 * @property string|null                     $vocational_link
 * @property string|null                     $promo
 * @property string|null                     $promo_link
 * @property string|null                     $level
 * @property string|null                     $date_begin
 * @property string|null                     $date_end
 * @property string|null                     $project_title
 * @property string|null                     $project_resume
 * @property string|null                     $project_image
 * @property string|null                     $project_type
 * @property string|null                     $project_link
 * @property string|null                     $project_file
 * @property int                             $finished
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereColorTextWhite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereDateBegin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereFinished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation wherePlaceLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereProjectFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereProjectImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereProjectLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereProjectResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereProjectTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereProjectType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation wherePromo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation wherePromoLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereVocational($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Formation whereVocationalLink($value)
 * @mixin \Eloquent
 */
class Formation extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'formations';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'slug',
        'certificate',
        'logo',
        'color',
        'color_text_white',
        'resume',
        'formation_type',
        'place',
        'place_link',
        'vocational',
        'vocational_link',
        'promo',
        'promo_link',
        'level',
        'date_begin',
        'date_end',
        'project_title',
        'project_resume',
        'project_image',
        'project_type',
        'project_link',
        'project_file',
        'status',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    public static function boot()
    {
        static::saving(function (Formation $formation) {
            if (! empty($formation->slug)) {
                return;
            }
            $formation->slug = Str::slug($formation->title, '-');

            // TODO: page_title, page_meta
        });

        parent::boot();
    }

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
}
