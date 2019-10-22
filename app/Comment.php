<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content', 'thesis_id',
    ];
    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }
}
