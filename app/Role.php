<?php

namespace App;

use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // Has Many Through
    public function posts(){
        return $this->hasManyThrough(Post::class,User::class);
    }
}
