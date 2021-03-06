<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'is_admin', 'access_token', 'oauth_token'
    ];

   
    protected $hidden = [
        'password'
    ];

    // user hasMany notes 
    public function notes()
    {
        return $this->hasMany('App\Note');
    }
}
