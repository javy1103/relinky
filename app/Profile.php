<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Profile extends Model
{
    public function profileImage() {
        return ($this->profile_img) ? Storage::disk('s3')->url( $this->profile_img ) : '/img/avatars/user.png';
    }
}
