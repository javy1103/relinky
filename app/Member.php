<?php

namespace App;

class Member extends Profile
{

    protected $fillable = ['profile_img'];

    public function user() {
        return $this->morphOne('App\User', 'profile');
    }
}
