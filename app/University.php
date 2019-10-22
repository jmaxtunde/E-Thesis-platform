<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class University extends Authenticatable
{
    use Notifiable;

    protected $guard = 'university';

    protected $fillable = [
        'name', 'address','email','password'
    ];
    public function faculties()
    {
        return $this->hasMany('App\Faculty');
    }
    public function supervisors()
    {
        return $this->hasMany('App\Supervisor');
    }
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
