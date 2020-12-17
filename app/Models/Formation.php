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
 * @property string|null                                                    $slug
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property int|null                                                       $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereSlug($value)
 * @property int $display
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereDisplay($value)
 */
class Formation extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'formations';
    protected $primaryKey = 'slug';
    public $incrementing = false;
    protected $keyType = 'string';
    // public $timestamps = false;
    protected $fillable = [
        'title',
        'slug',
        'certificate',
        'logo',
        'color',
        'color_text_white',
        'resume',
        'place',
        'place_link',
        'vocational',
        'vocational_link',
        'promo',
        'promo_link',
        'level',
        'date_begin',
        'date_end',
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

            // if (! empty($project->page_title)) {
            //     return;
            // }
            // $project->page_title = $project->title;
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

    public function projects()
    {
        return $this->hasMany(Project::class)->where('status', 'published');
    }

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
