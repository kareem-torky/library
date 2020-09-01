<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'desc', 'img'
    ];

    // book belongsToMany categories
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
