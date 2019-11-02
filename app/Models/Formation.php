<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'formations';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'title_link',
        'logo',
        'place',
        'place_link',
        'promo',
        'promo_link',
        'level',
        'date_begin',
        'date_end',
        'project',
        'project_link'
    ];

    public $timestamps = false;
}
