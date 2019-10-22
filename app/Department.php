<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name', 'email','address', 'contact','logo','faculty_id'
    ];
    public function faculty()
    {
        return $this->belongsTo('App\faculty');
    }
}
