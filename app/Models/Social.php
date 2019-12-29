<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Social extends Model {

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
        'link',
        'icon'
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

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('public')->delete($obj->image);
        });
    }

    public function setLinkAttribute($value)
    {
        // $attribute_name = "link";
        // $disk = "public";
        // $destination_path = "documents";

        // $filename = 'cv.pdf';

        // \Storage::disk($disk)->put($destination_path.'/'.$filename, $value);

        // $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
        // $this->attributes[$attribute_name] = $destination_path.'/'.$value;

        $attribute_name = "link";
        $disk = "public";
        $destination_path = "documents";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

    // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    // public function setLinkAttribute($value)
    // {
    //     $attribute_name = "link";
    //     // $disk = config('backpack.base.root_disk_name'); // or use your own disk, defined in config/filesystems.php
    //     $disk = 'public';
    //     $destination_path = "products"; // path relative to the disk above

    //     // if the image was erased
    //     if ($value==null) {
    //         // delete the image from disk
    //         \Storage::disk($disk)->delete($this->{$attribute_name});

    //         // set null in the database column
    //         $this->attributes[$attribute_name] = null;
    //     }

    //     // if a base64 was sent, store it in the db
    //     if (starts_with($value, 'data:image'))
    //     {
    //         // 0. Make the image
    //         $image = \Image::make($value)->encode('png', 90);
    //         // 1. Generate a filename.
    //         $filename = md5($value.time()).'.png';
    //         // 2. Store the image on disk.
    //         \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
    //         // 3. Save the public path to the database
    //     // but first, remove "public/" from the path, since we're pointing to it from the root folder
    //     // that way, what gets saved in the database is the user-accesible URL
    //         $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
    //         $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
    //     }
	// }
}

