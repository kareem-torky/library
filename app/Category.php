<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    // category belongsToMany books
    public function books()
    {
        return $this->belongsToMany('App\Book');
    }
}
