<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // $profile->user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
