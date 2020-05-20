<?php

namespace App;

use Alert;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles;
    use CrudTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function save(array $options = [])
    {
        if ('production' == app('env') &&
            ! app()->runningInConsole() &&
            ! app()->runningUnitTests()) {
            Alert::warning('User editing is disabled in the demo.');

            return true;
        }

        return parent::save($options);
    }
}
