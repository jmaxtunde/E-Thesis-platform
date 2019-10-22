<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    protected $fillable = [
        'title', 'number_page','co-supervisor', 'degree','abstract','publishedDate', 'coverPage','numberLike','numberView', 'statut',
        'student_id','supervisor_id',
    ];
    public function student()
    {
        return $this->belong('App\Stuent');
    }
    public function supervisor()
    {
        return $this->belong('App\Supervisor');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
