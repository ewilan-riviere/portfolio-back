<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

/**
 * App\Models\Project.
 *
 * @property int                                                                  $id
 * @property string                                                               $title
 * @property int                                                                  $order
 * @property string|null                                                          $image
 * @property string|null                                                          $image-title
 * @property string|null                                                          $resume
 * @property string|null                                                          $github_link
 * @property string|null                                                          $try_it
 * @property string|null                                                          $font
 * @property int                                                                  $is_collective
 * @property \Illuminate\Support\Carbon|null                                      $created_at
 * @property \Illuminate\Support\Carbon|null                                      $updated_at
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\ProjectMember[] $projectsMembers
 * @property int|null                                                             $projects_members_count
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[]         $skills
 * @property int|null                                                             $skills_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereFont($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereGithubLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereImageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereIsCollective($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereTryIt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'projects';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'order',
        'image',
        'resume',
        'github_link',
        'try_it',
        'font',
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

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function projectsMembers()
    {
        return $this->belongsToMany(ProjectMember::class);
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
        $destination_path = 'projects'; // path relative to the disk above

        // if the image was erased
        if (null == $value) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image')) {
            // 0. Make the image
            $image = \Image::make($value)->encode('png', 90);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.png';
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it from the root folder
            // that way, what gets saved in the database is the user-accesible URL
            $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = 'storage/'.$public_destination_path.'/'.$filename;
        }
    }
}
