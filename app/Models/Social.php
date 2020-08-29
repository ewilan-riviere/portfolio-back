<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

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
    use CrudTrait;

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

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($obj) {
            Storage::disk('public')->delete($obj->image);
        });
    }

    const attribute_type = 'type';
    const attribute_file = 'file';
    const attribute_link = 'link';
    const disk = 'public';
    const destination_path = 'documents';

    public function setTypeAttribute($value)
    {
        $this->attributes[self::attribute_type] = $value;
    }

    public function setFileAttribute($value)
    {
        if ('file' === $this->attributes[self::attribute_type]) {
            if (null !== $value || ' ' !== $value) {
                if (strlen($this->file) > 0) {
                    // get file name from database
                    $filename = str_replace('storage/'.self::destination_path.'/', '', $this->file);
                    // remove current file
                    $valid = Storage::disk('public')->delete(self::destination_path.'/'.$filename);
                }
                $filename = $value->getClientOriginalName();
                $filename = str_slug($filename, '-');
                // $extension = $value->getClientOriginalExtension();

                // save file as
                $path = Storage::disk(self::disk)->putFileAs(self::destination_path, $value, $filename);

                // update database record
                $this->attributes[self::attribute_file] = 'storage/'.$path;

                // clear old record
                $this->attributes[self::attribute_link] = ' ';
            }
        }
    }

    public function setLinkAttribute($value)
    {
        if ('link' === $this->attributes[self::attribute_type]) {
            if (strlen($this->file) > 0) {
                // get file name from database
                $filename = str_replace('storage/'.self::destination_path.'/', '', $this->file);
                // remove current file
                $valid = Storage::disk('public')->delete(self::destination_path.'/'.$filename);
            }

            // update database record
            $this->attributes[self::attribute_link] = $value;

            // clear old record
            $this->attributes[self::attribute_file] = ' ';
        }
    }
}
