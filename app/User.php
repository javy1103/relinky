<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;
    use Searchable;

    public function getRouteKeyName() {
        return 'username';
    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }

    //load profile realtion
    protected $with = ['profile'];

    public function toggleAcct( $input ) :boolean {
        return $this->update(['isActive' => $input]);
    }

    //check if is current user
    public function isCurrentUser() {
        return ( Auth::user() && Auth::user()->id == $this->id ) ? true : false ;
    }

    // The attributes that are mass assignable.
    protected $fillable = [
        'name', 'username', 'profile_type', 'email', 'password', 'isActive'
    ];

    // protected $casts = ['isActive' => 'boolean'];

    // The attributes that should be hidden for arrays.
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Get profile relation
    public function profile() {
        return $this->morphTo();
    }
}
