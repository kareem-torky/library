<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'content', 'user_id'
    ];

    // note belongsTo one user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
