<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

/**
 * App\Models\Skill.
 *
 * @property int                                                            $id
 * @property string                                                         $title
 * @property string|null                                                    $version
 * @property string|null                                                    $link
 * @property int                                                            $is_free_app
 * @property string|null                                                    $color
 * @property int                                                            $color_text_dark
 * @property string|null                                                    $subtitle
 * @property string|null                                                    $details
 * @property int                                                            $is_favorite
 * @property float                                                          $rating
 * @property string|null                                                    $image
 * @property string|null                                                    $blockquote_text
 * @property string|null                                                    $blockquote_who
 * @property \Illuminate\Support\Carbon|null                                $created_at
 * @property \Illuminate\Support\Carbon|null                                $updated_at
 * @property int                                                            $category_id
 * @property \App\Models\Category                                           $category
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property int|null                                                       $projects_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereBlockquoteText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereBlockquoteWho($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereColorTextDark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereIsFavorite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereIsFreeApp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereVersion($value)
 * @mixin \Eloquent
 */
class Skill extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'skills';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'version',
        'link',
        'is_free_app',
        'color',
        'subtitle',
        'details',
        'is_favorite',
        'rating',
        'image',
        'blockquote_text',
        'blockquote_who',
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

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
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

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($obj) {
            \Storage::disk('public')->delete($obj->image);
        });
    }

    public function setImageAttribute($value)
    {
        $attribute_name = 'image';
        // $disk = config('backpack.base.root_disk_name'); // or use your own disk, defined in config/filesystems.php
        $disk = 'public';
        $destination_path = 'skills'; // path relative to the disk above

        $existing_file = storage_path(Str::replaceFirst('storage/', '', 'app/public/'.$this->attributes[$attribute_name]));

        // if the image was erased
        if (null === $value) {
            // delete the image from disk
            // \Storage::disk($disk)->delete($this->{$attribute_name});
            try {
                $valid = unlink(
                    $existing_file
                );
            } catch (\Throwable $th) {
                //throw $th;
            }

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image')) {
            try {
                $valid = unlink(
                    $existing_file
                );
            } catch (\Throwable $th) {
                //throw $th;
            }

            $slug = str_slug($this->attributes['title'], '-');

            // 0. Make the image
            $image = \Image::make($value)->encode('png', 90);
            // 1. Generate a filename.
            $filename = $slug.'.png';
            // 2. Store the image on disk.
            Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it from the root folder
            // that way, what gets saved in the database is the user-accesible URL
            $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = 'storage/'.$public_destination_path.'/'.$filename;
        }
    }
}
