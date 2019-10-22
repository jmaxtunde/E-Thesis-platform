<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupResearch extends Model
{
    protected $fillable = [
        'group_name', 'enrollmentKey','status', 'endDate','supervisor_Id',
    ];
    public function supervisor()
    {
        return $this->belongsTo('App\Supervisor');
    }
    public function users()
    {
        return $this->hasMany('App\Student');
    }
}
