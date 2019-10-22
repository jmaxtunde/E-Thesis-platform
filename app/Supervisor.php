<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Supervisor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'supervisor';

    protected $fillable = [
        'title', 'name','university', 'faculty','department','email', 'phone','address','password', 
    ];
    public function student()
    {
        return $this->hasMany('App\Student');
    }
    public function theses()
    {
        return $this->hasMany('App\Thesis');
    }
    public function university()
    {
        return $this->belongsTo('App\University');
    }
    public function groupresearches()
    {
        return $this->hasMany('App\GroupResearch');
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
