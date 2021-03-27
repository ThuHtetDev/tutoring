<?php

namespace App;

use App\Comment;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Post 1 - #php #larave #programming
    // $post->categories;
    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}
