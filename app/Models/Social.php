<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
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
        'file',
        'icon'
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
            'file' => 'Fichier',
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
        static::deleting(function($obj) {
            Storage::disk('public')->delete($obj->image);
        });
    }

    public function setFileAttribute($value)
    {
        $attribute_type = "type";
        $attribute_file = "file";
        $attribute_link = "link";
        $disk = "public";
        $destination_path = "documents";

        if ($this->attributes[$attribute_type] = 'file') {

            // clear link record
            $this->attributes[$attribute_link] = null;
            if ($value !== null) {
                if (strlen($this->file) > 0) {
                    // get file name from database
                    $filename = str_replace('storage/'.$destination_path.'/','',$this->file);
                    // remove current file
                    $valid = Storage::disk('public')->delete($destination_path.'/'.$filename);
                }
                $title = str_slug("Laravel 5 Framework", "-");
                $filename = $value->getClientOriginalName();
                $extension = $value->getClientOriginalExtension();

                // save file as
                $path = Storage::disk($disk)->putFileAs($destination_path, $value, $filename);

                // update database record
                $this->attributes[$attribute_file] = 'storage/'.$path;
            }
        }
    }

    public function setLinkAttribute($value)
    {
        $attribute_type = "type";
        $attribute_file = "file";
        $attribute_link = "link";
        $disk = "public";
        $destination_path = "documents";

        if ($this->attributes[$attribute_type] = 'link') {

            // clear link record
            $this->attributes[$attribute_file] = null;
            if (strlen($value) > 0) {
                if (strlen($this->file) > 0) {
                    // get file name from database
                    $filename = str_replace('storage/'.$destination_path.'/','',$this->file);
                    // remove current file
                    $valid = Storage::disk('public')->delete($destination_path.'/'.$filename);
                }

                $this->attributes[$attribute_file] = null;
                $this->attributes[$attribute_link] = $value;
            }
        }
    }
}

